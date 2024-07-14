<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/bg.css">
</head>

<body class="bg-gradient-primary" style="background: url(&quot;assets/img/IMG_3504-scaled.jpg&quot;) center / cover no-repeat, var(--bs-border-color-translucent);color: var(--bs-border-color-translucent);border-color: transparent;">
    <div class="bg" style="background: var(--bs-border-color-translucent);"></div>
    <div class="bg bg3"></div>
    <div class="bg bg2"></div>
    <div class="container">
        <div class="row justify-content-center" style="padding-top: 0px;margin-top: 66px;height: 433.4px;">
            <div class="col-lg-6" style="background: var(--bs-gray-100);">
                <div class="p-5">
                    <div class="text-center">
                        <h4 class="text-dark mb-4">Register as a Teacher</h4>
                    </div>
                    <form class="user" id="form-login" method="post">
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="txt-firstname" placeholder="First Name" name="first_name"></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="txt-lastname" placeholder="Last Name" name="last_name"></div>
                        </div>
                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="txt-email" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="txt-username" placeholder="Username" name="username"></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="txt-password" placeholder="Password" name="password"></div>
                        </div><button class="btn btn-primary d-block btn-user w-100" id="btn-sesion" type="submit">Register Account</button>
                        <hr>
                        <hr>
                    </form>
                    <div class="text-center"></div>
                    <div class="text-center"><a class="small" href="teachers_login.php">Back to Login</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/scripts/jquery-3.7.1.js"></script>
    <script >
        $(document).ready(function(){
            $('#form-login').submit (function(e){
                //e.preventDefault();
                var Firstname = $("#txt-firstname").val();
                var Lastname = $("#txt-lastname").val();
                var Email = $("#txt-email").val();
                var Username = $("#txt-username").val();
                var Password = $("#txt-password").val();

                alert (Firstname + Lastname + Username + Email + Password);


                $.post ("php_process/auth_register.php", {
                    name: Firstname,
                    lastname: Lastname,
                    user: Username,
                    email: Email,
                    password: Password,

                }, function(d, s){
                    alert  ('Data' + d + 'Status' + s);
                    
                });

                


            });
        });
        
    </script>

</body>

</html>