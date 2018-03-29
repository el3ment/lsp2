<script id='templates-search-page' type='text/html'>
<!-- Search / Item Result Template -->
 <div class='page-search span12 container'>
	<div id='searchTitle' class='title span9'>
		<!-- Search Title -->
	</div>
	<div class='searchRefinementsAndResults' data-controller='search'>
		<div id='refinementForm' class='refinements span3'>
			<div id='selectedRefinements'>
				<!-- You've Selected -->
			</div>
			<div class='refineResults panel disengaged' id='searchRefinements'>
				
			</div>
		</div>
		<div id='resultsContainer' class='results listView span9'>

			<ul class='tabs'>
				<li><button class='b5 icon-24-compact' data-action='showCompactView'>Compact View</button></li>
				<li><button class='b5 icon-24-list' data-action='showDetailsView'>Details View</button></li>
			</ul>
			<div class='head'>
				<ul class='controls'>
					<li class='compare'><button class='b2' data-action='compare'>Compare <span class='count'>(2)</span></button></li>
			
					<li class='pagination'>
						<button class='b3 icon-24-leftArrow button-circle' data-action='previousPage'>Previous Page</button>
						<span class='pageCount details'>Page <span class='currentPageNumber'>3</span> of <span class='totalPages'>8</span></span>
						<button class='b3 icon-24-rightArrow button-circle' data-action='nextPage'>Next Page</button>
					</li>
					<li class='control-pagination-itemCount'>
						<label for='control-pagination-itemCount'>Items:</label>
						<select id='control-pagination-itemCount' data-action='itemsPerPage'>
							<option value='20'>20</option>
							<option value='50'>50</option>
							<option value='All'>All</option>
						</select>
					</li>
					<li class='control-pagination-sort'>
						<label for='control-pagination-sort-top'>Sort:</label>
						<select id='control-pagination-sort-top' data-action='sort'>
							<option selected="selected" value="default">Recommended</option>
							<option value="Store Description,t">Name (A-Z)</option>
							<option value="Store Description,f">Name (Z-A)</option>
							<option value="Online Price,t">Price ($-$$$)</option>
							<option value="Online Price,f">Price ($$$-$)</option>
							<!--<option value="Manufacturer,t">Manufacturer (A-Z)</option>
							<option value="Manufacturer,f">Manufacturer (Z-A)</option>-->
						</select>
					</li>
				</ul>
			</div>
			<div id='searchEntries' class='searchResults section entries'>
				<!-- Search Results -->
			</div>
			<div class='foot'>
				<ul class='controls'>
					<li><button class='b2 compare' data-action='compare'>Compare <span class='count'>(2)</span></button></li>
				
					 <li class='pagination'>
						<button class='b3 icon-24-leftArrow button-circle' data-action='previousPage'>Previous Page</button>
						<span class='pageCount details'>Page <span class='currentPageNumber'>3</span> of <span class='totalPages'>8</span></span>
						<button class='b3 icon-24-rightArrow button-circle' data-action='nextPage'>Next Page</button>
					</li>
					<li class='control-pagination-itemCount'>
						<label for='control-pagination-itemCount-bottom'>Items:</label>
						<select id='control-pagination-itemCount-bottom' data-action='itemsPerPage'>
							<option value='20'>20</option>
							<option value='50'>50</option>
							<option value='All'>All</option>
						</select>
					</li>
					<li class='control-pagination-sort'>
						<label for='control-pagination-sort-bottom'>Sort:</label>
						<select id='control-pagination-sort-bottom' data-action='sort'>
							<option selected="selected" value="-default-">Recommended</option>
							<option value="Store_Description,t">Name (A-Z)</option>
							<option value="Store_Description,f">Name (Z-A)</option>
							<option value="Price,t">Price ($-$$$)</option>
							<option value="Price,f">Price ($$$-$)</option>
						</select>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</script>

<script id='templates-search-title' type='text/html'>
	<#
		var categories = this.navPath._lsp.categoryNodes;
		var currentCategory = categories[categories.length - 1].englishName;
		var searchNode = this.navPath._lsp.searchNode;
		var pageTitle = (searchNode ? '"' + searchNode.englishName + '" in ' + currentCategory : currentCategory);
	#>
	<h1 id='pageName'><#=pageTitle #></h1>
	<# if(this.commentary.length > 0){ #>
		<div class='details didYouMean'>
			We figured you meant "<#=this._lsp.query.assumedQuery #>".
			<# /* You might also try <# for(var i = 0; i < this._lsp.query.otherSuggestions.length; i++){ #>
				<button class='b5' data-action='search' data-controller='search' data-query='<#=this._lsp.query.otherSuggestions[i] #>'><#=this._lsp.query.otherSuggestions[i]  #></button> 
			<# } #> */ #>
		</div>
	<# } #>
	<span class='details'>
		<strong><span class='numberOfResults'><#=((this.products || {}).itemDescription || {}).totalItems #></span> Items</strong>
		<span class='totalPages'><#=((this.products || {}).itemDescription || {}).pageCount #></span>
	</span>
