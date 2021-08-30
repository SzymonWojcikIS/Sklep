<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Koszyk</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        @if(Cart::count() > 0)
        <div class="wrap-iten-in-cart">
            @if(Session::has('success_message'))
                <div class="alert alert-success">
                    <strong>Sukces</strong> {{Session::get('success_message')}}
                </div>
            @endif
            <h3 class="box-title">Nazwa produktu</h3>
            <ul class="products-cart">
                @foreach (Cart::content() as $item)                
                <li class="pr-cart-item">
                    <div class="product-image">
                        <figure><img src="{{ asset('assets/images/prods') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                    </div>
                    <div class="product-name">
                        <a class="link-to-product" href="{{route('prod.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
                    </div>
                    <div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}zł</p></div>
                    <div class="quantity">
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
                            <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
                            <a class="btn btn-reduce" href="#"wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
                        </div>
                    </div>
                    <div class="price-field sub-total"><p class="price">{{$item->subtotal}}zł</p></div>
                    <div class="delete">
                        <a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
                            <span>Usuń z koszyka</span>
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>	
                @endforeach						
            </ul>

        </div>
 <label class="checkbox-field">
        <div class="summary">
            <div class="order-summary">
                <h4 class="title-box">Suma</h4>
                <p class="summary-info"><span class="title">Cena</span><b class="index">{{Cart::subtotal()}}zł</b></p>
                <p class="summary-info"><span class="title">Podatek</span><b class="index">{{Cart::tax()}}zł</b></p>                
                <p class="summary-info total-info "><span class="title">Całość</span><b class="index">{{Cart::total() }}zł</b></p>
            </div>
            <div class="checkout-info">
               
                    <input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>Mam kod rabatowy:</span>
               
                <a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Zamów</a>
                <a class="link-to-shop" href="shop.html">Kontynuuj zamawianie<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                
            </div>
            <div class="update-clear">
                <a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Wyczyść koszyk</a>
            </div>
        </div>
 </label>
 @else
    <div class="text-center" style="padding: 30px 0;">
            <h1>Twój koszyk jest pusty</h1>
            <p>Dodaj przedmioty do koszyka</p>
            <a href="/menu" class="btn btn-success">Kup teraz</a>
    </div>
 @endif
 
        <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Najpopularniejsze produkty</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/grigliata-mista" title="Grigliata mista">
                                <figure><img src="{{ asset('assets/images/prods/grilow.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="/prod/grigliata-mista" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/grigliata-mista" class="product-name"><span>Grilowany mix owoców morza...</span></a>
                            <div class="wrap-price"><span class="product-price">89.00zł</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/spaghetti-al-profumo-di-basilico" title="Spaghetti al profumo di basilico">
                                <figure><img src="{{ asset('assets/images/prods/spaget.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="/prod/spaghetti-al-profumo-di-basilico" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/spaghetti-al-profumo-di-basilico" class="product-name"><span>Spaghetti z pomidorkami, czosnkiem, bazylią...</span></a>
                            <div class="wrap-price"><ins><p class="product-price">38.00zł</p></ins> </div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/negroni" title="Negroni">
                                <figure><img src="{{ asset('assets/images/prods/negro.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="/prod/negroni" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/negroni" class="product-name"><span>Gin, campari, wermut...</span></a>
                            <div class="wrap-price"><ins><p class="product-price">22.00zł</p></ins> <del><p class="product-price">25.00zł</p></del></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/poledwica-wolowa" title="Polędwica wołowa">
                                <figure><img src="{{ asset('assets/images/prods/poled.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item bestseller-label">Bestseller</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="/prod/poledwica-wolowa" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/poledwica-wolowa" class="product-name"><span>sos porto, puree z marchewki z prażonymi...</span></a>
                            <div class="wrap-price"><span class="product-price">88.00zł</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/soute-di-cozze" title="Soute di cozze">
                                <figure><img src="{{ asset('assets/images/prods/mule.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="/prod/soute-di-cozze" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/soute-di-cozze" class="product-name"><span>Mule w sosie własnym</span></a>
                            <div class="wrap-price"><span class="product-price">50.00zł</span></div>
                        </div>
                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="/prod/szarlotka-na-goraco-z-galka-lodow-i-bita-smietana" title="Szarlotka na gorąco z gałką lodów i bitą śmietaną">
                                <figure><img src="{{ asset('assets/images/prods/szarlo.png') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="/prod/szarlotka-na-goraco-z-galka-lodow-i-bita-smietana" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="/prod/szarlotka-na-goraco-z-galka-lodow-i-bita-smietana" class="product-name"><span>Szarlotka na gorąco z gałką lodów i bitą śmietaną</span></a>
                            <div class="wrap-price"><ins><p class="product-price">16.00zł</p></ins> <del><p class="product-price">18.00zł</p></del></div>
                        </div>
                    </div>


                </div>
            </div><!--End wrap-products-->
        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>