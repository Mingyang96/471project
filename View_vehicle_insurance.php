<?php include 'navbar.php' ?>

<?php

session_start();
$Vehicle_id = $_GET['Vehicle_id'];

$connection = mysqli_connect("localhost", "root", "88888888", "471project");


$result = mysqli_query($connection, "SELECT * FROM insurance WHERE Vehicle_id ='".$Vehicle_id."'");


    echo "<table boder = '1'>
    <tr>
    <th> Insurance_no </th>
    <th> Company_name </th>
    <th> Amount </th>
    <tr>";

    session_start();
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Insurance_no'] . "</td>";
        echo "<td>" . $row['Company_name'] . "</td>";
        echo "<td>" . $row['Amount'] . "</td>";

        echo "<td><a href = 'Edit_insurance.php?Insurance_no=".$row['Insurance_no']."'>Edit</td>";
        
    }
    

    mysqli_close($connection);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
</head>
<style>
    .h1{
        text-align: center;
        font-size: 1cm;
    }
</style>
<body>
    <div class="h1">

        <form action="Garage_view_vehicle.php" method="post">
            <input type="submit" value="Back"/>
        </form>

        <!-- "Location: View_vehicle_insurance.php?Vehicle_id=".$row['Vehicle_id']."" -->
        <form action="" method="post">
            <input type="submit" name ="add_insurance" value="Add insurance"/>
        </form>
    </div>

    <?php

        if(isset($_POST['add_insurance'])) {
            
            header("Location: Add_insurance.php?Vehicle_id=".$Vehicle_id."");
        }
    ?>
</body>
</html>