<!DOCTYPE html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/IWT Assignment II/Home Page/SRC/Styles/styles.css">
</head>

<body>
  
  <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
  ?>
  
    <main>
        <div class="search-container">
          <input type="text" class="search-bar" placeholder="Search for a question. Like: How to return?">
          <button type="submit" class="search-button">
            <i class="fas fa-search"></i>
          </button>
        </div>

        <div class="tools">
                <div class="button-row1">
                  <a class="button" href="/IWT Assignment II/My Profile/SRC/My Profile.php">My Profile</a>
                  <a class="button" href="/IWT Assignment II/Reset Password/SRC/Reset Password.php">Reset Password</a>
                  <a class="button" href="/orders">My Orders</a>
                </div>
                
                <div class="button-row2">
                  <a class="button" href="/returns">My Returns</a>
                  <a class="button" href="/IWT Assignment II/Payment Options/SRC/My Payment Options.php">My Payment Options</a>
                  <a class="button" href="/loyalty-points">Loyalty Points</a>
                </div>
        </div>

        <div class="options">
            <a class="button" href="/Chat Now">Chat Now</a>
            <a class="button" href="/IWT Assignment II/Other Options/SRC/Other Option.php">Other Options</a>
            <a class="button" href="/Call Center">Call Center</a>
        </div>
    </main>

    <?php
      include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
    ?>
</body>
</html>