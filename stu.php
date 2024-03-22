<?php
session_start();
$x=$_POST['regno'];
$y=$_POST['year'];
$con = mysqli_connect("localhost", "root", "", "student");
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regno = mysqli_real_escape_string($con, $x);
    $year = mysqli_real_escape_string($con, $y);


    $sql = "SELECT * FROM stu WHERE regno='$regno' AND year='$year'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >= 1) {
    
        $_SESSION["myyear"] = $year;
        if ($year == 'I YEAR') {
            header("Location: uploadimg/view1.php");
            exit();
        } elseif ($year  == 'II YEAR') {
            header("Location: uploadimg/view2.php");
            exit();
        } elseif ($year == 'III YEAR') {
            header("Location: uploadimg/view3.php");
            exit();
        } else {
            header("Location: uploadimg/view4.php");
            exit();
        }
    }else {
        $_SESSION["error"] = "Invalid User";
        header("Location: error.html");
        exit();
    }
}
?>