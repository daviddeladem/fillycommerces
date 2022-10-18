@extends('app')

@section('content')
    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-main bg padding-y">
        <div class="container">

            <div class="row">
                <div class="col-md-5 my-2 ">
                    <img src="https://media.istockphoto.com/photos/white-sneaker-on-a-blue-gradient-background-mens-fashion-sport-shoe-picture-id1303978937?k=20&m=1303978937&s=612x612&w=0&h=ipieQsE8SrbQFtnZBKbDOK65HZfKF764FuojDll90CQ="
                        class="w-100 rounded" id="image1" alt="">
                    <div class="img" id="list">
                        <img src="https://cdn.sanity.io/images/c1chvb1i/production/3d6cba6bbb179696ad5b1686211b02318e40347a-700x468.jpg"
                            class="w-10 rounded mx-1 my-4" alt="">
                        <img src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                            class="w-10 rounded mx-1 my-4" alt="">
                        <img src="https://cdn.sanity.io/images/c1chvb1i/production/3d6cba6bbb179696ad5b1686211b02318e40347a-700x468.jpg"
                            class="w-10 rounded mx-1 my-4" alt="">
                    </div>
                </div> <!-- col.// -->
                <div class="col-md-7 my-2">
                    <h1>Airmax BA Lift</h1>
                    <p>Free 2 days shipping | 1 year warranty</p>
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-o checked"></span>
                        <span class="fa fa-star-o checked"></span>
                    </div>
                    <h1>$400</h1>
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="return-icon">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" />
                        </svg> Free Return</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="return-icon">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" />
                        </svg> Chat with us 24 hours</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="return-icon">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" />
                        </svg> Comes with a Package</p>
                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="return-icon">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z" />
                        </svg> Comes with a Package</p>
                    <div class="avatar-group ">
                        <div class="avatar">
                            <img src="https://minimaltoolkit.com/images/randomdata/male/13.jpg" class="avatar-img">
                        </div>
                        <div class="avatar">
                            <img src="https://minimaltoolkit.com/images/randomdata/female/61.jpg" class="avatar-img">
                        </div>
                        <div class="avatar">
                            <img src="https://minimaltoolkit.com/images/randomdata/male/61.jpg" class="avatar-img">
                        </div>
                        <div class="avatar">
                            <img src="https://minimaltoolkit.com/images/randomdata/male/13.jpg" class="avatar-img">
                        </div>
                        <div class="avatar">
                            <img src="https://minimaltoolkit.com/images/randomdata/female/61.jpg" class="avatar-img">
                        </div>
                        <p class="px-3">1,241 Sold in the last 24 hours</p>
                    </div>
                    <div class="buy-buttons my-4">
                        <button class="btn btn-buy px-3">Buy Now</button>
                        <button class="btn btn-outline-primary px-3 mx-3">Add to cart</button>
                    </div>

                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container">
            <!-- Start Tabs HTML -->
            <div class="tabs">

                <input type="radio" id="tab1" name="tab-control" checked>
                <input type="radio" id="tab2" name="tab-control">
                <input type="radio" id="tab3" name="tab-control">
                <input type="radio" id="tab4" name="tab-control">
                <ul class="flex flex-wrap">
                    <li title="About"><label for="tab1" role="button"><span>About</span></label></li>
                    <li title="Shipping"><label for="tab2" role="button"><span>Shipping</span></label></li>
                    <li title="Reviews"><label for="tab3" role="button"><span>Reviews</span></label></li>
                    <li title="Returns"><label for="tab4" role="button"><span>Returns</span></label></li>
                </ul>

                <div class="slider">
                    <div class="indicator"></div>
                </div>
                <div class="content">
                    <section>
                        <div class="row">
                            <div class="col">
                                <img src="https://media.istockphoto.com/photos/white-sneaker-on-a-blue-gradient-background-mens-fashion-sport-shoe-picture-id1303978937?k=20&m=1303978937&s=612x612&w=0&h=ipieQsE8SrbQFtnZBKbDOK65HZfKF764FuojDll90CQ="
                                    alt="" class="br-3" height="300">
                            </div>
                            <div class="col py-4">
                                <div>15 cm (6.1-inch) Super Retina XDR display
                                    Cinematic mode adds shallow depth of field and
                                    shifts focus automatically in your videos </div>
                                <div>Advanced dual-camera system with 12MP Wide and
                                    Ultra Wide cameras; Photographic Styles, Smart HDR 4, Night mode, 4K Dolby Vision HDR
                                    recording </div>
                                <div>12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording</div>
                                <div>A15
                                    Bionic chip for lightning-fast performance </div>
                                <div>Up to 19 hours of video playback </div>
                                <div>Durable design
                                    with Ceramic Shield</div>
                                <div>Industry-leading IP68 water resistance</div>
                                <div>iOS 15 packs new features to do
                                    more with iPhone than ever before </div>
                                <div>Supports MagSafe accessories for easy attachment and
                                    faster wireless charging</div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2>Shipping</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quas adipisci a accusantium eius
                            ut voluptatibus ad impedit nulla, ipsa qui. Quasi temporibus eos commodi aliquid impedit amet,
                            similique nulla.</p>
                    </section>
                    <section>
                        <h2>Shipping</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nemo ducimus eius, magnam error
                            quisquam sunt voluptate labore, excepturi numquam! Alias libero optio sed harum debitis! Veniam,
                            quia in eum.</p>
                    </section>
                    <section>
                        <h2>Returns</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque
                            repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus
                            molestiae enim deserunt necessitatibus eaque quidem incidunt.</p>
                    </section>
                </div>
            </div>
            <!-- End Tabs HTML -->
        </div>
    </section>
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name b-radius padding-y-sm">
        <div class="container">
            <div class="samples">
                <h4 class="my-3">Similar items</h4>
                <div class="flex flex-wrap flex-between">
                    <div class="col-md-2 mx-0-5">
                        <div href="#" class=" px-2 py-2 br-2">
                            <a href="#" class="my-2"> <img
                                    src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                                    class="w-100 br-1 mb-4">
                            </a>
                            <div class="info-wrap">
                                <a href="#" class="title">
                                    <p>Lipstick Maa</p>
                                </a>
                                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-2 mx-0-5">
                        <div href="#" class="px-2 py-2 br-2">
                            <a href="#" class="my-2"> <img
                                    src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                                    class="w-100 br-1 mb-4">
                            </a>
                            <div class="info-wrap">
                                <a href="#" class="title">
                                    <p>Coffee Mate</p>
                                </a>
                                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-2 mx-0-5">
                        <div href="#" class="px-2 py-2 br-2">
                            <a href="#" class="my-2"> <img
                                    src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                                    class="w-100 br-1 mb-4">
                            </a>
                            <div class="info-wrap">
                                <a href="#" class="title">
                                    <p>Nike Sneaker</p>
                                </a>
                                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-2 mx-0-5">
                        <div href="#" class=" px-2 py-2 br-2">
                            <a href="#" class="my-2"> <img
                                    src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                                    class="w-100 br-1 mb-4">
                            </a>
                            <div class="info-wrap">
                                <a href="#" class="title">
                                    <p>Lipstick Maa</p>
                                </a>
                                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                    <div class="col-md-2 mx-0-5">
                        <div href="#" class="px-2 py-2 br-2">
                            <a href="#" class="my-2"> <img
                                    src="https://houseofheat.co/app/uploads/2020/01/nike-air-max-97-white-ice-blue-flame-ct4526-100-release-date-info.jpg"
                                    class="w-100 br-1 mb-4">
                            </a>
                            <div class="info-wrap">
                                <a href="#" class="title">
                                    <p>Coffee Mate</p>
                                </a>
                                <div class="price mt-1 ">$179.00</div> <!-- price-wrap.// -->
                            </div>


                        </div>
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div>
        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
@endsection
