<?php
include "db.php";
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country']; 

    $insertquery = "INSERT INTO `gendata` (`name`, `email`, `city`, `zipcode`, `country`) VALUES ('$name', '$email', '$city', '$zipcode', '$country')";
    mysqli_query($conn,$insertquery);
   

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyWebsite</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<section>
    <div class="container-fluid">
        <p class="txt_para">
            Here, You can download your data in different formats.
        </p>
    </div>
</section>    
<section>
    <div class="container-fluid">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Zipcode</th>
                <th>Country</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
           <?php
           $selectquery = "SELECT * FROM `gendata`";
           $selectqueryresult = mysqli_query($conn,$selectquery);
           while($row=mysqli_fetch_array($selectqueryresult))
           {
            ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["city"]?></td>
                <td><?php echo $row["zipcode"]?></td>
                <td><?php echo $row["country"]?></td>
                <td><a class="btn btn-success" href="edit.php?id=<?php echo $row['id']; ?>">Edit</td>
                <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</td>
            </tr>
            <?php
           }
           ?>
            
        </tbody>
    </table>
    </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ]
    } );
} );
</script>
</body>
</html>
