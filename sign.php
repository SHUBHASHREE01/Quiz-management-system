
<?php
include_once 'dbConnection.php';
ob_start();
session_start();

$fname = $_POST['name'];
$lname = $_POST['lName'];
$name = $fname . ' ' . $lname;
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$college = $_POST['college'];
$mob = $_POST['mob'];

$name = ucwords(strtolower($name));
$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$sql = "INSERT INTO user (name, email, password,gender,college,mob) VALUES ('$name', '$email', '$password','$gender','$college',$mob)";
$q3 = mysqli_query($con, $sql);

if($q3) {
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $name;
    $_SESSION["gender"] = $gender;
    $_SESSION["college"] = $college;
    $_SESSION["mob"]= $mob;
    header("location:homepage2.php");
} else {
    echo "Error: " . mysqli_error($con);
}

ob_end_flush();
?>