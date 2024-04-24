<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student_Log</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/VentasPro-Login-2.css">

    
    
</head>

<body>
    <div id="main">
        <div class="text-center" id="info">
            <h3 class="text-center">Register</h3>
            <p class="text-center">Register as teacher</p>
            <form class="text-start" id="form-login" method="post">
                <div class="mb-3"><label class="form-label" id="lbl-usuario" for="txt-username">First Name</label><input class="form-control" type="text" id="txt-firstname"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password" for="txt-password">Last Name</label><input class="form-control" type="text" id="txt-lastname"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password-1" for="txt-password">Username</label><input class="form-control" type="text" id="txt-username"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password-2" for="txt-password">Email</label><input class="form-control" type="email" id="txt-email"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password-3" for="txt-password">Password</label><input class="form-control" type="password" id="txt-password"></div>
                <button class="btn btn-primary" id="btn-sesion" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Register</button>
            </form><a href="teachers_login.php">Back to Login</a>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/scripts/jquery-3.7.1.js"></script>
    <script >
        $(document).ready(function(){
            $('#form-login').submit (function(e){
                //e.preventDefault();
                var Firstname = $("#txt-firstname").val();
                var Lastname = $("#txt-lastname").val();
                var Username = $("#txt-username").val();
                var Email = $("#txt-email").val();
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