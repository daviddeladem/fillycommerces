@extends('app')
<style type="text/css">
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-top: #FFFFFF;
        border-right: #FFFFFF;
        border-left: #FFFFFF;
        border-bottom: 3px solid #0D9737;
    }
</style>
@section('content')
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container">

            <div class="row my-3">
                <div
                    style="background-image: url('https://www.corporatevision-news.com/wp-content/uploads/2021/06/Contactless-Payment.jpg');
                     width:100%; height:300px; object-fit: scale-down;">


                </div>

            </div>
            <div>


                <div class="row">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="place-tab" data-toggle="tab" href="#place" role="tab"
                                aria-controls="place" aria-selected="true">Place Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="track-tab" data-toggle="tab" href="#track" role="tab"
                                aria-controls="track" aria-selected="false">Track Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab"
                                aria-controls="cancel" aria-selected="false">Order Cancellation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="return-tab" data-toggle="tab" href="#return" role="tab"
                                aria-controls="return" aria-selected="false">Returns and Refunds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab"
                                aria-controls="payment" aria-selected="false">Payments and FAQs</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane container fade show active" id="place" role="tabpanel"
                            aria-labelledby="place-tab">
                            <div class="row mt-5 mb-5">
                                <div class="col-md-6">
                                    <img src="https://erasmus-plus.ec.europa.eu/sites/default/files/styles/eac_ratio_16_9_large/public/2022-05/ce_priority2_CreativeLenses.png?h=bfaa3d24&itok=kEf-2tUC"
                                        alt="" width="400">
                                </div>
                                <div class="col-md-6">
                                    <p><strong>To place your order, Kindly follow the following Steps:</strong></p>
                                    <ol class="mb-5">
                                        <li>
                                            Search for an item using the search bar or find an item by categories
                                        </li>
                                        <li>Compare prices</li>
                                        <li>Add to your cart</li>
                                        <li>Then pay at checkout</li>
                                    </ol>
                                    <p class="mt-5">If you have any questions, please contact Help centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="track" role="tabpanel" aria-labelledby="track-tab">
                            <div class="row mt-5 mb-5">
                                <div class="col-md-6">
                                    <img src="https://erasmus-plus.ec.europa.eu/sites/default/files/styles/eac_ratio_16_9_large/public/2022-05/ce_priority2_CreativeLenses.png?h=bfaa3d24&itok=kEf-2tUC"
                                        alt="" width="400">
                                </div>
                                <div class="col-md-6">
                                    <p><strong>If you have any questions, please contact Help centre.</strong></p>
                                    <ol class="mb-5">
                                        <li>
                                            From your account click on orders

                                        </li>
                                        <li>
                                            Then click see details in front of the order you wish to track

                                        </li>
                                        <li>Click the Track Item button and the delivery details will be displayed</li>

                                    </ol>
                                    <p class="mt-5">If you have any questions, please contact Help centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="cancel" role="tabpanel" aria-labelledby="cancel-tab">
                            <div class="row mt-5 mb-5">
                                <div class="col-md-6">
                                    <img src="https://erasmus-plus.ec.europa.eu/sites/default/files/styles/eac_ratio_16_9_large/public/2022-05/ce_priority2_CreativeLenses.png?h=bfaa3d24&itok=kEf-2tUC"
                                        alt="" width="400">
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Please note you may cancel one item at a time. To cancel an item on your
                                            order, it must not yet be shipped (which means that it’s already on its way to
                                            your selected delivery address)</strong> </p>
                                    <p>To cancel your order, Kindly follow the following Steps:</p>
                                    <ol>
                                        <li>
                                            Log into your Filly Commerce account
                                        </li>
                                        <li>
                                            Select Account
                                        </li>
                                        <li>Select Orders</li>
                                        <li>Find the item you would like to cancel and click Cancel item
                                        </li>
                                        <li>Select the cancellation reason and click submit</li>
                                        <li>If your order is prepaid, you will receive your refund as per standard timelines
                                        </li>
                                    </ol>
                                    <p class="mt-5">If you have any questions, please contact Help centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="return" role="tabpanel" aria-labelledby="return-tab">
                            <div class="row mt-5 mb-5">
                                <div class="col-md-6">
                                    <img src="https://erasmus-plus.ec.europa.eu/sites/default/files/styles/eac_ratio_16_9_large/public/2022-05/ce_priority2_CreativeLenses.png?h=bfaa3d24&itok=kEf-2tUC"
                                        alt="" width="400">
                                </div>
                                <div class="col-md-6">
                                    <h5>To cancel your order, Kindly follow the following Steps:</h5>
                                    <ol>
                                        <li>
                                            Login and go to ORDERS Then click on the order of the item(s) you wish to return
                                        </li>
                                        <li>
                                            Select the number of items you wish to return, the reason of the return, include
                                            pictures of the product that was delivered to Filly Commerce as a means of
                                            evidence. and give us more details to help us identify the issue with the
                                            product
                                        </li>
                                        <li>Select your preferred refund method</li>
                                        <li>Choose your ideal return process: Return the item yourself to one of our
                                            eligible drop-off stations or let us handle it by picking up the item from you
                                        </li>
                                        <li>Check your information and submit your return request</li>
                                    </ol>
                                    <p>If you have any questions, please contact Help centre.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="payment" role="tabpanel" aria-labelledby="payment-tab"
                            style="padding: 0 20%">
                            <div class="row mt-5 mb-5">
                                <h5 class="text-center">Need more information about Filly Commerce?</h5>
                                <input type="text" name="" id="" placeholder="Search"
                                    class="form-control my-3">
                                <p class="text-primary">Will all of the items in my order arrive in a single package?</p>
                                <p>If your order consists of items from more than one seller, your items will arrive
                                    separately. If your order consists of items from a single seller, your items may arrive
                                    together or separately. If your orders arrive separately, be rest assured that the
                                    remaining item(s) will be delivered shortly.</p>
                                <p class="text-primary">Why do I see different prices for the same product?</p>
                                <p>Filly Commerce is your trusted online marketplace that supports entrepreneurs and we have
                                    many different sellers competing for business. Therefore, you may see the same product
                                    offered by different sellers at different prices. We believe that by supporting these
                                    'third-party' sellers, we can offer you a wider product selection, more choice,
                                    increased convenience, and better pricing.</p>
                                <p class="text-primary">Why does the estimated delivery time vary?</p>
                                <p>Filly Commerce is a true online marketplace that empowers entrepreneurs across the globe.
                                    This means that not all products on Filly Commerce are sold or delivered by Filly
                                    Commerce. Given the various factors involved (the time it takes a seller to ship, the
                                    courier company used, the distance between buyer and seller, and more) delivery times
                                    may vary.</p>
                                <p class="text-primary">How much are delivery fees?</p>
                                <p>Delivery fees are the costs incurred by Filly Commerce and our logistics partners to
                                    deliver to your selected address. Delivery fees vary based on your geographic location
                                    delivery method shipment method and the size or category of the product you ordered. You
                                    can review delivery fees before placing your order on the product page as well as during
                                    checkout</p>
                                <p class="text-primary">Can I collect my order at a pickup station?</p>
                                <p>In addition to home delivery, you can also choose to pick up your order at one of many
                                    Filly Commerce Pick-up Stations.</p>
                            </div>
                        </div>
                    </div>

                </div> <!-- row.// -->
            </div>
            <div class="  text-white br-1 mt-4" style="background-color: #003A83; padding: 30px 0">
                <div class="d-flex flex-column justify-content-between py-2">
                    <p class="f-14 text-center my-2">Are you new to Filly Commerce?</p>
                    <p class="f-14 text-center my-2">Subscribe to our newsletter to recieve updates and notifications</p>
                    <div class="input-group text-center my-2" style="max-width: 30%">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </span>
                    </div>
                </div>
            </div>

        </div>


        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