</script>

<script id='templates-search-breadcrumbs' type='text/html'>
	<# for(var i = 0; i < this.navPath._lsp.categoryNodes.length; i++){ #>
		<button class='b5' data-action='removeCategory' data-controller='search' data-removePath='<#=this.navPath._lsp.categoryNodes[i].removePath #>'><#=(this.navPath._lsp.categoryNodes[i].value === 'All-Products' ? 'All Products' : this.navPath._lsp.categoryNodes[i].englishName) #></button>&nbsp;&gt;&nbsp;
		<# } #>
	</ul>
</script>

<script id='templates-search-checkboxListEntry' type='text/html'>

	<#
		/* If there are any hidden selected options, move them to the bottom of the initial list*/
		var hasHiddenSelected = false;
		for(var i = 0; i < this.entries.length; i++){
			if(this.entries[i].selected){
				
				this.entries.splice(0, 0, this.entries.splice(i, 1)[0]);

				if(i > initialListSize){
					initialListSize++;
				}
			}
		}
	#>

	<ul>
		<# for(var i = 0; i < this.initialListSize; i++){ #>
			<li class='field <#=(this.entries[i].selected ? 'isChecked' : '') #> <#=(this.entries[i].selected && !((this.entries[i + 1] || {}).selected) && i != this.entries.length - 1 ? 'isLastChecked' : '') #>'>
				<input 
				data-action='filterAttribute' 
				name='<#=this.section.name #>[]' 
				value='<#=this.entries[i].nodeString #>'
				id='refinement-<#=this.section.name #>-<#=i #>' type='checkbox' <#=(this.entries[i].selected ? 'checked' : '') #>/>
		
				<label for='refinement-<#=this.section.name #>-<#=i #>'><#=this.entries[i].attributeValue #>&nbsp;<span class='details'>(<#=this.entries[i].productCount #>)</span></label>
			</li>
		<# } #>
	</ul><div id='refinement-<#=this.id #>-more' class='more <#=(this.section.displayState === 'static' ? 'reveal-closed' : 'reveal-closed') #>'>
		<button class='b5 loadMore reveal-closed' data-reveal-children='refinement-<#=this.id #>-more'>See Less</button>
		<ul>
			<# for(var i = initialListSize; this.entries && i < this.entries.length; i++){ #>
				<li class='field'>
					<input 
					data-action='filterAttribute' 
					name='<#=this.section.name #>[]' 
					value='<#=this.entries[i].nodeString #>' 
					id='refinement-<#=this.section.name #>-<#=i #>' type='checkbox' <#=(this.entries[i].selected ? 'checked' : '') #>/>
			
					<label for='refinement-<#=this.section.name #>-<#=i #>'><#=this.entries[i].attributeValue #>&nbsp;<span class='details'>(<#=this.entries[i].productCount #>)</span></label>
				</li>
			<# } #>
		</ul>
	</div>
	<# if(this.entries.length - this.initialListSize > 0 && this.section.displayState !== 'static'){ #>
		<button class='b5 loadMore reveal-closed' data-reveal-children='refinement-<#=this.id #>-more'><span class='more'>See More (<#=this.entries.length - this.initialListSize #>)</span><span class='less'>See Less</span></button>
	<# } #>
</script>



<script id='templates-search-categoryListEntry' type='text/html'>
	<ul>
		<# var categories = this.responseObject.navPath._lsp.categoryNodes; #>
		<# var depth = this.responseObject.navPath._lsp.categoryNodes.length - 1; #>
		<# for(var i = 1; i < categories.length; i++){ #>
			<li class='level<#=i-1 #> openParentCategory <#=(i === categories.length - 1 ? 'currentParentCategory' : '') #> <#=(i === 1 ? 'firstParentCategory' : '') #>'>
				<button data-action='removeCategory' data-removePath='<#=categories[i].removePath #>' class='b5'>
					<#=categories[i].value #>
				</button>
			</li>
		<# } #>

		<# for(var i = 0; i < this.initialListSize; i++){ #>
			<li class='currentCategory level<#=depth #>'><button class='b5' data-action='loadCategory' data-path='<#=this.entries[i].seoPath #>'><span class='label'><#=this.entries[i].name #></span> <span class='details'>(<#=this.entries[i].productCount #>)</span></button></li>
		<# } #>
	</ul>

	<div id='refinement-<#=this.id #>-more' class='reveal-closed more'>
		<ul>
			<# for(var i = initialListSize; this.entries && i < this.entries.length; i++){ #>
				<li class='currentCategory level<#=depth #>'><button class='b5' data-action='loadCategory' data-path='<#=this.entries[i].seoPath #>'><span class='label'><#=this.entries[i].name #></span> <span class='details'>(<#=this.entries[i].productCount #>)</span></button></li>
			<# } #>
		</ul>
	</div>
	<# if((this.entries || {}).length - this.initialListSize > 0){ #>
		<button class='b5 loadMore reveal-closed' data-reveal-children='refinement-<#=this.id #>-more'>
		<span class='more'>See More (<#=this.entries.length - this.initialListSize #>)</span><span class='less'>Less</span></button>
	<# } #>
</script>

<script id='templates-search-refinementSection' type='text/html'>

	<# var revealState = (this.isOpen ? 'reveal-open' : 'reveal-closed'); #>

	<div class='section <#=(this.id === 'categories' ? 'links' : '') #>'>
		<h4 data-reveal-children='refinement-<#=this.id #>-container' class=' reveal-closed-phone <#=revealState #>'><#=this.name #></h4>
		<div class='toggleRefinements'>
			<button class='b4 icon-16-toggleHide reveal-closed-phone <#=revealState #>' data-reveal-children='refinement-<#=this.id #>-container'>Toggle Refinement Group</button>
		</div>
		<div id='refinement-<#=this.id #>-container' class='content reveal-closed-phone <#=revealState #> displayState-<#=(this.displayState ? this.displayState : 'normal') #>'>

			<#=_util.parseMicroTemplate(this.entryTemplateId, {
				section : this,
				entries : this.entries,
				initialListSize : this.initialListSize,
				responseObject : this.responseObject,
				id : this.id
			}) #>
		
		</div>
	</div>
