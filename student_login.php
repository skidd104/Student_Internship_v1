<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Student_Log</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/VentasPro-Login.css">
</head>

<body>
    <div id="main">
        <div class="text-center" id="info">
            <h3 class="text-center">Student</h3>
            <p class="text-center">Log in as a Student</p>
            <form class="text-start" id="form-login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="mb-3"><label class="form-label" id="lbl-usuario" for="txt-usuario">Username</label><input class="form-control" type="text" id="txt-username" name="studuser"></div>
                <div class="mb-3"><label class="form-label" id="lbl-password" for="txt-password">Password</label><input class="form-control" type="password" id="txt-password" name="studpass"></div><button class="btn btn-primary" id="btn-sesion" type="submit" style="--bs-primary: #256db4;--bs-primary-rgb: 37,109,180;background: #256db4;">Log in</button>
            </form>
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><a href="index.php">Back to Home</a></div>
                    <div class="col-md-6"><a href="teachers_login.php">Log in as Teacher</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    require_once ("connection/connect.php");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['studuser'];
        $password = $_POST['studpass'];

        $stmt = $conn->prepare("SELECT username, password FROM intern_students WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $stmt->bind_result($db_username, $db_password);
        $stmt->fetch();

        if ($db_username == $username && $password == $db_password){
            session_start();
            $_SESSION["studuser"] = $db_username;

            header ("Location: php_source/views/studentDashboard/stud_main.php");
        } else {
            echo "Incorrect username or password";

        }

        $stmt->close();

    }
?>