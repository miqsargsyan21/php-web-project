<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style_admin.css">
<?php  

// echo '<h5>$_POST սուպերգլոբալ</h5>';
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo '<h5>$_FILES սուպերգլոբալ</h5>';
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// echo '<h5>$_GET սուպերգլոբալ</h5>';
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";


// կապ ենք հաստատում բազայի հետ
$conn = mysqli_connect('localhost','root','root','shop');

// Սահմանում ենք բազայի հետ <<խոսելու լեզուն>>
mysqli_set_charset($conn,'utf8');


// ____ԱՊՐԱՆՔՆԵՐԻ ՆԵՐՄՈՒԾՈՒՄ____

if( isset($_POST['ins']) ){
	$name = $_POST['anun'];
	$price = $_POST['gin'];
	$img = $_FILES['nkar']['name'];
	$des = $_POST['nkaragrutyun'];


	$sql = "INSERT INTO `products` (`name`,`price`,`img_src`,`description`)
			VALUES('$name','$price','$img','$des')";

	mysqli_query($conn,$sql);
	echo "<div class='divproddiv'>";
	echo "<h1 class='h1prodh1'>Ապրանքն ավելացված է</h1>";
	echo "</div>";
	move_uploaded_file($_FILES['nkar']['tmp_name'], "../products_photos/".$img);
}


//  ____ԱՊՐԱՆՔՆԵՐԻ ՋՆՋՈՒՄ____

if( isset($_GET['del']) ){

	$id = $_GET['del'];

	$sql = "DELETE FROM `Products`
			WHERE `id` = '$id' ";

	mysqli_query($conn,$sql);
	echo "<div class='divproddiv'>";
	echo "<h1 class='h1prodh1'>Ապրանքն ջնջված է</h1>";
	echo "</div>";
}	






 // ____ԱՊՐԱՆՔՆԵՐԻ ԹԱՐՄԱՑՈՒՄ____
 if( isset($_POST['edit']) ){

 	if ($_FILES['nkar']['name']) {
 		$name = $_POST['anun'];
		$price = $_POST['gin'];
		$img = $_FILES['nkar']['name'];
		$des = $_POST['nkaragrutyun'];
		$id = $_POST['id'];

		$sql = "UPDATE `Products`
				SET `img_src` = '$img',
					`name` = '$name',
					`description` = '$des',
					`price` = $price
				WHERE `id` = $id";
		mysqli_query($conn,$sql);
		move_uploaded_file($_FILES['nkar']['tmp_name'], "../products_photos/".$img);
		echo "<div class='divproddiv'>";
		echo "<h1 class='h1prodh1'>Ապրանքն թարմացված է</h1>";
		echo "</div>";
 	}
 	else
 	{
 		$name = $_POST['anun'];
		$price = $_POST['gin'];
		$des = $_POST['nkaragrutyun'];
		$id = $_POST['id'];

		$sql = "UPDATE `Products`
				SET `name` = '$name',
					`description` = '$des',
					`price` = $price
				WHERE `id` = $id";
		mysqli_query($conn,$sql);
		echo "<div class='divproddiv'>";
		echo "<h1 class='h1prodh1'>Ապրանքն թարմացված է</h1>";
		echo "</div>";
 	}
		
}	







?>