</script>

<script id='templates-search-refinements' type='text/html'>

	<# /* If categories, or attributes (using the cache) */ #>
	<# if(this.navPath._lsp.categoryNodes.length + (((this.categories || {}).categoryList || {}).length || 0) > 1 || (((this.attributes || {})._lsp || {}).cached || {}).length){ #>

		<button class='b3 icon-24-toggleHide visible-phone reveal-closed-phone' data-reveal-children='attributeList'>Toggle Refinement Panel</button>
		<span class='toggleLabel visible-phone'>Refine Results:</span>
		<h2 data-reveal-children='attributeList'>Refine <span class='hidden-tablet'>Your</span> Results</h2>
		<div id='attributeList' class='reveal-closed-phone'>
		<#	if(this.navPath._lsp.categoryNodes.length + (((this.categories || {}).categoryList || {}).length || 0) > 1){ #>
				<#	var initialSize = (this.categories.isInitDispLimited ? (this.categories.initialCategoryList || {}).length : (this.categories.categoryList || {}).length); #>

				<#=_util.parseMicroTemplate('templates-search-refinementSection', {
					name : 'Categories',
					id : 'categories',
					isOpen : true,
					entries : categories.categoryList,
					initialListSize : initialSize,
					entryTemplateId : 'templates-search-categoryListEntry',
					responseObject : this
				}) #>

			<# } #>
			

			<# for(var i = 0; i < (((this.attributes || {})._lsp || {}).cached || {}).length; i++){ #>
			
				<# var attribute = this.attributes._lsp.cached[i]; #>
				<# var initialSize = (attribute.isInitDispLimited ? attribute.initDispLimit : attribute.attributeValueList.length); #>
			
				<#=_util.parseMicroTemplate('templates-search-refinementSection', {
					name : attribute.name,
					id : 'refinement-' + i,
					isOpen : true,
					displayState : attribute.displayState,
					entries : attribute.attributeValueList,
					initialListSize : initialSize,
					entryTemplateId : 'templates-search-checkboxListEntry',
					responseObject : this
				}) #>

			<# } #>
			<div data-reveal-children='attributeList' class='b1 close visible-phone reveal-closed-phone'>Apply Filters</div>
		</div>
	<# } #>
</script>

