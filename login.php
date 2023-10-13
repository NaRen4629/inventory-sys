<!-- ?php
    include 'config/connect.php';
    session_start();
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form
        $myusername = mysqli_real_escape_string($db, $_POST['Employee_ID']);
        $mypassword = mysqli_real_escape_string($db, $_POST['Password']);

        // Use prepared statements to prevent SQL injection
        $stmt = mysqli_prepare($db, "SELECT Employee_ID FROM tbl_employee_information WHERE Employee_ID=? AND Password=?");
        mysqli_stmt_bind_param($stmt, "ss", $myusername, $mypassword);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $count = mysqli_stmt_num_rows($stmt);

        if ($count === 1 || $count === 2 || $count === 3) {
            $_SESSION['login_user'] = $myusername;
            header("location: index.php");
            exit; // Make sure to exit after redirecting
        } else {
            $error = "Username and/or password is incorrect. Please try again";
        }
    }
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"

        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body style="background-color: #015aaa;">
<div class="container-fluid">
    <!-- Outer Row -->
    <div class="row justify-content-center col-md-10 m-auto">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row justify-content-center" style="background-color: #fbf324;">
                        <div class="col-lg-6 text-center">
                            <div class="p-5">
                                <img class="img-fluid" src="logo.png" alt="Logo">
                                <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">Comlab Equipment Laboratory Inventory And Monitoring Management</h1>
                                </div>
                                <form class="user" action="login_action.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" name="Employee_ID" aria-describedby="emailHelp"
                                            placeholder="Employee ID">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="Password" placeholder="Password">
                                    </div>
                                    <!-- <div style="font-size: 11px; color: #cc0000; margin-top: 10px"><?php echo $error; ?></div> -->
                                   <!-- Uncomment this code for error handling -->
<!-- <div style="font-size: 11px; color: #cc0000; margin-top: 10px"><?php echo $error; ?></div> -->

                                    <button type="submit" value="Submit" class="btn btn-primary btn-user btn-block" name="Login">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
</body>
</html>