<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">

    	 <p><a href="logout.php">Logout</a></p>
         <p>Hey, Welcome <?php echo $_SESSION['username']; ?>!</p>

        <form action="upload.php" method="post" enctype="multipart/form-data">
        <p> Select image to upload:</p>
          <input type="file" name="fileToUpload" id="fileToUpload">

         <p> <input type="submit" value="Upload Image" name="submit" class="login-button"></p>
        </form>

      
    </div>
</body>
</html>
