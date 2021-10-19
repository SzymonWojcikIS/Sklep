	<main id="main" class="main-site left-sidebar">
	<style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Menu</span></li>

				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

					<div class="banner-shop">
						<a href="/prod/cate/moda" class="banner-link">
							<figure><img src="{{ asset('assets/images/rek-banner.jpg') }}" alt=""></figure>
						</a>
					</div>

					<div class="wrap-shop-control">

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting" >
									<option value="default" selected="selected">Dowolne</option>
									<option value="date">Od najnowszego</option>
									<option value="price">Cena: od najmniejszej</option>
									<option value="price-desc">Cena: od największej</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize" >
									<option value="12" selected="selected">12 na stronę</option>
									<option value="16">16 na stronę</option>
									<option value="18">18 na stronę</option>
									<option value="21">21 na stronę</option>
									<option value="24">24 na stronę</option>
									<option value="30">30 na stronę</option>
									<option value="32">32 na stronę</option>
								</select>
							</div>

							<div class="change-display-mode">
								<a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
							</div>

						</div>

					</div><!--end wrap menu control-->

					<div class="row">

						<ul class="product-list grid-products equal-container">
							@foreach($prods as $prod)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
								<div class="product product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{route('prod.details', ['slug'=>$prod->slug])}}" title="{{$prod->name}}">
											<figure><img src="{{ asset('assets/images/prods') }}/{{$prod->image}}" alt="{{$prod->name}}"></figure>
										</a>
									</div>
									<div class="product-info">
										<a href="{{route('prod.details', ['slug'=>$prod->slug])}}" class="product-name"><span>{{$prod->name}}</span></a>
										<div class="wrap-price"><span class="product-price">{{$prod->regular_price}}</span></div>
										<a href="#" class="btn add-to-cart"wire:click.prevent="store({{$prod->id}},'{{$prod->name}}',{{$prod->regular_price}})">Dodaj do Koszyka</a>
									</div>
								</div>
							</li>
							@endforeach							
						</ul>
					</div>

					<div class="wrap-pagination-info">
						{{$prods->links()}}
					<!--	<ul class="page-numbers">
							<li><span class="page-number-item current" >1</span></li>
							<li><a class="page-number-item" href="#" >2</a></li>
							<li><a class="page-number-item" href="#" >3</a></li>
							<li><a class="page-number-item next-link" href="#" >Next</a></li>
						</ul>
						<p class="result-count">Showing 1-8 of 12 result</p> -->
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title">Kategorie</h2>
						<div class="widget-content">
							<ul class="list-category">
								@foreach ($cates as $cate)
								<li class="category-item">
									<a href="{{route('prod.cate',['cate_slug'=>$cate->slug])}}" class="cate-link">{{$cate->name}}</a>
								</li>
								@endforeach 
							</ul>
						</div>
					</div><!-- Categories widget-->


					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popularne produkty</h2>
						<div class="widget-content">
							<ul class="products">
								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="/prod/grigliata-mista" title="Grigliata mista">
												<figure><img src="{{ asset('assets/images/products/digital_01.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="/prod/grigliata-mista" class="product-name"><span>Telefon </span></a>
											<div class="wrap-price"><span class="product-price">800.00zł</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="/prod/negroni" title="Negroni">
												<figure><img src="{{ asset('assets/images/products/digital_06.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="/prod/negroni" class="product-name"><span>Kamera</span></a>
											<div class="wrap-price"><span class="product-price">123.00zł</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="/prod/spaghetti-al-profumo-di-basilico" title="Spaghetti al profumo di basilico">
												<figure><img src="{{ asset('assets/images/products/fashion_03.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="/prod/spaghetti-al-profumo-di-basilico" class="product-name"><span>Krótkie spodnie</span></a>
											<div class="wrap-price"><span class="product-price">74.90zł</span></div>
										</div>
									</div>
								</li>

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="/prod/poledwica-wolowa" title="Polędwica wołowa">
												<figure><img src="{{ asset('assets/images/products/tools_equipment_2.jpg') }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="/prod/poledwica-wolowa" class="product-name"><span>Piła do betonu</span></a>
											<div class="wrap-price"><span class="product-price">279.00zł</span></div>
										</div>
									</div>
								</li>

							</ul>
						</div>
					</div><!-- brand widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>