<?php
session_start();
include_once 'dbConnection.php';
if(isset($_POST['signIn']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password = $password;
   $sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
   $result=$con->query($sql);
   if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: dash.php"); 
    exit();
   }
   else{
    $error_message = "Incorrect Email or Password";
   }
}
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signIn">
        <h1 class="form-title">Admin</h1>
        <form method="POST" action="admin.php?q=index.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Login" name="signIn">
        </form>
        <?php 
            if(isset($error_message)) {
                echo "<p class='error'>$error_message</p>";
            }
        ?>
    </div>
</body>
</html>
