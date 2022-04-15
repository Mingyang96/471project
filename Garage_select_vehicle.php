<?php include 'navbar.php' ?>
<?php
    session_start();

    $Vehicle_company_name = $_SESSION['Vehicle_company_name'];
    $Vehicle_gid = $_SESSION['Vehicle_gid'];
    $Vehicle_id = $_GET['Vehicle_id'];
    
    

    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    $result = mysqli_query($connection, "SELECT * FROM Vehicle WHERE Vehicle_id = '".$Vehicle_id."' ");

    while ($row = mysqli_fetch_array($result)){
        ?>
        <form action  ="Garage_view_vehicle.php?job=update" method = "post">
            <input type = "hidden" name = "Vehicle_id" value = <?php echo $row['Vehicle_id'];?>><br>
            Plate number: <input type = "text" name = "Plate_no" value = <?php echo $row['Plate_no'];?>><br>
            Model: <input type = "text" name = "Model" value = <?php echo $row['Model'];?>><br>
            Make: <input type = "text" name = "Make" value = <?php echo $row['Make'];?>><br>
            Capacity: <input type = "text" name = "Capacity" value = <?php echo $row['Capacity'];?>><br>
            Mileage: <input type = "text" name = "Mileage" value = <?php echo $row['Mileage'];?>><br>
            Price: <input type = "int" name = "Price" value = <?php echo $row['Price'];?>><br>

            <input type = "submit" value = "Update">
        </form>

        <?php
    }

    mysqli_close($connection);
    ?>












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
        <h1 >This is garage view selected Cars</h1>
        <p> Show all the vehicle info: vehicle ID, Plate number, Make, Model, Capicity, Mileage, Status</p>

        <table border="1" width="200" height="200" cellspacing="20" align="center">
            <tr>
                <td>Vehicle ID</td>
                <td>Plate_No</td>
                <td>Status</td>
                <td>Model</td>
                <td>Make</td>
                <td>Capicity</td>
                <td>Mileage</td>
                
            </tr>
            <tr>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>g</td>
                <td>
                    <form action="Add_return.php" method="post">
                        <input type="submit" value="Add return"/>
                    </form>
                </td>
                <td>
                    <form action="View_vehicle_insurance.php" method="post">
                        <input type="submit" value="View/Edit vehicles insurance"/>
                    </form>
                </td>
                <td>
                    <form action="View_vehicle_accident_record.php" method="post">
                        <input type="submit" value="View/Edit vehicles accident record"/>
                    </form>
                </td>
            </tr>
        </table>

        <br><br><form action="Garage_view_vehicle.php" method="post">
            <input type="submit" value="Back"/>
        </form>
    </div>
</body>
</html> -->