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
            <div style="margin: auto; max-width: 50%; margin-top: 5%;">
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Full name" aria-label="First name">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Last name">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Subject" aria-label="Last name">
                        </div>
                        <div class="col-md-12">
                            <textarea name="" id="" cols="30" rows="10" class="form-control"> Your message here...</textarea>
                        </div>

                    </div>
                    <button class="btn btn-block btn-primary mt-3 text-right px-3">Submit message</button>
                </form>
            </div>
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
