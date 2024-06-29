<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="/IWT Assignment II/Login/SRC/Styles/styles.css">
</head>
<body>

  <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
  ?>
  
  <div class="container">
    <h2>Login as a,</h2>

    <div class="login-options">
      <div class="login-option">
        <input type="radio" id="customer" name="login_option" value="customer">
        <label for="customer">Customer</label>
      </div>
      
      <div class="login-option">
        <input type="radio" id="seller" name="login_option" value="seller">
        <label for="seller">Seller</label>
      </div>
    </div>

    <form>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      
      <div class="options">
        <div class="remember-me">
          <input type="checkbox" id="remember" name="remember">
          <label for="remember" class="remember-label">
            <h5>Remember me</h5>
          </label>
        </div>
        
        <div class="forgot-pwd">
          <a href="#" class="forgot-password"><h5>Forgot Password?</h5></a>
        </div>
      </div>

      <input type="submit" value="Log In" class="btn">
    </form>
    <div class="divider"></div>
    <div class="signup-link">
      Don't have an account? <a href="#">Sign Up</a>
    </div>
  </div>

  <?php
      include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
  ?>

</body>
</html>
