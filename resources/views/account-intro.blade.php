<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/faviccon.png" type="image/png" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/intlTelInput.css">
    <title>Filly Commerce</title>
    <style>
        .w-100 {
            width: 100% !important;
        }
    </style>
</head>

<body class="bg-white">
    <!--wrapper-->
    <div class="wrapper mt-5">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <h2 class="text-center">Some things to do</h2>
                        <div class="mx-auto" style="width: 60%">
                            <p>To properly setup you account here is a list
                                of actions to perform.</p>
                            <p class="fw-bolder">1. Verify your number</p>
                            <hr>
                            <p>We will need you to provide a business phone
                                to confirm you really own the account.</p>
                            <p class="fw-bolder">2. Provide a payment account</p>
                            <hr>
                            <p>After verifying your business number you
                                will then provide a means of payment for
                                receiving funds.</p>
                            <p class="fw-bolder">3. Add you financial information</p>
                            <hr>
                            <p>You’ll need to add a card to your account
                                fo the purpose of payments.</p>
                            <p class="fw-bolder">4. Submit your registration information</p>
                            <hr>
                            <p>All the information you provide will be verified
                                and your account will be fully setup.</p>
                            <button class="btn btn-block btn-primary my-4 bw-100">Continue Setup</button>
                            <p class="small-text px-4">By signing up you agree to our <a href="#">Terms</a>, <a
                                    href="#">Policy</a>
                                and <a href="#">User agreement</a></p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/intlTelInput.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "asset/js/utils.js",
        });

        //otp validation
        let digitValidate = function(ele) {
            console.log(ele.value);
            ele.value = ele.value.replace(/[^0-9]/g, '');
        }

        let tabChange = function(val) {
            let ele = document.querySelectorAll('input');
            if (ele[val - 1].value != '') {
                ele[val].focus()
            } else if (ele[val - 1].value == '') {
                ele[val - 2].focus()
            }
        }
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
