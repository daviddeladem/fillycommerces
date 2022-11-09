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
        height: auto;
    }

    .circle {
        border-radius: 50%;
        width: 34px;
        height: 34px;
        padding: 6px 7px 10px 7px;
        background: #003A83;
        color: #fff;
        text-align: center;
    }
</style>
@section('content')
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container">
            <h2 class="my-4 text-center">Contact Us</h2>
            <div class="row my-3">
                <div>
                    <img src="https://www.iai.co.il/drupal/sites/default/files/2022-02/Contact%20us.jpg" alt=""
                        height="300" class="responsive">
                </div>
            </div>
            <div class="text-center my-5" style="max-width: 60%">
                <p class="text-center">We are available Monday to Sunday</p>
                <p class="text-center mb-3">from 8am to 8pm</p>
                <h5 class="text-center">+2349023894567</h5>

                <div class="d-flex justify-content-around my-3" style="margin: auto; max-width: 50%; margin-top: 5%;">
                    <button type="button" class="btn btn-secondary">CALL US</button>
                    <button type="button" class="btn btn-secondary">LIVE CHAT</button>
                </div>
                <p class="text-center my-3">Need more information about Filly Commerce?</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search ......"
                        aria-label="Recipient's username">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-around">
                <div class="d-flex flex-column align-items-center ">
                    <h5 class="circle">01</h5>
                    <p>Place Order</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="circle">02</h5>
                    <p>Track Order</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="circle">03</h5>
                    <p>Order Cancellation</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="circle">04</h5>
                    <p>Returns and Refunds</p>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <h5 class="circle">05</h5>
                    <p>Payments and FAQs</p>
                </div>
            </div>
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
