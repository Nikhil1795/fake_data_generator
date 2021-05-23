<!DOCTYPE html>
<html>
<head>
	<title>MyWebsite</title>
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
?>
<section>
    <div class="container-fluid pd0">
        <div class="bg_img">
            
        </div>
    </div>
</section>
<section class="sec_pad">
    <div class="container">
        <div class="cen">
            <p class="txt_head">
                Fake Data Generator Form
            </p>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 sec_pad">
                    <ul class="txt_para">
                       <li>
                           Generate the fake data by clicking on the generate button.
                       </li>
                       <li>
                           Store the data to the database by submiting the form.
                       </li>
                       <li>
                           Edit and Delete the data.
                       </li>
                       <li>
                           View the data in the tabular format. 
                       </li>
                    </ul>
                </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
             
                <form method="POST" action="senddata.php" name="genform" id="genform">

                <input type="text" id="name" name="name" placeholder="Enter Name" required="">
                <input type="email" id="email" name="email" placeholder="Enter Email" required="">
                <input type="text" id="city" name="city" placeholder="Enter City" required="">
                <input type="text" id="zipcode" name="zipcode" placeholder="Enter Zipcode" required="">
                <input type="text" id="country" name="country" placeholder="Enter Country" required="">
                    
                    <input type="submit" name="submit" class="btn btn-success submit_cls">
                </form>
                <div class="cen">
                    <button class="btn btn-danger gen_btn">Generate Fake Data</button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="sec_pad">
	<div class="container-fluid">
        
	</div>
</section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

</body>
</html>
