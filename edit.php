<!DOCTYPE html>
<html>
<head>
	<title>HealthPole</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
	<?php 
	include "db.php";
	$id = $_GET["id"];
	$res = "SELECT * FROM gendata where id = $id";
	$result = mysqli_query($conn,$res);
	while($row=mysqli_fetch_array($result))
	{
		// $name_edit = $row['name'];
	 //    $email_edit = $row['email'];
	 //    $city_edit = $row['city'];
	 //    $zipcode_edit = $row['zipcode'];
	 //    $country_edit = $row['country'];
	
	?>
	<section class="sec_pad">
	<div class="container-fluid">
        <p class="txt_head cen">
            Edit Your Data For ID = <?php echo $id;?>
        </p>
		<form method="POST" action="" name="genform" id="genform">

		<input type="text" id="name" name="name_edit" value="<?php echo $row['name']?>" placeholder="Enter Name" required="">
        <input type="email" id="email" name="email_edit" value="<?php echo $row['email']?>" placeholder="Enter Email" required="">
        <input type="text" id="city" name="city_edit" value="<?php echo $row['city']?>" placeholder="Enter City" required="">
        <input type="text" id="zipcode" name="zipcode_edit" value="<?php echo $row['zipcode']?>" placeholder="Enter Zipcode" required="">
        <input type="text" id="country" name="country_edit" value="<?php echo $row['country']?>" placeholder="Enter Country" required="">
			
			<input type="submit" name="update" class="btn btn-success submit_cls" value="Update">
		</form>
	</div>
</section>
<?php
}
if(isset($_POST["update"]))
{
	$name_edit = $_POST["name_edit"];
	$email_edit = $_POST["email_edit"];
	$city_edit = $_POST["city_edit"];
	$zipcode_edit = $_POST["zipcode_edit"];
	$country_edit = $_POST["country_edit"];
	//table = $_POST['formname']
	// $updatedata = "UPDATE gendata SET name = $_POST['name'], email=$_POST['email'], city = $_POST['city'], zipcode = $_POST['zipcode'], country = $_POST['country'] where id = $id";
	$updatedata = "UPDATE `gendata` SET `name`= '$name_edit',`email`= '$email_edit',`city`= '$city_edit',`zipcode`= '$zipcode_edit',`country`= '$country_edit' WHERE `id` = $id";
	mysqli_query($conn,$updatedata);
	?>
	<script type="text/javascript">
		window.location = "senddata.php";
	</script>
	<?php
} 
?>

</body>
</html>
