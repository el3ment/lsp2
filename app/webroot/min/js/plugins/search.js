(function(){define(["utilities/global","controllers/application","models/api","models/easyask"],function(){var e=window.LSP.utilities;e.register("controller","search",function(){var t={},n=window.LSP,r=n.models.easyask,i=!1,s=!0,o={},u=[],a={};return t={events:{search:{onBeforeAPICall:function(e,t){var n=$("#templates-search-page");if(!n.length)return alert("Unfortunately it appears the templates can't be loaded, please call to complete your order"),_gaq.push(["_trackEvent","search","error","templatesCannotBeLoaded"]),!1;var r=$(".page-generic").height();$(".page-search").addClass("loading")},onAfterAPICall:function(e,t){$(".page-search, .page-generic").removeClass("loading"),$("html").removeClass("search-loading"),s=!1},onAfterAPICallSuccess:function(e,n){if(n.response){var i=n.response.source.navPath.navPathNodeList;o.category=r.getCategoriesFromSEOPath(i[i.length-1].seoPath).replace(/\/$/,""),o.category=o.category.replace(/\/.*\/.*\//,"/"),o.allAttributes=r.getRefinementsFromSEOPath(i[i.length-1].seoPath).replace(/\/$/,""),o.keywords=decodeURIComponent(r.getKeywordsFromSEOPath(i[i.length-1].seoPath).replace(/\-/g," ").replace(/^ /,"")),o.page=((n.response.source.products||{}).itemDescription||{}).currentPage,a=n,$.when(t.scrollToFirst()).done(function(){n.xhrData.passthrough.preventPushState||t.pushState()})}},onAfterAPICallFailure:function(e,n){t.renderFatalError(n)},onRemoveFilter:function(e,n){var r=$(n.selector).data("attribute");$('#refinementForm input[name="'+r+'[]"][value="'+$(n.selector).data("value")+'"]').attr("checked",!1),t.updateHistoryMap(r),t.removeFilterAttribute($(n.selector).data("value"));var i=$(n.selector).data("value").split(":");_gaq.push(["_trackEvent","search","removeFilterAttribute",i[0],i[1]])},onSearch:function(e,n){var r=$('input[name="searchQuery"]',n.selector).trigger("blur").val()||"";if(r.length>0)if(document.location.href.indexOf("https")===-1){$(".mobileSearch .b3").click();if(r!=="undefined"&&r.length||o.keywords&&(o.keywords||{}).length)delete o.category,delete o.allAttributes,s=!1,o.keywords=r,t.search(r)}else document.location="http://www.lonestarpercussion.com/#/~search/keywords/"+encodeURIComponent(r);_gaq.push(["_trackEvent","search","keywordSearch",r])},onRemoveSearch:function(e,n){t.removeSearch(),$('input[name="searchQuery"]').val("").change()},onFilterAttribute:function(e,n){var r=$(n.selector).attr("name").replace("[]","");t.updateHistoryMap(r),$(n.selector).is(":checked")?t.addFilterAttribute($(n.selector).val()):t.removeFilterAttribute($(n.selector).val());var i=$(n.selector).val().split(":");_gaq.push(["_trackEvent","search","filterAttribute",i[0],i[1]])},onClearAllRefinements:function(e,n){u=[],o.allAttributes="",o.keywords="",t.loadCategory(o.category),_gaq.push(["_trackEvent","search","clearAllRefinements",!0])},onLoadCategory:function(e,n){t.loadCategory($(n.selector).data("path"),!0),n.originalEvent.preventDefault(),s=!1,_gaq.push(["_trackEvent","search","filterCategory",$(n.selector).data("path")])},onDestroyAndLoadCategory:function(e,r){s=!1;if(document.location.href.indexOf("https")===-1){var i=($(r.selector).attr("href")+"#").split("#"),o=(n.controllers.application.parseStateFromHash(i[1])||{}).search||{};o.category=o.category||i[0],u=[],t.loadState(o,null,!0)&&($("html").attr("data-path","").addClass("search-loading"),t.scrollToFirst(),n.controllers.flyout.closeFlyout(),r.originalEvent.preventDefault())}_gaq.push(["_trackEvent","search","browseToCategory",o.category])},onRemoveCategory:function(e,n){var r="/"+o.category,i=$(n.selector).data("removepath").split("/");for(var s=0;s<i.length;s++)i[s].length>0&&(r=(r+"/").replace("/"+i[s]+"/","/"));t.loadCategory(r.replace(/\/{1,}/g,"/","/"),!0),_gaq.push(["_trackEvent","search","removeCategory",i])},onNextPage:function(e,n){t.paginate("next"),_gaq.push(["_trackEvent","search","paginate","next"])},onPreviousPage:function(e,n){t.paginate("prev"),_gaq.push(["_trackEvent","search","paginate","previous"])},onSort:function(e,n){o.sort=$(n.selector).val(),t.paginate("first"),_gaq.push(["_trackEvent","search","sort",$(n.selector).val()])},onItemsPerPage:function(e,n){o.resultsPerPage=$(n.selector).val(),t.paginate("first"),_gaq.push(["_trackEvent","search","resultsPerPage",$(n.selector).val()])},onShowCompactView:function(e,n){t.changeView("gridView"),t.pushState(),_gaq.push(["_trackEvent","search","changeView","compact"])},onShowDetailsView:function(e,n){t.changeView("listView"),t.pushState(),_gaq.push(["_trackEvent","search","changeView","detailed"])}},application:{onStateChange:function(e,r){n.controllers.application.pullState(t)?(s=!1,t.loadCurrentState()):s||document.location.reload()},onReady:function(e,r){(n.controllers.application.pullState(t)||((LSP.config||{}).search||{}).loadCurrentState)&&t.loadCurrentState()},onInit:function(e,t){},onContextChangeEnterPhone:function(e,n){t.changeView("listView")}}},assets:{},updateHistoryMap:function(t){require(["vendors/form2js/form2js"],function(){var r=e.formToObject($("#refinementForm")[0]),i=$.grep(u,function(e){return e.name===t}).length;i?u[u.length-1].name!==t&&(u[u.length-1].displayState="static"):u.push({name:t,displayState:"temporary"});for(var s=0;s<u.length-1;s++)u[s].displayState="static";for(var s=0;s<u.length;s++){var o=u[s].name;r[o]||u.splice(s,1)}})},loadCurrentState:function(){t.loadState(n.controllers.application.pullState(t),{preventPushState:!s})},getState:function(){var e=$.extend({},o);return n.controllers.application.hasPushState()&&delete e.category,e.allAttributes={value:(e.allAttributes||"").replace(/[\/]/g,","),uriEncode:!1},e.path=o.category,e.allAttributes.value.length===0&&delete e.allAttributes,e},pushState:function(){var e=t.getState();return n.controllers.application.pushState(t,e,s)},pullState:function(e){var t=document.location.pathname.replace(/\?.*/,""),n={page:"1",view:(LSP.settings||{}).defaultSearchView||"listView"};return o=$.extend({},n,e||{}),o.allAttributes=((o||{}).allAttributes||"").replace(/[\|\,]/g,"/"),t.indexOf(".html")>-1&&!o.category?o.category=t.substring(0,t.lastIndexOf("/")):o.category||(o.category=t),o.category=o.category==="/"?"":o.category,o.category=o.category.replace(/^\//,""),o.category=o.category.replace(/\/$/,""),o.keywords&&(o.keywords=decodeURIComponent(o.keywords).replace(/\-/g," ").replace(/^ /,"")),o},loadState:function(n,r,i){var u=$.extend({},o);return t.pullState(n),$('input[name="searchQuery"]').val(o.keywords),e.isEqual(u,o)?!1:(i&&(s=!1),t.search(null,r),!0)},search:function(e,n){var s={action:"advisor",method:"CA_Search",keywords:e===null?o.keywords:e};return r.request(t,"search",$.extend({},o,{isSingleSelect:i},s),n).done(function(e){e.response&&(((((e.response||{}).source||{}).products||{}).items||[]).length===1&&!((((e.response||{}).source||{})._lsp||{}).query||{}).assumedQuery?document.location.replace(e.serverResponse.source.products.items[0].Item_URL):t.renderPage(e.response.source))})},removeSearch:function(){var e={action:"advisor",method:"CA_BreadcrumbRemove"};return delete o.keywords,r.request(t,"removeSearch",$.extend({},o,{isSingleSelect:i},e)).done(function(e){t.renderPage(e.response.source)})},loadCategory:function(e,n){var s={action:"advisor",method:"CA_CategoryExpand",category:n?e:o.category.replace(/\/$/,"")+"/"+e};return r.request(t,"loadCategory",$.extend({},o,{isSingleSelect:i},s)).done(function(e){t.renderPage(e.response.source)})},addFilterAttribute:function(e){var n={action:"advisor",method:"CA_AttributeSelected",attribute:e};return r.request(t,"filter",$.extend({},o,{isSingleSelect:i},n)).done(function(e){t.renderPage(e.response.source)})},removeFilterAttribute:function(e){var n={action:"advisor",method:"CA_BreadcrumbRemove",allAttributes:o.allAttributes.replace(e,"").replace(";;",";").replace("//","/").replace(/((\/;)|(;\/))/g,"/").replace(/^[\/;]/,"").replace(/[;\/]$/,"")};return r.request(t,"removeFilter",$.extend({},o,{isSingleSelect:i},n)).done(function(e){t.renderPage(e.response.source)})},paginate:function(e){var n={action:"navbar",method:$.isNumeric(e)?"page"+e:e,currentPage:o.page};debugger;return r.request(t,"paginate",$.extend({},o,n)).done(function(e){t.renderSummary(e.response.source),t.renderProducts(e.response.source)})},changeView:function(e){if(e==="gridView"||e==="listView")$("#resultsContainer").removeClass("gridView").removeClass("listView").addClass(e),o.view=e,$(".thumbnail img[data-src][data-lazy-handled]").unveil()},renderPage:function(r){if(!$(".page-search").length){$(".page-generic").length||$("#div__body").addClass("page-generic");var i=e.parseMicroTemplate("templates-search-page",{}),s=$.parseHTML(i);$(".page-generic").after(s).hide(),n.controllers.application.attachEvents($(".page-search"))}t.changeView(o.view),$(".page-search").show(),$(".page-generic").hide(),t.renderSummary(r),t.renderSelectedRefinements(r),t.renderRefinements(r),t.renderProducts(r)},scrollToFirst:function(){return e.scrollTo($("body"))},renderSummary:function(t){var r=o.category,i=((t.products||{}).itemDescription||{}).currentPage,s=((t.products||{}).itemDescription||{}).pageCount,u=e.parseMicroTemplate("templates-search-breadcrumbs",$.extend({},t)),a=$("#breadcrumbs").html(u);n.controllers.application.attachEvents(a),a.is(":has(button)")?a.parent(".breadcrumbs").removeClass("hide"):a.parent(".breadcrumbs").addClass("hide");var f=e.parseMicroTemplate("templates-search-title",$.extend({},t));n.controllers.application.attachEvents($("#searchTitle").html(f)),$(".currentPageNumber").html(i),$(".totalPages").html(s),$(".numberOfResults").html(((t.products||{}).itemDescription||{}).totalItems);var l=((t.products||{}).itemDescription||{}).sortOrder||"default";$('select[data-action="sort"]').val(l.indexOf("EAScore")>-1?"default":l),$('select[data-action="itemsPerPage"]').val(((t.products||{}).itemDescription||{}).resultsPerPage),i===1?$('*[data-action="previousPage"]').css("visibility","hidden"):$('*[data-action="previousPage"]').css("visibility","visible"),i===s?$('*[data-action="nextPage"]').css("visibility","hidden"):$('*[data-action="nextPage"]').css("visibility","visible");var c=[];t.navPath._lsp.searchNode&&c.push('"'+t.navPath._lsp.searchNode.englishName+'"');for(var h=t.navPath._lsp.refinementNodes.length-1;h>=0;h--)c.push(t.navPath._lsp.refinementNodes[h].value);document.title=$("#pageName").text()+(c.length?" : "+c.join(", "):"")+" | Lone Star Percussion",$("html").attr("data-title",document.title),_gaq.push(["_trackPageview",o.category+(o.keywords?"/?search="+o.keywords:"")])},renderSelectedRefinements:function(t){var r=e.parseMicroTemplate("templates-search-selectedRefinements",$.extend({},t));n.controllers.application.attachEvents($("#selectedRefinements").html(r))},renderRefinements:function(t){for(var r=0;r<u.length;r++)for(var i=0;i<t.attributes._lsp.cached.length;i++){var s=t.attributes._lsp.cached[i];if((u[r]||{}).name===s.name){t.attributes._lsp.cached[i].displayState=u[r].displayState;break}}var o=e.parseMicroTemplate("templates-search-refinements",$.extend({},t));n.controllers.application.attachEvents($("#searchRefinements").html(o).show()),(t.attributes._lsp.cached||{}).length?$("#searchRefinements").removeClass("empty"):$("#searchRefinements").addClass("empty")},renderProducts:function(r){var i=e.parseMicroTemplate("templates-search-entries",$.extend({},r));n.controllers.application.attachEvents($("#searchEntries").html(i)),t.changeView(o.view)},renderFatalError:function(e){_gaq.push(["_trackEvent","search","error","fatalError : "+e.serverResponse.status+" : "+e.serverResponse.statusText]),receievedMessage=(e.response.errorMsg||"").length>0?" "+e.response.errorMsg+" ":" ",alert("Something has gone wrong with our network connection to our database."+receievedMessage+"Sorry about that!")}},t}())})})();