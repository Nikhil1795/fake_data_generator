<?php 
include "db.php";
include "senddata.php";
$id = $_GET["id"];
$query = "DELETE FROM `gendata` WHERE id = $id";
mysqli_query($conn,$query);

?>
<script type="text/javascript">
	window.location = "senddata.php";
</script>
