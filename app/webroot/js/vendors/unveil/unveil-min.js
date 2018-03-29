/**
 * jQuery Unveil
 * A very lightweight jQuery plugin to lazy load images
 * http://luis-almeida.github.com/unveil
 *
 * Licensed under the MIT license.
 * Copyright 2013 Luís Almeida
 * https://github.com/luis-almeida
 */
define([], function(){

;(function($) {

	$.fn.unveil = function(threshold, callback) {

		var $w = $(window),
				th = threshold || 0,
				retina = window.devicePixelRatio > 1,
				attrib = retina ? "data-src-retina" : "data-src",
				images = this,
				loaded;

		this.attr("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");

		this.one("unveil", function() {

			var source = this.getAttribute(attrib);
			source = source || this.getAttribute("data-src");
			
			if (source) {
				if(this.nodeName === 'IMG'){
					this.setAttribute("src", source);
				}else{
					$(this).css('background-image', 'url(' + source + ')');
				}

				if (typeof callback === "function") callback.call(this);

				this.removeAttribute('data-src');
				this.removeAttribute('data-src-retina');
			}

		});

		function unveil() {
			var inview = images.filter(function() {
				var $e = $(this);
				if ($e.is(":hidden")) return;

				var wt = $w.scrollTop(),
						wb = wt + $w.height(),
						et = $e.offset().top,
						eb = et + $e.height();

				return eb >= wt - th && et <= wb + th;
			});

			loaded = inview.trigger("unveil");
			images = images.not(loaded);
		}

		$w.scroll(unveil);
		$w.resize(unveil);

		unveil();

		return this;

	};

})(window.jQuery || window.Zepto);

});