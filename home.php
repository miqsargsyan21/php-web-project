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
   <!--__________________content1______________-->
   <div class="content1">
      <div class="div">
        <img src="photos/css.jpg" width="500px" height="300px">
      </div>
      <h3>Կայքի մասին</h3>
      <p>Բարեւ ձեզ սա իմ առաջին կայքն է:Այստեղ ես ձեզ ցույց կտամ թե ինչ ենք մենք սովորել Թումո ստեղծարար տեխնոլոգիական կենտրոնում Կայքերի մշակում 1-ի ժամանակ:Նաեւ կտամ տեղեկություններ իմ մասին:</p>
   </div>
   <!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>