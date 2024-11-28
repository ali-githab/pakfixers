<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PakFixers-Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>
<style>
    .error {
        color: red !important;
        margin: 5px 0px;
    }
</style>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 offset-3 col-12 mt-4 ">
                <div id="auth-left">
                    <h1 class="auth-title fw-bold">Register  <span class="text-success" >Pak</span>Fixers :</h1>
               
                    <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert']=='success') {
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Congratulation!</strong> Signup Successfull.
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }elseif($_GET['alert']=='error'){
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Oops!</strong> Signup Unsuccessfull Try Again.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }elseif ($_GET['alert']=='duplicate') {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed !</strong> Email Already Registered.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>';
                        }
                    }
                    ?>

                    <form action="logics/auth.php" id="signupForm" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
                           
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" id="password">
                           
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="cpassword">
                           
                        </div>
                        <button type="submit" name="signupbtn" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="index.php" class="font-bold">Log in</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize the validation
            $('#signupForm').validate({
                // Define validation rules
                rules: {
                    username: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    cpassword: {
                        required: true,
                        equalTo: "#password"  // This should match the password field by ID
                    }
                },
               
                // Error message styling
                errorClass: 'error',
                submitHandler: function(form) {
                    form.submit(); // Or handle form submission via AJAX
                }
            });
        });
    </script>

</body>

</html>
