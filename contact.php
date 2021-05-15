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
   <!--__________________content5______________-->
   <div class="content5">
      <div class="div1">
        <h1>Contact me</h1>
        <ul>
          <li>Adress:Martuni,Azatamartikneri poghots,tun 10</li>
          <li>Tel:097-358-078</li>
          <li>email: miqo11.11@mail.ru</li>
        </ul>
      </div>
        <img src="photos/map.jpg" width="400" class="img">
      <div class="div2">
          <h1>In Social Media</h1>
        <ul>
          <li><a href="https://www.instagram.com/miq_syan/?hl=en">Instagram</a></li>
          <li><a href="https://www.facebook.com/profile.php?id=100004108542161">Facebook</a></li>
          <li><a href="https://ok.ru/profile/579042920968">Ok</a></li>
        </ul>
      </div>    
   </div>
   <!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>