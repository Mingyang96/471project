<?php include 'navbar.php' ?>
<?php
    session_start();

    $Vehicle_company_name = $_SESSION['Vehicle_company_name'];
    $Vehicle_gid = $_SESSION['Vehicle_gid'];

    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    ?>
    <form action  ="" method = "post">
        Vehicle ID: <input type = "text" name = "Vehicle_id" ><br>
        Plate number: <input type = "text" name = "Plate_no" ><br>
        Model: <input type = "text" name = "Model" ><br>
        Make: <input type = "text" name = "Make" ><br>
        Capacity: <input type = "text" name = "Capacity" ><br>
        Mileage: <input type = "text" name = "Mileage" ><br>
        Price: <input type = "int" name = "Price" ><br>
        
        <input type = "submit" name = "add" value = "Add this vehicle">
    </form>
    <?php
    
    if(isset($_POST['add'])) {
        $Vehicle_id = $_POST['Vehicle_id'];
        $Plate_no = $_POST['Plate_no'];
        $Model = $_POST['Model'];
        $Make = $_POST['Make'];
        $Capacity = $_POST['Capacity'];
        $Mileage = $_POST['Mileage'];
        $Price = $_POST['Price'];

        $sql = "INSERT INTO Vehicle (Vehicle_id, Plate_no, Status, Model, Make, Capacity, Mileage, Vehicle_company_name, Vehicle_gid, Price) VALUES ('$Vehicle_id', '$Plate_no', 'avaiable', '$Model', '$Make', '$Capacity', '$Mileage', '$Vehicle_company_name', '$Vehicle_gid', '$Price')";
        
        $result = mysqli_query($connection, $sql);
        header("Location: Garage_view_vehicle.php");
    }
    

    mysqli_close($connection);
?>
