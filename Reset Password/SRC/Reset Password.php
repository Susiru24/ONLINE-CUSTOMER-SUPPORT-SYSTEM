<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" type="text/css" href="/IWT Assignment II/Reset Password/SRC/Styles/styles.css">
    </head>
<body>

    <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
    ?>

<div class="main">
    <h2>You are a,</h2>

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
</div>

<form>
    <div class="form-section">
        <fieldset>
            <legend>Email Verification</legend>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"><br><br>
            <label for="verification-code">Verification Code</label><br>
            <input type="text" id="verification-code" name="verification-code" maxlength="6">
            <button type="submit">Send</button>
            <br><br><br><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </div>

    <div class="form-middle-section">
        
    </div>

    <div class="form-section">
        <fieldset>
            <legend>Reset Password</legend>
            <label for="password">Enter Old Password</label><br>
            <input type="password" id="Old-Password" name="Old-Password"><br><br>
            <label for="password">Enter A New Password</label><br>
            <input type="password" id="New-Password" name="New-Password"><br><br>
            <label for="verification-code">Confirm Password</label><br>
            <input type="password" id="Confirm-Password" name="Confirm-Password"><br><br>
            <input type="submit" value="Submit">
        </fieldset>
    </div>
</form>

<?php
include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
?>

</body>
</html>