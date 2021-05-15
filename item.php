<?php
$db = mysqli_connect('localhost','root','root','shop');

$id = $_GET['id'];

$sql = "SELECT * FROM `Products` WHERE `id`=$id";

$result = mysqli_query($db, $sql);

$zan = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($zan);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
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
   <!-- ______________contentitem___________ -->
	<?php  
		$i=0;
		while ($i<count($zan)) 
		{
	?>
	<div class="itemdiv">
	<div class="divprod">
		<h1><?php echo $zan[$i]["name"] ?></h1>
		<h3><?php echo $zan[$i]["price"] ?> Руб.</h3>
		<img src="products_photos/<?php echo $zan[$i]["img_src"] ?>" width="400">
		<p><?php echo $zan[$i]["description"] ?></p>
	</div>
	</div>
	<?php  
		$i++;
		}
	?>
	<!--________________footer_________________-->
   <div class="footer">
      <?php  
        include("3)footer.php");
      ?>
   </div>
</body>
</html>