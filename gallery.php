<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>
<body>
   <!-- ______________header___________ -->
    <div class="header">
      <?php  
        include("1)header.php");
      ?>
    </div>
   <!--____________________menu____________-->
   <div class="menu">
      <?php  
        include("2)menu.php");
      ?>
   </div>
   <!--__________________content6______________-->
   <div class="content6">
     <p>Mercedes...</p>
     <img src="photos/Mercedes.jpg" width="500" height="400">
     <img src="photos/Mercedes1.jpg" width="500" height="400">
     <img src="photos/Mercedes2.jpg" width="500" height="400">
     <img src="photos/Mercedes3.jpg" width="500" height="400">
   </div>
   <!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>