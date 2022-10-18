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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>

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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
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


    </header> <!-- section-header.// -->


    <div class="main">
        @yield('content')
    </div>



    <!-- ========================= FOOTER ========================= -->
    <footer class="fixed-bottom bg-white pt-3">
        <div class="container">
            <p class="text-center mb-3">Copyright © 2022 Filly Commerce. All Rights Reserved</p>
        </div><!-- //container -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>

    <!-- ========================= FOOTER END // ========================= -->
    <script>
        $(document).ready(function() {
            $("#exampleModal").modal();
        });
    </script>
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
    <script>
        function openedTab(evt, cityName) {
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


        document.getElementById("defaultOpened").click();
    </script>
    <script>
        function open(x) {
            $(x).modal('show');
        }
    </script>

</body>

</html>
