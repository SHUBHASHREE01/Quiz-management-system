<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="sign.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="name" id="name" placeholder="name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
                <i class="fas fa-user"></i>
                <select name="gender" id="gender" required>
                    <option value=" disabled selected hidden"></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select>
                <label for="gender">Gender</label>
            </div>
            <div class="input-group">
                <i class="fas fa-building"></i>
                <select name="college" id="college" required>
                    <option value=" disabled selected hidden"></option>
                    <option value="krupanidhi degree college">krupanidhi degree college</option>
                    <option value="pes university">pes university</option>
                    <option value="crist university">crist university</option>
                </select>
                <label for="college">college</label>
            </div>
            <div class="input-group">
            <i class="fas fa-mobile-alt"></i>
            <input type="tel" name="mob" id="mob" placeholder="Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
            <label for="mob">Mobile Number</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            <p id="passwordHelp" class="form-text"></p>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
             </p>
     
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="login.php">
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
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">

        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton" class="sub" value="sign up" >Sign Up</button>
        </div>
        <!-- Forgot Password Link -->
        <div class="forgot-password-link">
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
      </div>
      <a href="adminl.php" class="admin-button"> 
        <i class="fas fa-user-shield"></i> Admin
    </a>
      <script src="script.js"></script>
</body>
</html>
