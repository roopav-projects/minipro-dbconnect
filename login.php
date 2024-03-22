<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "student");
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM user_tbl WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >= 1) {
        $_SESSION["myyear"] = $x;
        header("Location:year.php");
        
    } else {
        $_SESSION["error"] = "Invalid User";
        header("Location: error.html");
        exit();
    }
}
?>