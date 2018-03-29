(function(){window.LSP=window.LSP||{},window.LSP.utilities=window.LSP.utilities||{};var e={home:{element:".page-home",js:["controllers/home","plugins/flyout"],priority:"critical"},netsuite:{element:"#handle_loginMainPortlet, #handle_cartMainPortlet",js:["controllers/netsuite","controllers/checkout","vendors/netsuite/interface"],css:["ns-checkout.css"],priority:"critical"},product:{element:'.page-productDetail, .productScope, *[data-controller="product"]',js:["controllers/product"],css:["pages/product.css"],priority:"critical"},search:{element:'input[name="search"], a[href*="search"], *[data-action="destoryAndLoadCategory"]',js:["plugins/search","models/api","models/easyask"],css:["pages/search.css"],priority:document.location.href.indexOf("search")>0?"critical":"secondary"},wishlist:{element:".page-wishlist, .wishlist-messages",js:["controllers/wishlist"],css:["pages/wishlist.css"],priority:document.location.href.indexOf("Wishlist")>0?"critical":"secondary"},categoryBlocks:{element:".categories",css:["components/categoryBlocks.css"],priority:"critical"},cart:{element:"#handle_cartMainPortlet",css:["ns-checkout.css"],priority:"critical"},reviews:{element:".aggregateReviews, .page-generic .reviews",js:["controllers/reviews"],css:["components/reviews.css"],priority:"secondary"},trackOrder:{element:".page-trackOrder",js:["controllers/shipping"],css:["pages/shipping.css"],priority:"critical"},badges:{element:"*[data-badge]",js:["plugins/badges"],css:["components/badges.css"],priority:"secondary"},clearable:{element:".clearable",js:["plugins/clearable"],css:["components/clearable.css"],priority:"secondary"},definitions:{element:"*[data-def]",js:["plugins/definitions"],css:["components/definitions.css"],priority:"secondary"},flyout:{element:".flyout",js:["plugins/flyout"],priority:"secondary"},reveal:{element:"*[data-reveal-children]",js:["plugins/reveal"],css:["components/reveal.css"],priority:"secondary"},suggestions:{element:".dynamicItemSuggestions",js:["plugins/suggestions"],css:["components/dynamicSuggestions.css"],priority:"secondary"},validation:{element:'*[class*="validation-"]',js:["plugins/validation"],priority:"secondary"},zoom:{element:"#zoom-mainImage",js:["vendors/jqzoom/jqzoom"],css:["vendors/jqzoom/jqzoom.css"],priority:"secondary"},ads:{element:'*[class*="bsa-"], .productAd',js:["plugins/ads"],css:["components/ads.css"],priority:"secondary"},category:{element:".page-category",js:["controllers/category"],css:["pages/category.css"],priority:"critical"},schoolCategory:{element:".page-school-category",js:["controllers/category"],css:["pages/school-category.css"],priority:"critical"},checkout:{element:".header.small",js:["controllers/checkout","controllers/netsuite"],css:["ns-checkout.css"],priority:"critical"},touchcarousel:{element:".touchcarousel",js:["vendors/touchcarousel/touchcarousel"],css:["vendors/touch_carousel/touchcarousel.css"],priority:"critical"},byline:{element:".byline",css:["components/byline.css"]}},t=require.toUrl("").indexOf("min")>0;window.LSP.utilities.loader={loadedCSS:[],load:function(n){var r={},i=[];for(var s in e)if(e.hasOwnProperty(s)){var o=e[s];if($(o.element,n).length>0||o.always)o.js&&o.minjs&&(o.js=t?o.minjs:o.js),o.js&&(r[o.priority]=r[o.priority]||[],r[o.priority]=r[o.priority].concat(o.js)),o.css&&(i=i.concat(o.css))}this.loadJS(r),i.length>0},loadJS:function(e,t){require(e.critical||[],function(n){return function(){console.log("Primary loaded",n),$(function(){console.log("Loaded Secondary:",n.secondary),require(n.secondary||[],function(){(t||function(){})()})})}}(e))},getStylesheetUrls:function(){var e=document.getElementsByTagName("link"),t=[];for(var n=0;n<e.length;n++)t.push(e[n].href.replace(/https?\:/,""));return t},loadCSS:function(e){var t=this.getStylesheetUrls(),n="";for(var r=0;r<e.length;r++){e[r].substr(0,1)=="!"&&(e[r]=e[r].replace("!",""),n="https:");var i=n+CDN+"/min/css/"+e[r]+"?v="+VERSION,s=!1;for(var o=0;o<t.length;o++)if(t[o].replace(/https?:/,"")==i.replace(/https?:/,"")){s=!0;break}s||googleAsyncCSSLoader(i)}}},window.LSP.utilities.loader.loadJS({critical:["jquery","combined/core"]}),window.LSP.utilities.loader.loadCSS(["combined/category.css","combined/home.css","combined/product.css","combined/search.css","!ns-checkout.css"])})();