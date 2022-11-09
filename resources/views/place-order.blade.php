@extends('app')
<style type="text/css">
    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        border-top: #FFFFFF;
        border-right: #FFFFFF;
        border-left: #FFFFFF;
        border-bottom: 3px solid #0D9737;
    }

    .responsive {
        width: 100%;
        height: 200px;
        object-fit: cover;
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
                            <h3 class="text-center">Place your Order</h3>
                            <p class="text-center">We're here to help you get the best deal and place your order.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex justify-content-around flex-wrap">
                    <a href="{{ url('place-order') }}">
                        <h5 style="color: #FE6601;">Place Order</h5>
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
                        <h5>Payments and FAQs</h5>
                    </a>

                </div>
                <hr>
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
