(function(){

define(['utilities/global', 'controllers/application', 'plugins/reveal', 'vendors/menu-aim/menu-aim'], function(){

	var _util = window.LSP.utilities;

	_util.register('controller', 'flyout', (function(){
		var _this = {};
		var _lsp = window.LSP;
		
		var _flyout;
		var _flyoutControlButton;
		var _flyoutParent;

		var _isOpen = false;
		var _currentFlyoutTween;
		
		var _holdOpen = false;
		var _waitToOpen = false;
		var _isOpen = false;
		var _isOpenFromClick = false;
		var _isClosedFromClick = false;
		var _waitToCloseFromClick = false;
		var _topLevelTimeout; // Used when _holdOpen is true, waits to open flyout

		var _revealController = _lsp.controllers.reveal;

		var OPEN_SPEED = 150;
		var EXIT_TIMEOUT = 500;
		var ENTER_TIMEOUT = 250;

		_this =  {
			name : 'flyout',
			events : {
				application : {
					onContextChangeLeavePhone : function(e, data){
						_this.attachMenu();
					},
					onContextChangeEnterPhone : function(e, data){
						_this.detachMenu();
					},

					// We want to make sure we fire after reveal.js (which uses onReady)
					onAfterReady : function(e, data){
						if(_lsp.controllers.application.getContext() !== 'phone'){
							_this.attachMenu();
						}
						if(document.location.href.indexOf('netsuite') > 0){
							_this.closeFlyout(true);
						}
					}
				}
			},
			assets : {},


			attachMenu : function(){

				// Release to the browser
				//setTimeout(function(){

					var _holdOpenFlyoutTimeout; // When the menu is holdOpen
												// we need to wait to activate a row
												// for the first time

					_flyoutControlButton = $('#flyoutControlButton');
					_flyout = $('#mainFlyout');
					_flyoutParent = $('#mainFlyout .topLevel');

					// Unbind the native reveal functionality
					if(_revealController){
						_revealController.unbindEvents(_flyoutParent);
					}

					// Create the menu
					_flyoutParent.menuAim({
						activate : _this.showRow,
						deactivate : _this.hideRow,
						exitTimeout : EXIT_TIMEOUT,
						exitMenu : function(){
							return true;
						},
						afterExitMenu : function(){
							_isOpen = false;
							_waitToOpen = _holdOpen;
							clearTimeout(_topLevelTimeout);
						}
					});

					// I'm using annynomus functions here to hide the event
					// argument from the controller methods. You shouldn't expect
					// openFlyout or closeFlyout to rely on the event - it's possible
					// to force it open from elsewhere (like on the home page)
					var closeTimeout;
					var openTimeout;
					
					// Control Button
					_flyoutControlButton.off('.flyout').on('mouseenter.lsp.flyout', function(e){ 
						if(!_isOpen && !_isClosedFromClick){
							openTimeout = setTimeout(_this.openFlyout, ENTER_TIMEOUT); // Start the timer
						}
					}).on('mouseleave.lsp.flyout', function(e){
						clearTimeout(openTimeout); // Clear timeout on exit

					}).on('click.lsp.flyout', function(e){
						_isOpenFromClick = !_isOpen;
						_isClosedFromClick = !_isOpenFromClick;
						_waitToCloseFromClick = true;
						_this.toggleFlyout();
						if(_isClosedFromClick){
							setTimeout(function(){
								_isClosedFromClick = false;
							}, 800);
						}
					});

					$('.topLevel').off('.flyout').on('click.lsp.flyout', function(e){
						_flyoutControlButton.click();
						e.stopPropagation();
					});
					$('.topLevel li').off('.flyout').on('click.lsp.flyout', function(e){
						e.stopPropagation();
					});

					// Container
					$('.container', _flyout).on('mouseenter.lsp.flyout', function(e){
						clearTimeout(closeTimeout);
					});

					// Wrapper
					$('.wrapper', _flyout).on('mouseleave.lsp.flyout', function(e){
						//clearTimeout(timeout);
						if(!_waitToCloseFromClick){
							closeTimeout = setTimeout(_this.closeFlyout, EXIT_TIMEOUT);
							clearTimeout(_topLevelTimeout);
						}
						_waitToCloseFromClick = false;
						e.stopPropagation();
					});

					// Trigger Event
					$(this).triggerHandler('onAfterAttach', {selector : _flyout});
				//}, 0);
			},

			detachMenu : function(){
				// If the flyout exists, destroy it
				if(_flyout){
					_this.closeFlyout();
					$('*', _flyout).off('.menuaim');
					_flyoutControlButton.off('.flyout');
					$('.wrapper', _flyout).off('.flyout');
				}

				// Rebind the reveal events
				if(_revealController){
					_revealController.bindEvents(_flyoutParent);
				}

			},
			
			// Opens the flyout, set holdOpen to true, and the menu will remain open
			// even when mousing out. holdOpen will also add a timeout to row activation
			// much in the same way there is a timeout on the main flyout button
			openFlyout : function(holdOpen){
				_holdOpen = holdOpen || false;
				_waitToOpen = _holdOpen;
				_isOpen = true;

				if(_flyout){
					_flyout.addClass('active');
					_flyoutControlButton.addClass('active');
					_util.scrollTo($('.collection:first-child', _flyout));
				}
			},

			closeFlyout : function(reset){

				if(_flyout){ // Only if attachMenu has been called
					clearTimeout(_topLevelTimeout);

					_isOpen = false;

					// This is used to put the home page flyout back to normal
					if(reset){
						_holdOpen = false;
						_waitToOpen = false;
					}

					if(!_holdOpen){
						_flyout.removeClass('active');
						_flyoutControlButton.removeClass('active');
						$('li.collection.active', _flyout).removeClass('active');

						// Finish any lingering animations
						if(_currentFlyoutTween){
							$(_currentFlyoutTween.elem).stop(true, true);
						}
						_currentFlyoutTween = null;

						_isOpen = false;
					}

					//_this.attachMenu(); // Reset
				}else{
					// Is in the phone, so close the reveals
					_lsp.controllers.reveal.close($('#mainFlyout, #mainFlyout *[data-reveal-children]'), false);
				}
			},
			toggleFlyout : function(){
				if(_isOpen){
					_this.closeFlyout();
				}else{
					_this.openFlyout();
				}
			},

			showRow : function(element, forceShow){

				// We want to wait to open it if it's _holdOpen, and
				// if it hasn't already been opened (_waitToOpen)
				// forceShow is a way to avoid having two functions
				// the timeout just calls itself again with the flag
				if(_holdOpen && _waitToOpen && !forceShow){
					
					clearTimeout(_topLevelTimeout);
					
					_topLevelTimeout = setTimeout(function(){
						_this.showRow(element, true);
					}, ENTER_TIMEOUT);

				}else{
								
					// Reset the close timeout
					element = $(element);
					_waitToOpen = false;

					if(!_isOpen){

						// Because the content windows are all unique
						// we need to 'transfer' the animation to the new
						// content window to create a seemless slide right

						// We do this by storing the tween object, and hijacking it
						// mid-animation -- there is a little cleanup work to be done
						// after doing this
						
						var flyout = $('.flyout', element);
						

						if(_currentFlyoutTween){
							// Animation in progress, hijack it!
							$(_currentFlyoutTween.elem).removeAttr('style'); // Cleanup!
							$(flyout[0]).css({'width' : _currentFlyoutTween.now, 'overflow' : 'hidden'}); // we are likely between frames, this helps smooth the transition
							_currentFlyoutTween.elem = flyout[0]; // Hijack it.

						}else{

							var width = flyout.outerWidth();
							
							// No animation has started, so create one
							flyout
								.css({width : 0})
								.animate({width: width}, {
									duration : OPEN_SPEED,
									easing : 'swing',
									step : function(a, tween){
										// on each frame, store the tween object
										// we really only need to do this once (not every step)- but this is the
										// only place I found we have access to the tween object
										_currentFlyoutTween = tween;
									},
									always : function(e){
										$('.flyout[style]', _flyout).css({width: ''}); // atomic cleanup, why?
										_currentFlyoutTween = null; // cleanup
										_isOpen = true; // prevent the animation from happening again
									}
								});
						}

					}

					// We have to use a class rather than just the :hover
					// pesduo element because it's possible to
					// hover an item but not be active (the whole reason
					// we are using this plugin)
					
					element.addClass('active');
					if(element.unveil){
						$('*[data-src]', element).unveil();
					}
				}
			},
			hideRow : function(element){
				$(element).removeClass('active');
			}
		};

		return _this;
		
	})());

});

})();