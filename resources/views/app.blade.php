<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filly Commerce</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/intlTelInput.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

</head>

<body>
    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="mx-2 my-2">
                        <img src={{ url('assets/images/logo.png') }} alt="" width="150">
                    </div>
                    <div class="mx-2 my-2">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class=" d-flex flex-wrap mx-2 my-2">
                        <div class="widgets-wrap float-md-end">
                            <div class="widget-header  me-3">
                                <a href="#"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASdJREFUSEvdlc9RQjEQxn+vArQDqUCtgBLUCoQjcpASsAK5qEe1AqEDS4AKsAOgAp2PMcyOJGTz5r2LOSab/f7sblLR8qpazs//Avhu0K4FcKl81qImAbbAyV+AIGAK3APvQL9Q1Rh4tHdjRT4DVsAGOC0E+AR6wAB4SynQvjw8t4EOIFmy/o0TMRFMtmmQOgeuHckVorgPYAlchDupOYiyyQDJklvgAZjkAHQ+A66c7G2Y2lMW79axSVYHvRYAqDXVgXv2OQCdq1AdoAt8FYDtQ3NvUfBVdt20AaCZkJ9S4VkHhHMKQvupbTVAuVULIJf06LlHgRI8AUPgBRiZjKl9d5FDoH1pUy9wlKxXwbNRcGcUpPaLFYSZif0ZIpn8S7wKahe6dYAfb7QvGccVSxEAAAAASUVORK5CYII=" /></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>
                            <div class="widget-header icontext">
                                <a href="#"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATNJREFUSEvtldFRAkEMhj860A6kArECtQNKwAqECoQK0AqkBKgAqACtRDuQ+Z2EkWVzu3Bzb+Zlb2ey/5dks7keHVuvY33OAYyAuQU0ARY1wdUAroBnYAzoW/YNvAJv9h2ySgCP2oVTIYGegGVEaAJI/N0Orizije0fgClwb3tBsiWLADfAzkoSHjbIi5WpnytXBFB0OqjIh4XLVFbKZGbAI/cI8AHcAo+AlyXiqFxrQGfuUqcI8GOOpSZwvdD/H3BRifSovi68g+u0VdM7kLg6YgB82lozcrzrtKrz9MJ/LQW4o8TVfgfHAkWBqZ3V2kftmgK83U5SrUgjW9oIUKHX6HLQTQH+7NsAtlbe7B20Ec6erR0FPvz+imSHW+0sykUjiP4RMs1+7YtWm0FRKHLoHLAHNsk6GUbrB0oAAAAASUVORK5CYII=" /></a>

                            </div>
                            <div class="widget-header  mx-3  dropdown">
                                <a href="#" class="nav-item dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUBJREFUSEvVlG1RQzEQRU8VAA4qgSoAHBQFgIOiAFAADhgc1AFFAUioA1oF7Vxmlwl5SfZNIT/Ir3aSt+fu3Y8Jnc+kc3zGAs6BO+DUBH0AD8AqEjgGcG/BS7EE0X31RAApfwW2wAJYAhvgGngCjoCLViYRQBacAZcWPFUqyDPwBkhI8UQAqZXK0rtj4NMyOukJkH2CHZRBd4u8yF5Y+e2/H035r4qstLu2qfuqTARKB03//2TQomFt3rfaVJ1xBcxNed4pqoVWhobvxWozgNUAskRDNB0pfw3clCwrAbxzFFtdI6+lVIrTo4xUE91r2nUGHZUD9NG7KQ8XWULzTlMms1RMDtBCU38390vFNh/KW1uEX89ygD9qDk8F4Nb+EJcDfLlpeeWeR/UuLr8csLMo0ZatwQbfHxooyub7/v8D9gzNRRmX6M9FAAAAAElFTkSuQmCC" /></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('authentication-signin') }}">Sign in</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('authentication-signup') }}"> Register</a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->



        <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Supermarket</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Partnership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Baby &amp Toys</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fitness sport</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clothing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Furnitures</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Foods and Drink</a></li>
                                <li><a class="dropdown-item" href="#">Home interior</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Home interior 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- collapse .// -->
            </div> <!-- container .// -->
        </nav>

    </header> <!-- section-header.// -->


    <div class="main">
        @yield('content')
    </div>



    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top bg">
        <div class="container">
            <section class="footer-top  padding-y">
                <div class="row">
                    <aside class="col-md col-6">
                        <h6 class="title">Brands</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Adidas</a></li>
                            <li> <a href="#">Puma</a></li>
                            <li> <a href="#">Reebok</a></li>
                            <li> <a href="#">Nike</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Find a store</a></li>
                            <li> <a href="#">Rules and terms</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Order status</a></li>
                            <li> <a href="#">Shipping info</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Account</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section> <!-- footer-top.// -->

            <section class="footer-bottom row">
                <div class="col-md-2">
                    <p class="text-muted"> 2022 Filly Commerce </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">info@com</span>
                    <span class="px-2">+000-000-0000</span>
                    <span class="px-2">Street name 123, ABC</span>
                </div>
                <div class="col-md-2 text-md-end text-muted">
                    <i class="fab fa-lg fa-cc-visa"></i>
                    <i class="fab fa-lg fa-cc-paypal"></i>
                    <i class="fab fa-lg fa-cc-mastercard"></i>
                </div>
            </section>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            $("#list img").click(function() {
                var src = $(this).attr("src");
                $("#image1").attr("src", src);
            });
        });

        $("#tile-1 .nav-tabs a").click(function() {
            var position = $(this).parent().position();
            var width = $(this).parent().width();
            $("#tile-1 .slider").css({
                "left": +position.left,
                "width": width
            });
        });
        var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width();
        var actPosition = $("#tile-1 .nav-tabs .active").position();
        $("#tile-1 .slider").css({
            "left": +actPosition.left,
            "width": actWidth
        });
    </script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "asset/js/utils.js",
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <script>
        function Edit() {
            document.getElementById('account').style.display = 'none';
            document.getElementById('profile').style.display = 'block'
        }

        function EditAddress() {
            document.getElementById('account').style.display = 'none';
            document.getElementById('address').style.display = 'block'
        }

        function orderDetails() {
            document.getElementById('order').classList.add('d-none');
            document.getElementById('orderDetails').classList.remove('d-none');
        }

        function returnDetails() {
            document.getElementById('return').classList.add('d-none');
            document.getElementById('returnDetails').classList.remove('d-none');
        }

        document.getElementById("selling").addEventListener("click", showMore);

        function showMore() {
            document.getElementById('showMore').classList.remove('d-none');
        }
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        function openTab(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202211030101/show_ads_impl_fy2021.js?bust=31070723"
        id="google_shimpl"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>

</body>

</html>
