<!DOCTYPE html>
<html>
<head>
  <title>My Payment Option</title>
  <link rel="stylesheet" type="text/css" href="/IWT Assignment II/Payment Options/SRC/Styles/styles.css">
</head>
<body>

  <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
  ?>

  <h1>Welcome to My Payment Option Support</h1>
  
  <h2>Contact Information</h2>
  <p>If you need assistance with your payment or have any questions, please feel free to contact us:</p>
  <ul>
    <li>Email: e-life@mypaymentoption.com</li>
    <li>Phone: 056 7755591</li>
  </ul>
  
  <h2>Payment Assistance</h2>
  <p>If you require assistance with a payment-related issue, please provide the following details:</p>
  <form action="/submit_payment_issue" method="post">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required><br>
    
    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required><br>
    
    <label for="order_number">Order Number:</label>
    <input type="text" id="order_number" name="order_number" required><br>
    
    <label for="issue_description">Issue Description:</label>
    <textarea id="issue_description" name="issue_description" required></textarea><br>
    
    <input type="submit" value="Submit">
  </form>

  <?php
  include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
  ?>
  
</body>
</html>