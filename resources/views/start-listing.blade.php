@extends('app')

@section('content')
    <section class="section-main bg padding-y">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <i class="fa fa-arrow-left"></i>
                    <h5 class="mx-2">Sell an item</h5>
                </div>
                <p>Step 1</p>
            </div>
            <div class="row my-2">
                <div class="col-md-10">
                    <input type="text" class="form-control "
                        placeholder="Enter the name of your item to see suggestions or proceed with listing">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-block btn-primary w-100">Start Listing</button>
                </div>
            </div>
            <div class="row bg-white my-3">
                <div class="col-lg-12 px-3 py-3">
                    <p>Your drafts will appear here</p>
                </div>

            </div>
        </div>
    </section>
@endsection
