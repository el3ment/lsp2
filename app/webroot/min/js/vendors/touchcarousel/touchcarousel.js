/*
 * TouchCarousel  v1.1
 *
 * Copyright 2011, Dmitry Semenov, http://dimsemenov.com
 * 
 */

(function(){define(["jquery"],function(){(function(e){function t(t,n){this.carouselRoot=e(t);var r=this;this._lockYAxis=!1,this._isAnimating=!1,this._downEvent="",this._moveEvent="",this._upEvent="",this._totalItemsWidth,this._itemWidths,this._startAccelerationX,this._accelerationX,this._latestDragX,this._startTime=0,this.settings=e.extend({},e.fn.touchCarousel.defaults,n),this._dragContainer=this.carouselRoot.find(".touchcarousel-container"),this._dragContainerStyle=this._dragContainer[0].style,this._itemsWrapper=this._dragContainer.wrap(e('<div class="touchcarousel-wrapper" />')).parent();var i=this._dragContainer.find(".touchcarousel-item");this.items=[],this.numItems=i.length;var s=navigator.userAgent.toLowerCase(),o=function(e){var t=/(chrome)[ \/]([\w.]+)/.exec(e)||/(webkit)[ \/]([\w.]+)/.exec(e)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(e)||/(msie) ([\w.]+)/.exec(e)||e.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(e)||[];return{browser:t[1]||"",version:t[2]||"0"}},u=o(s),a={};u.browser&&(a[u.browser]=!0,a.version=u.version),a.chrome&&(a.webkit=!0),r._browser=a,this._decelerationAnim,this._successfullyDragged=!1,this._startMouseX=0,this._prevMouseX=0,this._moveDist=0,this._blockClickEvents=!1,this._wasBlocked=!1,this._useWebkitTransition=!1;if("ontouchstart"in window)this.hasTouch=!0,this._downEvent="touchstart.rs",this._moveEvent="touchmove.rs",this._upEvent="touchend.rs",this._baseFriction=this.settings.baseTouchFriction;else{this.hasTouch=!1,this._baseFriction=this.settings.baseMouseFriction;if(this.settings.dragUsingMouse){this._downEvent="mousedown.rs",this._moveEvent="mousemove.rs",this._upEvent="mouseup.rs",this._grabCursor,this._grabbingCursor;var s=r._browser;s.msie||s.opera?this._grabCursor=this._grabbingCursor="move":s.mozilla&&(this._grabCursor="-moz-grab",this._grabbingCursor="-moz-grabbing"),this._setGrabCursor()}else this._itemsWrapper.addClass("auto-cursor")}(this.hasTouch||this.settings.useWebkit3d)&&"WebKitCSSMatrix"in window&&"m11"in new WebKitCSSMatrix&&(this._dragContainer.css({"-webkit-transform-origin":"0 0","-webkit-transform":"translateZ(0)"}),this._useWebkitTransition=!0),this._useWebkitTransition?(this._xProp="-webkit-transform",this._xPref="translate3d(",this._xSuf="px, 0, 0)"):(this._xProp="left",this._xPref="",this._xSuf="px"),this.hasTouch&&(this.settings.directionNavAutoHide=!1),this.settings.directionNav||(this.settings.loopItems?(this._arrowLeftBlocked=!0,this._arrowRightBlocked=!0):(this._arrowLeftBlocked=!1,this._arrowRightBlocked=!1),this.settings.loopItems=!0);var f,l,c,h,p=0;i.eq(this.numItems-1).addClass("last"),i.each(function(t){l=e(this),f={},f.item=l,f.index=t,f.posX=p,f.width=l.outerWidth(!0)||r.settings.itemFallbackWidth,p+=f.width;if(!this.hasTouch)l.find("a").bind("click.touchcarousel",function(e){if(r._successfullyDragged)return e.preventDefault(),!1});else{var n=l.find("a"),i;n.each(function(){i=e(this),i.data("tc-href",i.attr("href")),i.data("tc-target",i.attr("target")),i.attr("href","#"),i.bind("click",function(t){t.preventDefault();if(r._successfullyDragged)return!1;var n=e(this).data("tc-href"),i=e(this).data("tc-target");!i||i.toLowerCase()==="_self"?window.location.href=n:window.open(n)})})}l.find(".non-draggable").bind(r._downEvent,function(e){r._successfullyDragged=!1,e.stopImmediatePropagation()}),r.items.push(f)}),this._maxXPos=this._totalItemsWidth=p,this.settings.itemsPerMove>0?this._itemsPerMove=this.settings.itemsPerMove:this._itemsPerMove=1;if(this.settings.pagingNav){this.settings.snapToItems=!0,this._pagingEnabled=!0,this._numPages=Math.ceil(this.numItems/this._itemsPerMove),this._currPageId=0;if(this.settings.pagingNavControls){this._pagingNavContainer=e('<div class="tc-paging-container"><div class="tc-paging-centerer"><div class="tc-paging-centerer-inside"></div></div></div>');var d=this._pagingNavContainer.find(".tc-paging-centerer-inside"),v;for(var m=1;m<=this._numPages;m++)v=e('<a class="tc-paging-item" href="#" id="tcPagingItem'+m+'">'+m+"</a>").data("tc-id",m),m===this._currPageId+1&&v.addClass("current"),d.append(v);this._pagingItems=d.find(".tc-paging-item").click(function(t){t.preventDefault(),r.goTo((e(t.currentTarget).data("tc-id")-1)*r._itemsPerMove)}),this._itemsWrapper.after(this._pagingNavContainer)}}else this._pagingEnabled=!1;this._dragContainer.css({width:p}),this.settings.directionNav&&(this._itemsWrapper.after("<a id='tcPagingLeft' href='#' class='arrow-holder left'><span class='arrow-icon left'></span></a> <a id='tcPagingRight' href='#' class='arrow-holder right'><span class='arrow-icon right'></span></a>"),this.arrowLeft=this.carouselRoot.find(".arrow-holder.left"),this.arrowRight=this.carouselRoot.find(".arrow-holder.right"),this.arrowLeft.length<1||this.arrowRight.length<1?this.settings.directionNav=!1:this.settings.directionNavAutoHide&&(this.arrowLeft.hide(),this.arrowRight.hide(),this.carouselRoot.one("mousemove.arrowshover",function(){r.arrowLeft.fadeIn("fast"),r.arrowRight.fadeIn("fast")}),this.carouselRoot.hover(function(){r.arrowLeft.fadeIn("fast"),r.arrowRight.fadeIn("fast")},function(){r.arrowLeft.fadeOut("fast"),r.arrowRight.fadeOut("fast")})),this._updateDirectionNav(0),this.settings.directionNav&&(this.arrowRight.click(function(e){e.preventDefault(),(r.settings.loopItems&&!r._blockClickEvents||!r._arrowRightBlocked)&&r.next()}),this.arrowLeft.click(function(e){e.preventDefault(),(r.settings.loopItems&&!r._blockClickEvents||!r._arrowLeftBlocked)&&r.prev()}))),this.carouselWidth,this._resizeEvent="onorientationchange"in window?"orientationchange.touchcarousel":"resize.touchcarousel";var g;e(window).bind(this._resizeEvent,function(){g&&clearTimeout(g),g=setTimeout(function(){r.updateCarouselSize(!1)},100)}),this.settings.scrollbar?(this._scrollbarHolder=e("<div class='scrollbar-holder'><div class='scrollbar"+(this.settings.scrollbarTheme.toLowerCase()==="light"?" light":" dark")+"'></div></div>"),this._scrollbarHolder.appendTo(this.carouselRoot),this.scrollbarJQ=this._scrollbarHolder.find(".scrollbar"),this._scrollbarHideTimeout="",this._scrollbarStyle=this.scrollbarJQ[0].style,this._scrollbarDist=0,this.settings.scrollbarAutoHide?(this._scrollbarVisible=!1,this.scrollbarJQ.css("opacity",0)):this._scrollbarVisible=!0):this.settings.scrollbarAutoHide=!1,this.updateCarouselSize(!0),this._itemsWrapper.bind(this._downEvent,function(e){r._onDragStart(e)}),this.settings.autoplay&&this.settings.autoplayDelay>0?(this._isHovering=!1,this.autoplayTimer="",this.wasAutoplayRunning=!0,this.hasTouch||this.carouselRoot.hover(function(){r._isHovering=!0,r._stopAutoplay()},function(){r._isHovering=!1,r._resumeAutoplay()}),this.autoplay=!0,this._releaseAutoplay()):this.autoplay=!1,this.settings.keyboardNav&&e(document).bind("keydown.touchcarousel",function(e){r._blockClickEvents||(e.keyCode===37?r.prev():e.keyCode===39&&r.next())}),this.carouselRoot.css("overflow","visible")}t.prototype={goTo:function(t,n){var r=this.items[t];if(r){!n&&this.autoplay&&this.settings.autoplayStopAtAction&&this.stopAutoplay(),this._updatePagingNav(t),this.endPos=this._getXPos();var i=-r.posX;i>0?i=0:i<this.carouselWidth-this._maxXPos&&(i=this.carouselWidth-this._maxXPos),this.animateTo(i,this.settings.transitionSpeed,"easeInOutSine"),e(r.item.context).unveil&&e("*[data-src]",r.item.context).unveil()}},next:function(e){var t=this._getXPos(),n=this._getItemAtPos(t).index;if(!this._pagingEnabled)n+=this._itemsPerMove,this.settings.loopItems&&t<=this.carouselWidth-this._maxXPos&&(n=0),n>this.numItems-1&&(n=this.numItems-1);else{var r=this._currPageId+1;r>this._numPages-1?this.settings.loopItems?n=0:n=(this._numPages-1)*this._itemsPerMove:n=r*this._itemsPerMove}this.goTo(n,e)},prev:function(e){var t=this._getXPos(),n=this._getItemAtPos(t).index;if(!this._pagingEnabled)n-=this._itemsPerMove,n<0&&(this.settings.loopItems?t<0?n=0:n=this.numItems-1:n=0);else{var r=this._currPageId-1;r<0?this.settings.loopItems?n=(this._numPages-1)*this._itemsPerMove:n=0:n=r*this._itemsPerMove}this.goTo(n,e)},getCurrentId:function(){var e=this._getItemAtPos(this._getXPos()).index;return e},setXPos:function(e,t){t?this._scrollbarStyle[this._xProp]=this._xPref+e+this._xSuf:this._dragContainerStyle[this._xProp]=this._xPref+e+this._xSuf},stopAutoplay:function(){this._stopAutoplay(),this.autoplay=!1,this.wasAutoplayRunning=!1},resumeAutoplay:function(){this.autoplay=!0,this.wasAutoplayRunning||this._resumeAutoplay()},updateCarouselSize:function(e){var t=this;this.carouselWidth=this.carouselRoot.width(),this._totalItemsWidth=0;for(var n=0;n<this.items.length;n++)this.items[n].width=this.items[n].item.outerWidth(),this._totalItemsWidth+=this.items[n].width;this.settings._calculatePageWidth&&(this._itemsPerMove=Math.floor(this.carouselWidth/(this.items[0].width||1))||1),this._dragContainer.css({width:this._totalItemsWidth});for(var n=0;n<this.items.length;n++)this.items[n].posX=this.items[n].item.position().left;if(this.settings.scrollToLast){var r=0;if(this._pagingEnabled){var i=this.numItems%this._itemsPerMove;if(i>0)for(var n=this.numItems-i;n<this.numItems;n++)r+=this.items[n].width;else r=this.carouselWidth}else r=this.items[this.numItems-1].width;this._maxXPos=this._totalItemsWidth+this.carouselWidth-r}else this._maxXPos=this._totalItemsWidth;if(this.settings.scrollbar){var s=Math.round(this._scrollbarHolder.width()/(this._maxXPos/this.carouselWidth));this.scrollbarJQ.css("width",s),this._scrollbarDist=this._scrollbarHolder.width()-s}if(!this.settings.scrollToLast){if(this.carouselWidth>=this._totalItemsWidth){this._wasBlocked=!0,this.settings.loopItems||(this._arrowRightBlocked=!0,this.arrowRight.addClass("disabled"),this._arrowLeftBlocked=!0,this.arrowLeft.addClass("disabled")),this.setXPos(0);return}this._wasBlocked&&(this._wasBlocked=!1,this._arrowRightBlocked=!1,this._arrowLeftBlocked=!1,this.arrowRight.removeClass("disabled"),this.arrowLeft.removeClass("disabled"))}if(!e){var o=this.endPos=this._getXPos();o>0?o=0:o<this.carouselWidth-this._maxXPos&&(o=this.carouselWidth-this._maxXPos),this.animateTo(o,300,"easeInOutSine")}this.goTo(this._currPageId||0)},animateTo:function(t,n,r,i,s,o,u){function b(){a._isAnimating=!1,a._releaseAutoplay(),a.settings.scrollbarAutoHide&&a._hideScrollbar(),a.settings.onAnimComplete!==null&&a.settings.onAnimComplete.call(a)}this.settings.onAnimStart!==null&&this.settings.onAnimStart.call(this),this.autoplay&&this.autoplayTimer&&(this.wasAutoplayRunning=!0,this._stopAutoplay()),this._stopAnimation();var a=this,f=this.settings.scrollbar,l=a._xProp,c=a._xPref,h=a._xSuf,p={containerPos:this.endPos},d={containerPos:t},v={containerPos:s},s=i?s:t,m=a._dragContainerStyle;a._isAnimating=!0;if(f){var g=this._scrollbarStyle,y=a._maxXPos-a.carouselWidth;this.settings.scrollbarAutoHide&&(this._scrollbarVisible||this._showScrollbar())}this._updateDirectionNav(s),this._decelerationAnim=e(p).animate(d,{duration:n,easing:r,step:function(){f&&(g[l]=c+Math.round(a._scrollbarDist*(-this.containerPos/y))+h),m[l]=c+Math.round(this.containerPos)+h},complete:function(){i?a._decelerationAnim=e(d).animate(v,{duration:o,easing:u,step:function(){f&&(g[l]=c+Math.round(a._scrollbarDist*(-this.containerPos/y))+h),m[l]=c+Math.round(this.containerPos)+h},complete:function(){f&&(g[l]=c+Math.round(a._scrollbarDist*(-v.containerPos/y))+h),m[l]=c+Math.round(v.containerPos)+h,b()}}):(f&&(g[l]=c+Math.round(a._scrollbarDist*(-d.containerPos/y))+h),m[l]=c+Math.round(d.containerPos)+h,b())}})},destroy:function(){this.stopAutoplay(),this._itemsWrapper.unbind(this._downEvent),e(document).unbind(this._moveEvent).unbind(this._upEvent),e(window).unbind(this._resizeEvent),this.settings.keyboardNav&&e(document).unbind("keydown.touchcarousel"),this.carouselRoot.remove()},_updatePagingNav:function(e){if(this._pagingEnabled){var t=this._getPageIdFromItemId(e);this._currPageId=t,this.settings.pagingNavControls&&(this._pagingItems.removeClass("current"),this._pagingItems.eq(t).addClass("current"))}},_getPageIdFromItemId:function(e){var t=this._itemsPerMove;for(var n=0;n<this._numPages;n++)if(e>=n*t&&e<n*t+t)return n;return e<0?0:e>=this._numPages?this._numPages-1:!1},_enableArrows:function(){this.settings.loopItems||(this._arrowLeftBlocked?(this._arrowLeftBlocked=!1,this.arrowLeft.removeClass("disabled")):this._arrowRightBlocked&&(this._arrowRightBlocked=!1,this.arrowRight.removeClass("disabled")))},_disableLeftArrow:function(){!this._arrowLeftBlocked&&!this.settings.loopItems&&(this._arrowLeftBlocked=!0,this.arrowLeft.addClass("disabled"),this._arrowRightBlocked&&(this._arrowRightBlocked=!1,this.arrowRight.removeClass("disabled")))},_disableRightArrow:function(){!this._arrowRightBlocked&&!this.settings.loopItems&&(this._arrowRightBlocked=!0,this.arrowRight.addClass("disabled"),this._arrowLeftBlocked&&(this._arrowLeftBlocked=!1,this.arrowLeft.removeClass("disabled")))},_getItemAtPos:function(e){var t=this;e=-e;var n;for(var r=0;r<t.numItems;r++){n=t.items[r];if(e>=n.posX&&e<n.posX+n.width)return n}return-1},_releaseAutoplay:function(){this.autoplay&&this.wasAutoplayRunning&&(this._isHovering||this._resumeAutoplay(),this.wasAutoplayRunning=!1)},_hideScrollbar:function(){var e=this;this._scrollbarVisible=!1,this._scrollbarHideTimeout&&clearTimeout(this._scrollbarHideTimeout),this._scrollbarHideTimeout=setTimeout(function(){e.scrollbarJQ.animate({opacity:0},150,"linear")},450)},_showScrollbar:function(){this._scrollbarVisible=!0,this._scrollbarHideTimeout&&clearTimeout(this._scrollbarHideTimeout),this.scrollbarJQ.stop().animate({opacity:1},150,"linear")},_stopAnimation:function(){this._decelerationAnim&&this._decelerationAnim.stop()},_resumeAutoplay:function(){if(this.autoplay){var e=this;this.autoplayTimer||(this.autoplayTimer=setInterval(function(){!e._isDragging&&!e._isAnimating&&e.next(!0)},this.settings.autoplayDelay))}},_stopAutoplay:function(){this.autoplayTimer&&(clearInterval(this.autoplayTimer),this.autoplayTimer="")},_getXPos:function(e){var t=e?this.scrollbarJQ:this._dragContainer;if(!this._useWebkitTransition)return Math.round(t.position().left);if(t.css("left")){var n=Math.round(t.position().left);return t.css("left",""),t.css("-webkit-transform","matrix: 0, 0, 0, 0, "+n+", 0"),n}var r=t.css("-webkit-transform"),i=r.replace(/^matrix\(/i,"").split(/, |\)$/g);return parseInt(i[4],10)},_onDragStart:function(t){if(!this._isDragging){this.autoplay&&this.settings.autoplayStopAtAction&&this.stopAutoplay(),this._stopAnimation(),this.settings.scrollbarAutoHide&&this._showScrollbar();var n;if(this.hasTouch){this._lockYAxis=!1;var r=t.originalEvent.touches;if(!(r&&r.length>0))return!1;n=r[0]}else n=t,t.preventDefault();this._setGrabbingCursor(),this._isDragging=!0;var i=this;this._useWebkitTransition&&i._dragContainer.css({"-webkit-transition-duration":"0","-webkit-transition-property":"none"}),e(document).bind(this._moveEvent,function(e){i._onDragMove(e)}),e(document).bind(this._upEvent,function(e){i._onDragRelease(e)}),this._startPos=this._getXPos(),this._accelerationX=n.clientX,this._successfullyDragged=!1,this._startTime=t.timeStamp||(new Date).getTime(),this._moveDist=0,this._prevMouseX=this._startMouseX=n.clientX,this._startMouseY=n.clientY}},_onDragMove:function(e){var t=e.timeStamp||(new Date).getTime(),n;if(this.hasTouch){if(this._lockYAxis)return!1;var r=e.originalEvent.touches;if(r.length>1)return!1;n=r[0];if(Math.abs(n.clientY-this._startMouseY)>Math.abs(n.clientX-this._startMouseX)+3)return this.settings.lockAxis&&(this._lockYAxis=!0),!1;e.preventDefault()}else n=e,e.preventDefault();this._latestDragX=n.clientX,this._lastDragPosition=this._currentDragPosition;var i=n.clientX-this._prevMouseX;this._lastDragPosition!=i&&(this._currentDragPosition=i);if(i!=0){var s=this._startPos+this._moveDist;s>=0?(i/=4,this._disableLeftArrow()):s<=this.carouselWidth-this._maxXPos?(this._disableRightArrow(),i/=4):this._enableArrows(),this._moveDist+=i,this.setXPos(s),this.settings.scrollbar&&this.setXPos(this._scrollbarDist*(-s/(this._maxXPos-this.carouselWidth)),!0)}return this._prevMouseX=n.clientX,t-this._startTime>350&&(this._startTime=t,this._accelerationX=n.clientX),this.settings.onDragStart!==null&&this.settings.onDragStart.call(this),!1},_onDragRelease:function(t){if(this._isDragging){var n=this;this._isDragging=!1,this._setGrabCursor(),this.endPos=this._getXPos(),this.isdrag=!1,e(document).unbind(this._moveEvent).unbind(this._upEvent);if(this.endPos==this._startPos){this._successfullyDragged=!1,this.settings.scrollbarAutoHide&&this._hideScrollbar();return}this._successfullyDragged=!0;var r=this._latestDragX-this._accelerationX,i=Math.max(40,(t.timeStamp||(new Date).getTime())-this._startTime),s=.5,o=2,u=Math.abs(r)/i;function a(e){return e>0?e=0:e<n.carouselWidth-n._maxXPos&&(e=n.carouselWidth-n._maxXPos),e}if(!this.settings.snapToItems){var f=0;u<=2?(s=this._baseFriction*3.5,f=0):u>2&&u<=3?(s=this._baseFriction*4,f=200):u>3&&(f=300,u>4&&(u=4,f=400,s=this._baseFriction*6),s=this._baseFriction*5);var l=u*u*o/(2*s);l*=r<0?-1:1;var c=u*o/s+f;this.endPos+l>0?this.endPos>0?this.animateTo(0,800,"easeOutCubic"):this.animateTo(this.carouselWidth/10*((f+200)/1e3),Math.abs(this.endPos)*1.1/u,"easeOutSine",!0,0,400,"easeOutCubic"):this.endPos+l<this.carouselWidth-this._maxXPos?this.endPos<this.carouselWidth-this._maxXPos?this.animateTo(this.carouselWidth-this._maxXPos,800,"easeOutCubic"):this.animateTo(this.carouselWidth-this._maxXPos-this.carouselWidth/10*((f+200)/1e3),Math.abs(this.carouselWidth-this._maxXPos-this.endPos)*1.1/u,"easeOutSine",!0,this.carouselWidth-this._maxXPos,400,"easeOutCubic"):this.animateTo(this.endPos+l,c,"easeOutCubic")}else{this.autoplay&&this.settings.autoplayStopAtAction&&this.stopAutoplay();var h=Boolean(this._startMouseX-this._prevMouseX>0),p=a(this._getXPos()),d=this._getItemAtPos(p).index;if(!this._pagingEnabled)d+=h?this._itemsPerMove:-this._itemsPerMove+1;else{h&&(p=Math.max(p-this.carouselWidth-1,1-n._maxXPos),d=this._getItemAtPos(p).index,d===undefined&&(d=this.numItems-1));var v=this._getPageIdFromItemId(d);d=v*this._itemsPerMove}h?d=Math.min(d,this.numItems-1):d=Math.max(d,0);var m=this.items[d];this._updatePagingNav(d);if(m){p=a(-m.posX);var g=Math.abs(this.endPos-p),y=Math.max(g*1.08/u,150),b=Boolean(y<180),w=g*.08;h&&(w*=-1),this.animateTo(b?p+w:p,Math.min(y,400),"easeOutSine",b,p,300,"easeOutCubic")}}this.settings.onDragRelease!==null&&this.settings.onDragRelease.call(this)}return!1},_updateDirectionNav:function(e){e===undefined&&(e=this._getXPos()),this.settings.loopItems||(e>=0?this._disableLeftArrow():e<=this.carouselWidth-this._maxXPos?this._disableRightArrow():this._enableArrows())},_setGrabCursor:function(){this._grabCursor?this._itemsWrapper.css("cursor",this._grabCursor):(this._itemsWrapper.removeClass("grabbing-cursor"),this._itemsWrapper.addClass("grab-cursor"))},_setGrabbingCursor:function(){this._grabbingCursor?this._itemsWrapper.css("cursor",this._grabbingCursor):(this._itemsWrapper.removeClass("grab-cursor"),this._itemsWrapper.addClass("grabbing-cursor"))}},e.fn.touchCarousel=function(n){return this.each(function(){var r=new t(e(this),n);e(this).data("touchCarousel",r)})},e.fn.touchCarousel.defaults={itemsPerMove:1,snapToItems:!1,pagingNav:!1,pagingNavControls:!0,_calculatePageWidth:!1,autoplay:!1,autoplayDelay:3e3,autoplayStopAtAction:!0,scrollbar:!0,scrollbarAutoHide:!1,scrollbarTheme:"dark",transitionSpeed:600,directionNav:!0,directionNavAutoHide:!1,loopItems:!1,keyboardNav:!1,dragUsingMouse:!0,scrollToLast:!1,itemFallbackWidth:500,baseMouseFriction:.0012,baseTouchFriction:8e-4,lockAxis:!0,useWebkit3d:!1,onAnimStart:null,onAnimComplete:null,onDragStart:null,onDragRelease:null},e.fn.touchCarousel.settings={},e.extend(jQuery.easing,{easeInOutSine:function(e,t,n,r,i){return-r/2*(Math.cos(Math.PI*t/i)-1)+n},easeOutSine:function(e,t,n,r,i){return r*Math.sin(t/i*(Math.PI/2))+n},easeOutCubic:function(e,t,n,r,i){return r*((t=t/i-1)*t*t+1)+n}})})(jQuery)})})();