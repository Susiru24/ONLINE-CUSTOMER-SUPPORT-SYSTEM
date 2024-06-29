<!DOCTYPE html>
<html>
  <head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="/IWT Assignment II/My Profile/SRC/Styles/styles.css">
  </head>

<body>

  <?php
    include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Header/Header.php';
  ?>

<div class="container">
  <form>
    <fieldset>
     <legend>Edit Profile</legend>  
     <div class="top-section">
   
       <div class="user-data">
         <img id="profile-picture" class="profile-image" src="/IWT Assignment II/My Profile/SRC/Images/profile_picture.png" alt="Profile Picture"><br><br>
       </div>
   
       <div class="user-data">
         <label for="fname">User Name</label><br>
         <input type="text" id="fname" name="fname"><br><br>
         
         <label for="birthday">Date Of Birth</label><br>
         <input type="date" id="birthday" name="birthday"><br><br>
   
         <label for="Gender">Gender</label><br>
         <select name="Gender" id="Gender">
           <option value="" disabled selected>Select</option>
           <option value="Male">Male</option>
           <option value="Female">Female</option>
         </select><br><br>
       </div>
   
       <div class="user-data">
         <label for="email">Email</label><br>
         <input type="email" id="email" name="email" required><br><br>
   
         <label for="mobile">Mobile Number:</label><br>
         <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" maxlength="10" required><br><br>
   
         <label for="address">Address</label><br>
         <textarea rows="4" cols="50" name="address"></textarea><br><br>

         <input type="submit" value="Submit">
       </div>
     </div>
     
    </fieldset>
   </form>
</div>

<?php
include 'C:/Users/user/OneDrive/Documents/SLIIT/2nd Semester/Group Projects/IWT Group Project/IWT Group Projects/IWT Assignment II/Footer/Footer.php';
?>

</body>
</html>