<script id='templates-search-entries' type='text/html'>
	<ul class='listScope'>
	<# if(!this.products || this.products.items.length === 0){ #>
		<li class='noresults'>
			Sorry buddy, there are no results
		</li>
	<# } #>
	<# for(var i = 0; i < ((this.products || {}).items || {}).length; i++){ #>
	<# var item = this.products.items[i]; #>
		<li class='entry productScope'>
			<form>
				<ul class='addToCart panel'>
					<li class='price'>
						<span class='productPrice'><#=item.Online_Price #></span>
						<span class='productGrouping'>each</span>
						<span class='details'>List : <span class='productMsrp'><#=item.price #></span>, You Save: <span class='productDiscount'>$21.05</span>!</span>
					</li>
					<li class='productAvailability' data-method='seperately'>
						<span class='status'>
							<# if(item.Available > 0){ #> In Stock <# }else{ #> Not In Stock <# } #>
							<span class='visible-desktop'>:</span>
						</span>
						<span class='shortStatus'>Two Finishes In Stock</span>
						<span class='details'><#=item.stock_message #> <a href='#' class='method'>Standard&nbsp;Shipping</a></span>
					</li>
					<# if(item._formattedMatrixObject){
						$.each(item._formattedMatrixObject, function(key, value){ #>
							<li class='option'>
								<label><#=key #></label>
								<select class='matrix-option' name=''>
								<# for(var j = 0; j < value.length; j++){ #>
									<option value='<#=value[j][0] #>'><#=value[j][1] #></option>
								<# } #>
								</select>
							</li>
						<# });
					} #>
					<li class='quantity hidden-phone'>
						<label>Quantity:</label>
						<input class='scroller' type='number' min='1' value='1' />
					</li>
					<li class='action'>
						<button class='b1'>Add To Cart</button>
					</li>
				</ul>
			</form>
			<a href='<#=item.Item_URL.replace('http://www.lonestarpercussion.com', 'http://lspsandbox.explorewebdev.com') #>' class='productLink'>
				<div data-badge='<#=item.badge #>' class='thumbnail'><img src='<#=item.Image_1_URL #>.200x200' width='200' height='200'/></div>
				<span class='field compare details'>
					<input type='checkbox' />
					<button class='b5'>Compare Now</button>
				</span>
				<span class='productName'><#=item.Featured_Description #></span>  
				<span class='details model'>Model Number #<span class='productMpn'><#=item.model_number #></span></span>
			</a>
			
			<# if(item.number_of_reviews){ #>
				<div class='aggregateReviews'>
					<span data-reviews-aggregateRating='3' class='reviewAggregateRating'><#=item.review_average #></span>
					<a href='#' class='reviewCountLabel details'><span class='reviewReviewCount'><#=item.number_of_reviews #></span> reviews</a>
				</div>
			<# } #>
			<#
				var count = 0;
				if(item.Feature6){
					count = 6;
				}else if(item.Feature5){
					count = 5;
				}else if(item.Feature4){
					count = 4;
				}else if(item.Feature3){
					count = 3;
				}else if(item.Feature2){
					count = 2;
				}else if(item.Feature1){
					count = 1;
				}
			#>
			<div class='features details show<#=count #>Elements'>
				<h6>Overview</h6>
				<ul class='list'>
					<li><#=item.Feature1 #></li>
					<li><#=item.Feature2 #></li>
					<li><#=item.Feature3 #></li>
					<li><#=item.Feature4 #></li>
					<li><#=item.Feature5 #></li>
					<li><#=item.Feature6 #></li>
				</ul>
			</div>
		</li>
	<# } #>
	</ul>
</script>

<script id='templates-error' type='text/html'>
	<div class='fatalError'>
		<strong><#=title #></strong>
		<span class='details'><#=message #></span>
	</div>
</script>

<script id='templates-search-selectedRefinements' type='text/html'>
	<# if(this.navPath._lsp.refinementNodes.length || this.navPath._lsp.searchNode){ #>
	<div class='selectedFilters panel engaged'>
		<h2>You've Selected</h2>
		<ul class='section'>
			<#	
				/* Just the attributes */
				if(this.navPath._lsp.searchNode){ #>
					<li>
						<button class='b5 icon-24-close attribute' data-action='removeSearch'>
							<label>Keyword<#=(this.navPath._lsp.searchNode.englishName.split(' ').length > 1 ? 's' : '') #>:</label> <#=this.navPath._lsp.searchNode.englishName #>
						</button>
					</li>

				<# }

				/* Just the attributes */
				for(var i = 0; i < this.navPath._lsp.refinementNodes.length; i++){ #>
					<li>
						<button class='b5 icon-24-close attribute' data-action='removeFilter' data-attribute='<#=this.navPath._lsp.refinementNodes[i].attribute #>' data-value='<#=this.navPath._lsp.refinementNodes[i].nodeString #>'>
							<label><#=this.navPath._lsp.refinementNodes[i].attribute #>:</label> <#=this.navPath._lsp.refinementNodes[i].value #>
						</button>
					</li>
			<# } #>
		</ul>
		<button class='b5' data-action='clearAllRefinements'>Clear All Selected</button>
	</div>
	<# } #>
</script>