@extends('app')

@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y">
        <div class="container">

            <div class="row px-5 py-5" style="background: white;">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Account</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Messages</button>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row py-3 ">
                            <div class="d-flex align-items-start justify-content-between" id="navigation">
                                <div class="nav flex-column d-flex align-items-start justify-content-start flex-wrap nav-pills me-3"
                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-overview-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-overview" type="button" role="tab"
                                        aria-controls="v-pills-overview" aria-selected="true">Overview</button>
                                    <button class="nav-link" id="v-pills-recent-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-recent" type="button" role="tab"
                                        aria-controls="v-pills-recent" aria-selected="false">Recently viewed</button>
                                    <button class="nav-link" id="v-pills-bids-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-bids" type="button" role="tab"
                                        aria-controls="v-pills-bids" aria-selected="false">Bids/offers</button>
                                    <button class="nav-link" id="v-pills-history-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-history" type="button" role="tab"
                                        aria-controls="v-pills-history" aria-selected="false">History</button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-wishlist" type="button" role="tab"
                                        aria-controls="v-pills-wishlist" aria-selected="false">Watchlist</button>
                                    <button class="nav-link" id="v-pills-favorite-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-favorite" type="button" role="tab"
                                        aria-controls="v-pills-favorite" aria-selected="false">Favorites</button>
                                    <button class="nav-link dropdown-toggle" id="v-pills-selling-tab" onclick="showMore()"
                                        data-bs-toggle="dropdown" type="button" aria-selected="false">Selling</button>
                                    <div class="d-none nav-pills" id="selling">
                                        <button class="nav-link" id="v-pills-s_overview-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-s_overview" type="button" role="tab"
                                            aria-controls="v-pills-s_overview" aria-selected="false">Overview</button>
                                        <button class="nav-link" id="v-pills-Sell-an-item-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-Sell-an-item" type="button" role="tab"
                                            aria-controls="v-pills-Sell-an-item" aria-selected="false">Sell an
                                            item</button>
                                        <button class="nav-link" id="v-pills-Draft-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-Draft" type="button" role="tab"
                                            aria-controls="v-pills-Draft" aria-selected="false">Drafts</button>
                                        <button class="nav-link" id="v-pills-Sale-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-Sale" type="button" role="tab"
                                            aria-controls="v-pills-Sale" aria-selected="false">Sales</button>
                                        <button class="nav-link" id="v-pills-Payment-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-Payment" type="button" role="tab"
                                            aria-controls="v-pills-Payment" aria-selected="false">Payments</button>
                                    </div>

                                </div>
                                <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-overview" role="tabpanel"
                                        aria-labelledby="v-pills-overview-tab">
                                        <div class="row">
                                            <div class="col-lg-12" id="account">
                                                <div class="center">
                                                    <h2 class="text-center">Account Overview</h2>
                                                    <div class="row d-flex flex-wrap">
                                                        <div class="col-md-6 d-flex flex-column my-1">
                                                            <div class="px-3 py-3 br-10 d-flex flex-column ">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5 class="mx-2">Account details</h5>
                                                                    <span onclick="Edit()"><i class="fa fa-pencil"
                                                                            aria-hidden="true"></i></span>

                                                                </div>
                                                                <div class="d-flex flex-column justify-content-between">

                                                                    <span class="my-2"> <i class="fa fa-user mx-2"
                                                                            aria-hidden="true"></i>Jon Doe</span>

                                                                    <span class="my-2"> <i class="fa fa-envelope mx-2"
                                                                            aria-hidden="true"></i>john@doe.com</span>

                                                                    <span class="my-2"> <i class="fa fa-phone mx-2"
                                                                            aria-hidden="true"></i>
                                                                        +233 545 3223 334</span>
                                                                    <a href="#"><span class="my-2 mx-2">CHANGE
                                                                            PASSWORD</span></a>

                                                                    <!-- price-wrap.// -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 d-flex flex-column my-1 ">
                                                            <div class="px-3 py-3 br-10 d-flex flex-column ">
                                                                <div class="d-flex justify-content-between">
                                                                    <h5 class="mx-2">Address details</h5>
                                                                    <span onclick="EditAddress()"> <i class="fa fa-pencil"
                                                                            aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex flex-row justify-content-start">

                                                                    <i class="fa fa-map-marker  mx-2"
                                                                        aria-hidden="true"></i><span>5
                                                                        Bannanas CL <br>
                                                                        Texxas 39389 <br> USA</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="profile">
                                                <form action="">
                                                    <h2>Edit Details</h2>
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="First Name">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input class="form-control " type="tel" id="phone"
                                                                placeholder="e.g. +1 702 123 4567" value="+1 ">
                                                        </div>
                                                        <button class="btn btn-primary btn-lg mx-2">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-12" style="display: none" id="address">
                                                <form action="">
                                                    <h2>Edit Details</h2>
                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="Address">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="State">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" class="form-control my-1"
                                                                placeholder="Country">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input class="form-control my-1" type="text"
                                                                placeholder="Zip code">
                                                        </div>
                                                        <button class="btn btn-primary btn-lg mx-2">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-recent" role="tabpanel"
                                        aria-labelledby="v-pills-recent-tab">
                                        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 mt-5 d-none">
                                            <div class="col mx-auto">
                                                <div class="text-center my-3"><i class="fa fa-clock fs-1"
                                                        aria-hidden="true"></i></div>
                                                <h3 class="text-center">You have no Viewed items</h3>
                                                <p class="text-center fs-16">To find items that might interest you, visit
                                                    our
                                                    Home
                                                    Page
                                                </p>
                                            </div>

                                        </div>
                                        <h2>Recently viewed</h2>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div href="{{ url('products') }}" class="card card-product-grid">
                                                    <a href="{{ url('products') }}" class="img-wrap"> <img
                                                            src="{{ asset('assets/images/items/1.jpg') }}"> </a>
                                                    <div class="py-3 px-3">
                                                        <div class="product-price">
                                                            <a href="{{ url('products') }}"
                                                                class="title text-small text-bold">
                                                                Lipstick Maa
                                                            </a>
                                                            <div class=" text-small text-bold">$179.00</div>
                                                            <!-- price-wrap.// -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- col.// -->
                                            <div class="col-md-3">
                                                <div href="{{ url('products') }}" class="card card-product-grid">
                                                    <a href="{{ url('products') }}" class="img-wrap"> <img
                                                            src="{{ asset('assets/images/items/2.jpg') }}"> </a>
                                                    <div class=" py-3 px-3">
                                                        <div class="product-price">
                                                            <a href="{{ url('products') }}"
                                                                class="title text-small text-bold">
                                                                Lipstick Maa
                                                            </a>
                                                            <div class=" text-small text-bold">$179.00</div>
                                                            <!-- price-wrap.// -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- col.// -->
                                            <div class="col-md-3">
                                                <div href="{{ url('products') }}" class="card card-product-grid">
                                                    <a href="{{ url('products') }}" class="img-wrap"> <img
                                                            src="{{ asset('assets/images/items/3.jpg') }}"> </a>
                                                    <div class=" py-3 px-3">
                                                        <div class="product-price">
                                                            <a href="{{ url('products') }}"
                                                                class="title text-small text-bold">
                                                                Lipstick Maa
                                                            </a>
                                                            <div class=" text-small text-bold">$179.00</div>
                                                            <!-- price-wrap.// -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- col.// -->
                                            <div class="col-md-3">
                                                <div href="{{ url('products') }}" class="card card-product-grid">
                                                    <a href="{{ url('products') }}" class="img-wrap"> <img
                                                            src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                    <div class=" py-3 px-3">
                                                        <div class="product-price">
                                                            <a href="{{ url('products') }}"
                                                                class="title text-small text-bold">
                                                                Lipstick Maa
                                                            </a>
                                                            <div class=" text-small text-bold">$179.00</div>
                                                            <!-- price-wrap.// -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- col.// -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-bids" role="tabpanel"
                                        aria-labelledby="v-pills-bids-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-home" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Bidding</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-profile" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">Offer</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have not received offers on any item yet.
                                                        Here you can find a list of interested buyers and their offers</p>
                                                </div>
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                    <div class="d-flex flex-row flex-wrap align-item-center">
                                                        <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                        <div class="d-flex flex-column justify-content-between py-3">
                                                            <p>Robot Cleaner</p>
                                                            <p>#63548</p>
                                                            <div class="d-flex">
                                                                <a href="#">
                                                                    <p class="mr-2">Tvendor</p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="mr-2">8 bids</p>
                                                                </a>
                                                                <p class="mr-2">5:07:15 days left</p>
                                                            </div>
                                                            <p>Condition: New</p>
                                                            <p>$235 + $25 shipping</p>
                                                            <p>Offer made: $208</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-evenly">
                                                        <button class="btn btn-block btn-primary my-1 w-100">Edit
                                                            offer</button>
                                                        <button
                                                            class="btn btn-block btn-outline-primary my-1 w-100">Message
                                                            seller</button>
                                                        <button
                                                            class="btn btn-block btn-outline-secondary my-1 w-100">Delete
                                                            bid</button>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have not received offers on any item yet.
                                                        Here you can find a list of interested buyers and their offers</p>
                                                </div>
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                    <div class="d-flex flex-row flex-wrap align-item-center">
                                                        <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                        <div class="d-flex flex-column justify-content-between py-3">
                                                            <p>Robot Cleaner</p>
                                                            <p>#63548</p>
                                                            <div class="d-flex">
                                                                <a href="#">
                                                                    <p class="mr-2">Tvendor</p>
                                                                </a>
                                                                <a href="#">
                                                                    <p class="mr-2">8 bids</p>
                                                                </a>
                                                                <p class="mr-2">5:07:15 days left</p>
                                                            </div>
                                                            <p>Condition: New</p>
                                                            <p>$235 + $25 shipping</p>
                                                            <p>Offer received: $208</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-evenly">
                                                        <button class="btn btn-block btn-primary my-1 w-100">Accept
                                                            offer</button>
                                                        <button
                                                            class="btn btn-block btn-outline-primary my-1 w-100">Message
                                                            buyer</button>
                                                        <button
                                                            class="btn btn-block btn-outline-secondary my-1 w-100">Delete
                                                            bid</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-history" role="tabpanel"
                                        aria-labelledby="v-pills-history-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-orders" type="button" role="tab"
                                                    aria-controls="nav-orders" aria-selected="true">Orders</button>
                                                <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-returned" type="button" role="tab"
                                                    aria-controls="nav-returned" aria-selected="false">Cancelled</button>
                                                <button class="nav-link" id="nav-cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-cancel" type="button" role="tab"
                                                    aria-controls="nav-cancel" aria-selected="false">Returned</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel"
                                                aria-labelledby="nav-orders-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="order">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Order details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="orderDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Total:</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Description</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Method</p>
                                                                    <p>Card payment</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Details</p>
                                                                    <p>Item total: $580</p>
                                                                    <p>Delivery fee: $0</p>
                                                                    <p>Total: $580</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Delivery method</p>
                                                                    <p>FedEx</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Address</p>
                                                                    <p>No. 5 Somewhere in the world,
                                                                        914630, Earth</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-returned" role="tabpanel"
                                                aria-labelledby="nav-returned-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-cancel" role="tabpanel"
                                                aria-labelledby="nav-cancel-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="return">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- returned details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="returnDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Reason:</p>
                                                                    <p class="">Package seal broken and contents
                                                                        incomplete
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Images</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('assets/images/items/4.jpg') }}"
                                                                        class="img-wrap">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel"
                                        aria-labelledby="v-pills-wishlist-tab">
                                        <h3>Watchlist</h3>
                                        <div class="mx-auto w-70 mt-5 d-none">
                                            <p class="text-center">You have no orders to display</p>
                                        </div>
                                        <div
                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                        src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                <div class="d-flex flex-column justify-content-between py-3">
                                                    <p>Robot Cleaner</p>
                                                    <p>#63548</p>
                                                    <div class="d-flex">
                                                        <a href="#">
                                                            <p class="mr-2">Tvendor</p>
                                                        </a>
                                                        <a href="#">
                                                            <p class="mr-2">121 Comments</p>
                                                        </a>
                                                        <p class="mr-2">100% sale rate</p>
                                                    </div>
                                                    <p>Condition: New</p>
                                                    <p>$235 + $25 shipping</p>
                                                    <p>Offer made: $208</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column justify-content-evenly">
                                                <button class="btn btn-block btn-primary my-1 w-100">Buy now</button>
                                                <button class="btn btn-block btn-outline-primary my-1 w-100">View seller’s
                                                    page</button>
                                                <button
                                                    class="btn btn-block btn-outline-secondary my-1 w-100">Delete</button>
                                            </div>

                                        </div>
                                        <div
                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                        src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                <div class="d-flex flex-column justify-content-between py-3">
                                                    <p>Robot Cleaner</p>
                                                    <p>#63548</p>
                                                    <div class="d-flex">
                                                        <a href="#">
                                                            <p class="mr-2">Tvendor</p>
                                                        </a>
                                                        <a href="#">
                                                            <p class="mr-2">121 Comments</p>
                                                        </a>
                                                        <p class="mr-2">100% sale rate</p>
                                                    </div>
                                                    <p>Condition: New</p>
                                                    <p>$235 + $25 shipping</p>
                                                    <p>Offer made: $208</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column justify-content-evenly">
                                                <button class="btn btn-block btn-primary my-1 w-100">Bid now</button>
                                                <button class="btn btn-block btn-outline-primary my-1 w-100">View seller’s
                                                    page</button>
                                                <button
                                                    class="btn btn-block btn-outline-secondary my-1 w-100">Delete</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-favorite" role="tabpanel"
                                        aria-labelledby="v-pills-favorite-tab">
                                        <h3>Favourites</h3>
                                        {{-- no order --}}
                                        <div class="mx-auto w-70 mt-5 d-none">
                                            <p class="text-center">You have no orders to display</p>
                                        </div>
                                        <div
                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                        src="{{ asset('assets/images/items/4.jpg') }}"> </a>
                                                <div class="d-flex flex-column justify-content-start py-3">
                                                    <p>Robot Cleaner</p>
                                                    <p class="fs-4 fw-bolder">$208</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column justify-content-evenly">
                                                <button class="btn btn-block btn-primary my-1 w-100">Buy now</button>
                                                <button class="btn btn-block btn-outline-primary my-1 w-100">View item
                                                    description</button>
                                                <button
                                                    class="btn btn-block btn-outline-secondary my-1 w-100">Delete</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-s_overview" role="tabpanel"
                                        aria-labelledby="v-pills-s_overview-tab">

                                        <div class="row" id="order">
                                            <div class="col-md-12">
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between align-item-center flex-wrap my-2 px-4 py-3">
                                                    {{-- <div
                                                        class="d-flex  flex-wrap align-item-center justify-content-between"> --}}
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex flex-column mx-3 justify-content-center">
                                                            <h1 class="text-center">0</h1>
                                                            <p class="small-text text-center">Active</p>
                                                        </div>
                                                        <div class="d-flex flex-column mx-3 justify-content-center">
                                                            <h1 class="text-center">0</h1>
                                                            <p class="small-text text-center">Sold</p>
                                                        </div>
                                                        <div class="d-flex flex-column mx-3 justify-content-center">
                                                            <h1 class="text-center">0</h1>
                                                            <p class="small-text text-center">Unsold</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="d-flex flex-column">
                                                            <h1 class="fw-bolder text-center">$0.00</h1>
                                                            <p class="small-text text-center">Total Sales</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2">
                                                        <a href="{{ url('start-listing') }}"><button
                                                                class="btn btn-block btn-primary">List an item</button></a>

                                                    </div>
                                                    {{-- </div> --}}


                                                </div>
                                            </div>
                                            <div class="col-md-12 my-5">
                                                <h3 class="text-center my-2">
                                                    Manage your sales activity
                                                </h3>
                                                <p class="small-text text-center">This is your selling account Overview</p>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                    <div
                                                        class="d-flex flex-column text-center justify-content-center py-3">
                                                        <span><i class="fa fa-tag fs-6"></i></span>
                                                        <p>List items</p>
                                                        <a href="#">
                                                            <p class="small-text">Start listing</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                    <div
                                                        class="d-flex flex-column text-center justify-content-center py-3">
                                                        <span><i class="fa fa-truck fs-6"></i></span>
                                                        <p>Ship items</p>
                                                        <a href="#">
                                                            <p class="small-text">Check shipping options</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div
                                                    class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                    <div
                                                        class="d-flex flex-column text-center justify-content-center py-3">
                                                        <span><i class="fa fa-tag fs-6"></i></span>
                                                        <p>Manage sales activities</p>
                                                        <a href="#">
                                                            <p class="small-text">Explore</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row d-flex flex-columnn text-center my-3">
                                                <span><i class="fa fa-image fs-6 my-3"></i></span>
                                                <h4>Your sales summary will appear here</h4>
                                                <p class="small-text">Highlights of your sales activity will be available
                                                    in this area
                                                    so you can manage everything easily</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Sell-an-item" role="tabpanel"
                                        aria-labelledby="v-pills-Sell-an-item-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-orders" type="button" role="tab"
                                                    aria-controls="nav-orders" aria-selected="true">Orders</button>
                                                <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-returned" type="button" role="tab"
                                                    aria-controls="nav-returned" aria-selected="false">Cancelled</button>
                                                <button class="nav-link" id="nav-cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-cancel" type="button" role="tab"
                                                    aria-controls="nav-cancel" aria-selected="false">Returned</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel"
                                                aria-labelledby="nav-orders-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="order">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Order details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="orderDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Total:</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Description</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Method</p>
                                                                    <p>Card payment</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Details</p>
                                                                    <p>Item total: $580</p>
                                                                    <p>Delivery fee: $0</p>
                                                                    <p>Total: $580</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Delivery method</p>
                                                                    <p>FedEx</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Address</p>
                                                                    <p>No. 5 Somewhere in the world,
                                                                        914630, Earth</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-returned" role="tabpanel"
                                                aria-labelledby="nav-returned-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-cancel" role="tabpanel"
                                                aria-labelledby="nav-cancel-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="return">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- returned details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="returnDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Reason:</p>
                                                                    <p class="">Package seal broken and contents
                                                                        incomplete
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Images</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('assets/images/items/4.jpg') }}"
                                                                        class="img-wrap">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Sale" role="tabpanel"
                                        aria-labelledby="v-pills-Sale-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-orders-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-orders" type="button" role="tab"
                                                    aria-controls="nav-orders" aria-selected="true">Orders</button>
                                                <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-returned" type="button" role="tab"
                                                    aria-controls="nav-returned" aria-selected="false">Cancelled</button>
                                                <button class="nav-link" id="nav-cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-cancel" type="button" role="tab"
                                                    aria-controls="nav-cancel" aria-selected="false">Returned</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel"
                                                aria-labelledby="nav-orders-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="order">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Order details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="orderDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Total:</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Description</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Method</p>
                                                                    <p>Card payment</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Details</p>
                                                                    <p>Item total: $580</p>
                                                                    <p>Delivery fee: $0</p>
                                                                    <p>Total: $580</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Delivery method</p>
                                                                    <p>FedEx</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Address</p>
                                                                    <p>No. 5 Somewhere in the world,
                                                                        914630, Earth</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-returned" role="tabpanel"
                                                aria-labelledby="nav-returned-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-cancel" role="tabpanel"
                                                aria-labelledby="nav-cancel-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="return">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- returned details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="returnDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Reason:</p>
                                                                    <p class="">Package seal broken and contents
                                                                        incomplete
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Images</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('assets/images/items/4.jpg') }}"
                                                                        class="img-wrap">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Sale" role="tabpanel"
                                        aria-labelledby="v-pills-Sale-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-orders-tab"
                                                    data-bs-toggle="tab" data-bs-target="#nav-orders" type="button"
                                                    role="tab" aria-controls="nav-orders"
                                                    aria-selected="true">Orders</button>
                                                <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-returned" type="button" role="tab"
                                                    aria-controls="nav-returned"
                                                    aria-selected="false">Cancelled</button>
                                                <button class="nav-link" id="nav-cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-cancel" type="button" role="tab"
                                                    aria-controls="nav-cancel" aria-selected="false">Returned</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel"
                                                aria-labelledby="nav-orders-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="order">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Order details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="orderDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Total:</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Description</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Method</p>
                                                                    <p>Card payment</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Details</p>
                                                                    <p>Item total: $580</p>
                                                                    <p>Delivery fee: $0</p>
                                                                    <p>Total: $580</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Delivery method</p>
                                                                    <p>FedEx</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Address</p>
                                                                    <p>No. 5 Somewhere in the world,
                                                                        914630, Earth</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-returned" role="tabpanel"
                                                aria-labelledby="nav-returned-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-cancel" role="tabpanel"
                                                aria-labelledby="nav-cancel-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="return">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- returned details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="returnDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Reason:</p>
                                                                    <p class="">Package seal broken and contents
                                                                        incomplete
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Images</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('assets/images/items/4.jpg') }}"
                                                                        class="img-wrap">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Payment" role="tabpanel"
                                        aria-labelledby="v-pills-Payment-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-orders-tab"
                                                    data-bs-toggle="tab" data-bs-target="#nav-orders" type="button"
                                                    role="tab" aria-controls="nav-orders"
                                                    aria-selected="true">Orders</button>
                                                <button class="nav-link" id="nav-returned-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-returned" type="button" role="tab"
                                                    aria-controls="nav-returned"
                                                    aria-selected="false">Cancelled</button>
                                                <button class="nav-link" id="nav-cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-cancel" type="button" role="tab"
                                                    aria-controls="nav-cancel" aria-selected="false">Returned</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-orders" role="tabpanel"
                                                aria-labelledby="nav-orders-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="order">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="orderDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Order details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="orderDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-success mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Total:</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Description</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Method</p>
                                                                    <p>Card payment</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Payment Details</p>
                                                                    <p>Item total: $580</p>
                                                                    <p>Delivery fee: $0</p>
                                                                    <p>Total: $580</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Delivery method</p>
                                                                    <p>FedEx</p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p class="fw-bolder">Address</p>
                                                                    <p>No. 5 Somewhere in the world,
                                                                        914630, Earth</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-returned" role="tabpanel"
                                                aria-labelledby="nav-returned-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-secondary mr-1">Cancelled</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>

                                                                </div>


                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-cancel" role="tabpanel"
                                                aria-labelledby="nav-cancel-tab">
                                                {{-- no order --}}
                                                <div class="mx-auto w-70 mt-5 d-none">
                                                    <p class="text-center">You have no orders to display</p>
                                                </div>
                                                <div class="row" id="return">
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div
                                                            class="card card-product-grid d-flex flex-row  justify-content-between flex-wrap my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                                <div
                                                                    class="d-flex flex-column justify-content-between py-3">
                                                                    <p>Robot Cleaner</p>
                                                                    <p>#63548</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p>Qty: 1</p>
                                                                    <p class="fs-4 fw-bolder">$208</p>
                                                                    <a href="#" onclick="returnDetails()">
                                                                        <p class="fs-16">View Detials</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- returned details --}}
                                                <div class="d-flex flex-column d-none mt-5" id="returnDetails">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-flex justify-content-start align-item-center">
                                                            <div class="mr-1"> <i class="fa fa-arrow-left"
                                                                    aria-hidden="true"></i></div>
                                                            <h4>Orders details</h4>
                                                        </div>
                                                        <p class="small-text">Showing 2 of 2 items</p>
                                                    </div>
                                                    <hr>
                                                    <div class="row d-flex flex-wrap-reverse">
                                                        <div class="col-md-6 card card-product-grid my-2 px-4 py-3">
                                                            <div class="d-flex flex-row flex-wrap align-item-center">

                                                                <div
                                                                    class="d-flex flex-column justify-content-between align-content-between py-3">
                                                                    <h4 class="fs-5 fw-bolder">Robot Cleaner</h4>
                                                                    <p class="my-1">#63548</p>
                                                                    <p class="my-1">Qty: 1</p>
                                                                    <p class="my-1">Order made: 15/09/22</p>
                                                                    <div class="d-flex align-item-center">
                                                                        <button
                                                                            class="btn btn-block btn-return mr-1">Delivered</button>
                                                                        <p class="mt-2">17/09/22</p>
                                                                    </div>
                                                                    <p class="my-1">Reason:</p>
                                                                    <p class="">Package seal broken and contents
                                                                        incomplete
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 card card-product-grid  my-2 px-4 py-3">
                                                            <div class="text-center">
                                                                <a href="{{ url('products') }}" class="img-wrap"> <img
                                                                        src="{{ asset('assets/images/items/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="card card-product-grid my-2 px-4 py-3">
                                                            <h5>Images</h5>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="{{ asset('assets/images/items/4.jpg') }}"
                                                                        class="img-wrap">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        proffile
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                        aria-labelledby="pills-contact-tab">
                        ccontacct
                    </div>
                </div>
            </div> <!-- row.// -->
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
@endsection
