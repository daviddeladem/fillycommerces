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

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="p-4 rounded">
                                    <div class="mb-4 text-center">
                                        <img src="assets/images/logo.png" width="100" alt="" />
                                    </div>

                                    <div class="form-body">
                                        <div class="col-md-12 text-center mb-3">
                                            <h2>Verify your email</h2>
                                            <p>We've sent a verification code to ben@filly.com</p>
                                        </div>
                                        <form class="row g-3" id="personal">

                                            <div class="col-12">
                                                <div class="form-group text-center">
                                                    <input type="text" name="otp1" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                    <input type="text" name="otp2" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                    <input type="text" name="otp3" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                    <input type="text" name="otp4" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                    <input type="text" name="otp5" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                    <input type="text" name="otp6" oninput='digitValidate(this)'
                                                        onkeyup='tabChange(1)' class="otp" min="0"
                                                        max="9" maxlength=1 required>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Create
                                                        Account</button>
                                                    <p class="text-center my-3">Didn't receive code? Resend another one
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
