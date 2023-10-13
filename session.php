<!-- ?php
include('config/connect.php');
session_start();
$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db, "select Employee_ID from tbl_employee_information where Employee_ID = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['Employee_ID'];

if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    die();
} -->

<?php
include('config/connect.php');
session_start();
$user_check = $_SESSION['Employee_ID'];

$ses_sql = mysqli_query($db, "select Employee_ID from tbl_user_levels where Employee_ID = '$user_check'");
$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_session = $row['Employee_ID'];

if (!isset($_SESSION['Employee_ID'])) {
    header("location: login.php");
    die();
}
?>

