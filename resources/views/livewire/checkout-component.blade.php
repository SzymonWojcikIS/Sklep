<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Zamowianie</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <form wire:submit.prevent="placeOrder">
        <div class="row">
            <div class="col-md-12">
            <div class="wrap-address-billing">
            <h3 class="box-title">Podaj swoje dane</h3>
            <div class="billing-address">
                <p class="row-in-form">
                    <label for="fname">IMIĘ<span>*</span></label>
                    <input  type="text" name="fname" value="" placeholder="Imię" wire:model="fristname">
                    @error('fristname') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="lname">NAZWISKO<span>*</span></label>
                    <input  type="text" name="lname" value="" placeholder="Nazwisko" wire:model="lastname">
                    @error('lastname') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="email">Email :</label>
                    <input  type="email" name="email" value="" placeholder="Email" wire:model="email">
                    @error('email') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="phone">Numer kontaktowy<span>*</span></label>
                    <input  type="number" name="phone" value="" placeholder="10 cyfrowy nr" wire:model="mobile">
                    @error('mobile') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="add">Adres:</label>
                    <input  type="text" name="add" value="" placeholder="Ulica i numer" wire:model="line1">
                    @error('line1') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="country">Kraj<span>*</span></label>
                    <input  type="text" name="country" value="" placeholder="Kraj" wire:model="country">
                    @error('country') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="zip-code">Kod pocztowy:</label>
                    <input  type="number" name="zip-code" value="" placeholder="Kod pocztowy" wire:model="zipcode">
                    @error('zipcode') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
                <p class="row-in-form">
                    <label for="city">Miasto<span>*</span></label>
                    <input  type="text" name="city" value="" placeholder="Miasto" wire:model="city">
                    @error('city') <span calss="text-danger">{{$message}}></span> @enderror
                </p>
            </div>
        </div>
            </div>
        </div>
        
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Metody płatności</h4>
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                        <span>Gotówka</span>
                        <span class="payment-desc">Zapraszamy do kasy</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                        <span>Karta</span>
                        <span class="payment-desc">Wsadź swoją kartę</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-paypal" value="ecard" type="radio" wire:model="paymentmode">
                        <span>Zbliżeniowo</span>
                        <span class="payment-desc">Przyłóż swoje urządzenie do skanera</span>   
                    </label>                  
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-paypal" value="blik" type="radio" wire:model="paymentmode">
                        <span>Blik</span>
                        <span class="payment-desc">Wpisz kod <br><input id="coupon-code" type="text" name="coupon-code" value="" placeholder=""></span>
                    </label>
                    @error('paymentmode') <span calss="text-danger">{{$message}}></span> @enderror
                </div>
                
                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{Cart::total() }}zł</span></p>                
                
                <button type="submit" class="btn btn-medium">Place order now</button>
            </div>
            <div class="summary-item shipping-method">
                <h4 class="title-box">Kod rabatowy</h4>
                <p class="row-in-form">
                    <label for="coupon-code">Podaj swój kod:</label>
                    <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
                </p>
                <a href="#" class="btn btn-small">Zatwierdź</a>
            </div>
        </div>

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
        </form>

    </div><!--end main content area-->
</div><!--end container-->

</main>