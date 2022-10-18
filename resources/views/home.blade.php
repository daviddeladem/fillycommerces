@extends('app')

@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y">
        <div class="container">

            <div class="row">
                {{-- <aside class="col-md-3">
                    <nav class="card">
                        <ul class="menu-category">
                            <li><a href="{{ url('products') }}">Best clothes</a></li>
                            <li><a href="{{ url('products') }}">Automobiles</a></li>
                            <li><a href="{{ url('products') }}">Home interior</a></li>
                            <li><a href="{{ url('products') }}">Electronics</a></li>
                            <li><a href="{{ url('products') }}">Technologies</a></li>
                            <li><a href="{{ url('products') }}">Digital goods</a></li>
                            <li class="has-submenu"><a href="{{ url('products') }}">More items</a>
                                <ul class="submenu">
                                    <li><a href="{{ url('products') }}">Submenu name</a></li>
                                    <li><a href="{{ url('products') }}">Great submenu</a></li>
                                    <li><a href="{{ url('products') }}">Another menu</a></li>
                                    <li><a href="{{ url('products') }}">Some others</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </aside> <!-- col.// --> --}}
                <div class="col-md-12">
                    <div id="slider">
                        <figure id="slidy">

                            <img
                                src="https://static.vecteezy.com/system/resources/previews/002/006/605/original/paper-art-shopping-online-on-smartphone-and-new-buy-sale-promotion-pink-backgroud-for-banner-market-ecommerce-free-vector.jpg" />
                            <img
                                src="https://static.vecteezy.com/system/resources/thumbnails/003/240/364/small/shopping-online-on-phone-paper-art-modern-pink-background-gifts-box-free-vector.jpg" />
                            <img
                                src="https://static.vecteezy.com/system/resources/thumbnails/004/299/815/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-vector.jpg" />
                            <img
                                src="https://static.vecteezy.com/system/resources/thumbnails/004/707/493/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-vector.jpg" />
                            <img
                                src="https://static.vecteezy.com/system/resources/thumbnails/004/299/835/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-free-vector.jpg" />
                            <img
                                src="https://static.vecteezy.com/system/resources/thumbnails/004/707/493/small/online-shopping-on-phone-buy-sell-business-digital-web-banner-application-money-advertising-payment-ecommerce-illustration-search-vector.jpg" />
                        </figure>
                    </div>
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-3 accordion ">
                    <a href="{{ url('products') }}" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <div class="accordion-text mx-3">
                        <h5 class="head-small">Free Delivery</h5>
                        <p class="text-small">Get free delivery for every order above $50</p>
                    </div>
                </div>
                <div class="col-md-3 accordion ">
                    <a href="{{ url('products') }}" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <div class="accordion-text mx-3">
                        <h5 class="head-small">Secure Payment</h5>
                        <p class="text-small">100% secure payment. Get easy support anytime</p>
                    </div>
                </div>
                <div class="col-md-3 accordion ">
                    <a href="{{ url('products') }}" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <div class="accordion-text mx-3">
                        <h5 class="head-small">Return Policy</h5>
                        <p class="text-small">Return withing the days of receiving your order</p>
                    </div>
                </div>
                <div class="col-md-3 accordion ">
                    <a href="{{ url('products') }}" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <div class="accordion-text mx-3">
                        <h5 class="head-small">24/7 Online Support</h5>
                        <p class="text-small">Dedicated support anytime and anywhere</p>
                    </div>
                </div>
            </div>
            <div class="quick-deals">
                <header class="section-heading">
                    {{-- <a href="{{url('products')}}" class="btn btn-outline-primary float-end">See all</a> --}}
                    <h3 class="section-title"><i class="fas fa-stopwatch orange f-20"></i> Quick Deals</h3>
                </header><!-- sect-heading -->


                <div class="row">
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/1.jpg') }}"> </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Lipstick Maa</h5>
                                </a>
                                <div class="price mt-1 my-2">$179.00</div> <!-- price-wrap.// -->
                                <button class="btn btn-buy my-2">Buy Now</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray">
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Coffee Mate</h5>
                                </a>
                                <div class="price mt-1 my-2">$309.00</div> <!-- price-wrap.// -->
                                <button class="btn btn-buy my-2">Buy Now</button>
                            </div>
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/2.jpg') }}"> </a>

                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray">
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Chelsea Boots</h5>
                                </a>
                                <div class="price mt-1 my-2">$209.00</div> <!-- price-wrap.// -->
                                <button class="btn btn-buy my-2">Buy Now</button>
                            </div>
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/3.jpg') }}"> </a>

                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div>
            <div class="hot-deals">
                <header class="section-heading">
                    <a href="{{ url('products') }}" class="btn btn-outline-primary float-end">See all</a>
                    <h3 class="section-title"><i class="fas fa-fire-alt orange f-20"></i> Hot Deals</h3>
                </header><!-- sect-heading -->
                <div class="row">
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/1.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/2.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/3.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/5.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/6.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/7.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-3">
                        <div href="{{ url('products') }}" class="card card-product-grid">
                            <a href="{{ url('products') }}" class="img-wrap"> <img
                                    src="{{ asset('assets/images/items/9.jpg') }}"> </a>
                            <div class="info-wrap-price py-3 px-3">
                                <div class="product-price">
                                    <a href="{{ url('products') }}" class="title text-small text-bold">
                                        Lipstick Maa
                                    </a>
                                    <div class=" text-small text-bold">$179.00</div> <!-- price-wrap.// -->
                                </div>
                                <button class="btn btn-buy my-2">Add to Cart</button>
                            </div>
                        </div>
                    </div> <!-- col.// -->
                </div>
            </div>
            <div class="carousel">
                <img src="{{ asset('assets/images/fashion.png') }}" alt="" height='200' class="px-2">
                <div class="carousel-text px-5">
                    <h2 class="font-bold">Fashion Meets Class</h2>
                    <h5 class="font-light f-14 my-2">Top class sartorials for your elegance</h5>
                    <button class="btn btn-shop">Shop Now</button>
                </div>
            </div>
            <hr>
            <div class="samples">
                <div class="row">
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/1.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Lipstick Maa</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/2.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Coffee Mate</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/3.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Nike Sneaker</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/4.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Lipstick Maa</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/5.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Coffee Mate</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-4">
                        <div href="{{ url('products') }}" class="card-product-grid gray align-center">
                            <a href="{{ url('products') }}" class="my-3 "> <img
                                    src="{{ asset('assets/images/items/6.jpg') }}" class="br-1" height='100'>
                            </a>
                            <div class="info-wrap">
                                <a href="{{ url('products') }}" class="title my-2">
                                    <h5>Nike Sneaker</h5>
                                </a>
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                    <span class="fa fa-star-o checked"></span>
                                </div>
                                <div class="price mt-1 my-2 text-green">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div>
            <div class="row subscribe text-white br-1">
                <div class="col-md-6 py-2">
                    <h3 class="f-20 font-bold">New to Filly Commerce</h3>
                    <p class="f-14">Subscribe to our newsletter to get updates on our latest offers!</p>
                    <div class="custom-search">
                        <input type="text" class="custom-search-input" placeholder="Enter your email">
                        <i class="fas fa-paper-plane text-white br-50"></i>
                    </div>
                </div>
                <div class="col-md-6 py-2">
                    <h3 class="f-20 font-bold">Dowload the Free App</h3>
                    <p class="f-14">Get access to exclusive discounts</p>
                    <button class="btn btn-outline-light"><i class="fab fa-apple mx-1"></i><i
                            class="fab fa-google-play mx-1"></i> | Download</button>
                </div>
            </div>


        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
