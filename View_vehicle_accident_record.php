<?php include 'navbar.php' ?>

<?php

$Vehicle_id = $_GET['Vehicle_id'];

$connection = mysqli_connect("localhost", "root", "88888888", "471project");


$result = mysqli_query($connection, "SELECT * FROM accident_record WHERE Vehicle_id = '".$Vehicle_id."'");


    echo "<table boder = '1'>
    <tr>
    <th> Date </th>
    <th> Description </th>
    <tr>";

    session_start();
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['Description'] . "</td>";
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
            <input type="submit" name ="add_insurance" value="Add accident record"/>
        </form>
    </div>

    <?php

        if(isset($_POST['add_insurance'])) {
            
            header("Location: Add_accident_record.php?Vehicle_id=".$Vehicle_id."");
        }
    ?>
</body>
</html>















<!-- <!DOCTYPE html>
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
        font-size: 7em;
    }
</style>
<body>
    <div class="h1">
        <h1 >This is view selected Cars accident record</h1>
        <p> the following button should be added in each row</p><br>
        <form action="Edit_accident_record.php" method="post">

            <table border="1" width="200" height="200" cellspacing="20" align="center">
                <tr>
                    <td>Year</td>
                    <td>Month</td>
                    <td>Day</td>
                    <td>Description</td>
                    
                </tr>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>to be continue</td>
                    <td><input type="submit" value="Edit"/></td>
                    <td>
                        <form action="Add_accident_record.php" method="post">
                            <input type="submit" value="Add new accident"/>
                        </form>
                    </td>
                </tr>
            </table>
        </form>


        <p>the following button should not be in the table</p>

        <form action="Garage_select_vehicle.php" method="post">
            <input type="submit" value="Back"/>
        </form>
    </div>
</body>
</html> -->
