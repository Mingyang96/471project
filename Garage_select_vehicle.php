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

