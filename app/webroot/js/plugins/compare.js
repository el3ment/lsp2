		// Used in compare.js		
			// Converts an array of objects into a table, matching key/rows
			// If you needed to rotate the table (with headers on top rather than on the side
			// you'll have to write a translate/transpose function
			// Input [{name : 'hey', age : 12}, {age : 35, name : 'robert}]
			// Output {name : { 0 : 'hey', 1 : 'robert' }, age : { 0 : 12, 1 : 35}}
			// It's easier to output an object of objects, rather than an object of arrays
			// tablify : function(objectArray){
			// 	objectArray = objectArray || [];
			// 	var returnTable = {};
			// 	for(var i = 0; i < objectArray.length; i++){
			// 		for(var key in objectArray[i]){
			// 			returnTable[key] = returnTable[key] || new Array(objectArray.length);
			// 			returnTable[key][i] = objectArray[i][key];
			// 		}
			// 	}
			// 	return returnTable;
			// },


(function(){

define(['utilities/global', 'controllers/application'], function(){

	var _util = window.LSP.utilities;
	
	var compare = (function(){
		var _this = {};
		var _lsp = window.LSP;
		var _assets = _lsp.assets;
		var _api = _lsp.models.lspapi;
		var _requestedItemIds = [];
		
		_this =  {
			events : {
				self : {
					onCompare : function(e, data){
						console.log('Compare the selected items (compare.js : 16)');
					}
				},
				application : {
					onReady : function(e, data){
						//if(_requestedItemIds.length > 0){
						//	$.when(_this.getItems(_requestedItemIds)).done(function(response){
						//		var sortedData = _this.sort(response.response.data);
						//		var tableHTML = _util.parseMicroTemplate('templates-compare-table', _this.diff(_util.tablify(sortedData)));
						//		$('#templates-compare-table').replaceWith(tableHTML);
						//	});
						//}// else there is no 'ids' parameter
					},
					onInit : function(e, data){
						// var urlParameters = _util.getURLParameters();
						// try{
						// _requestedItemIds = JSON.parse(urlParameters.ids);
						// }catch(error){
						// console.log('Error parsing JSON');
						// }
					}
				}
			},
			assets : {},
			getItems : function(ids){
				ids = (typeof ids === 'string' ? [ids] : ids);
				return _api.request(_this, 'getItems', 'getItems', {ids : JSON.stringify(ids)});
			},
			sort : function(responseData){
				// Put things in the order they were requested in
				responseData.sort(function(x, y){
					return $.inArray(parseInt(x._internalid.value, 10), _requestedItemIds) > $.inArray(parseInt(y._internalid.value, 10), _requestedItemIds) ;
				});
				return responseData;
			},
			diff : function(tabledData){
				for(var attribute in tabledData){
					var similar = true;
					for(var i = 1; i < tabledData[attribute].length; i++){
						if(attribute.charAt(0) !== '_'){
							var valueOne = (((tabledData[attribute][i-1] || {}).value ? (tabledData[attribute][i-1] || {}).value : tabledData[attribute][i-1]) || '');
							var valueTwo = (((tabledData[attribute][i] || {}).value ? (tabledData[attribute][i] || {}).value : tabledData[attribute][i]) || '');
							// Turn similar false if they don't equal each other (the && similar keeps it from overwriting false to true)
							similar = (valueOne === valueTwo && similar);
						}else{
							similar = null; // private fields are neither similar nor different
						}
					}
						
					tabledData[attribute] = {similar : similar, cells : tabledData[attribute]};
				}
				
				return tabledData;
			}
		};
		
		return _this;
	}());
	
	_util.register('controller', 'compare', compare);

});

})();