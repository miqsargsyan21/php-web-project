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
   <!--__________________content7______________-->
   <div class="contentshop">
      <?php  
        $db = mysqli_connect('localhost','root','root','shop');

        $sql = "SELECT * FROM `Products`";

        $result = mysqli_query($db, $sql);

        $zan = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // echo "<pre>";
        // print_r($zan);
        // echo "</pre>";
      ?>
      <?php  
        $i=0;
        while($i<count($zan))
        {
      ?>

        <div width="300px" height="300px">
          <h6><a href="item.php?id=<?php echo $zan[$i]["id"] ?>">
          <?php echo $zan[$i]["name"] ?> 
          </a></h6> <br>
          <span><?php echo $zan[$i]["price"] ?> Руб.</span>
          <img src="products_photos/<?php echo $zan[$i]["img_src"] ?>">
        </div>

      <?php  
          $i++;
        }
      ?>
   </div>
   <!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>