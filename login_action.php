<?php
session_start();
include('config/connect.php');

$tbl_name = "tbl_user_levels"; // Table name 

$Employee_ID = $_POST['Employee_ID'];
$Password = $_POST['Password'];

$Employee_ID = stripslashes($Employee_ID);
$Password = stripslashes($Password);
$Employee_ID = mysqli_real_escape_string($db, $Employee_ID);
$Password = mysqli_real_escape_string($db, $Password);

$sql = "SELECT * FROM $tbl_name WHERE Employee_ID='$Employee_ID' and Password='$Password'";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_assoc($result);

    $_SESSION["Employee_ID"] = $Employee_ID;
    $_SESSION["Userlevel"] = $rows['Userlevel'];

    if ($_SESSION["Userlevel"] == 'Admin') {
        header('location: index.php');
        exit();
    } else if ($_SESSION["Userlevel"] == 'Faculty') {
        header('location: faculty.php');
        exit();
    }
} else {
    // Handle login failure (e.g., display an error message)
    echo "Login failed. Please check your credentials.";
}
?>
