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
                     width:100%;  background-size: cover; ">
                    <div style="width: 100%; background-color: rgba(0, 0, 0, 0.5);">
                        <div style="max-width: 60%; margin:auto; padding: 10% 0; color:white;">
                            <h3 class="text-center">Payments and FAQs</h3>
                            <p class="text-center">Get all the answers to the most frequently asked questions (FAQs)
                                regarding
                                some of our popular
                                categories which include electronics, mobile phones, computers, fashion, beauty products,
                                and
                                much
                                more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-around flex-wrap">
                    <a href="{{ url('place-order') }}">
                        <h5>Place Order</h5>
                    </a>

                    <a href="{{ url('track-order') }}">
                        <h5>Track Order</h5>
                    </a>

                    <a href="{{ url('order-cancellation') }}">
                        <h5>Order Cancellation</h5>
                    </a>

                    <a href="{{ url('returns-refunds') }}">
                        <h5>Returns and Refunds</h5>
                    </a>

                    <a href="{{ url('payments-faqs') }}">
                        <h5 style="color: #FE6601;">Payments and FAQs</h5>
                    </a>

                </div>
                <hr>
                <div class="d-flex flex-column  mt-5 mb-5" style="max-width: 50%;  margin: auto;">
                    <h5 class="text-center">Need more information about Filly Commerce?</h5>
                    <input type="text" name="" id="" placeholder="Search" class="form-control my-3">
                    <div>
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

            </div> <!-- row.// -->

            <div class="text-white br-1 mt-4" style="background-color: #003A83; padding: 30px 0">
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
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
