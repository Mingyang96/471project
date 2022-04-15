<?php include 'navbar.php' ?>
<?php
    session_start();

    $Vehicle_company_name = $_SESSION['Vehicle_company_name'];
    $Vehicle_gid = $_SESSION['Vehicle_gid'];

    // echo $Vehicle_company_name;
    // echo $Vehicle_gid;

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
        <h1 >This is Adding Cars</h1>

        <label> Vehicle ID: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Plate number: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Make: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Model: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Capacity: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Mileage: </label><br>
        <input type="text" placeholder=""/><br><br>

        <form action="Garage_view_vehicle.php" method="post">
            <input type="submit" value="Add this vehicle"/>
        </form>
    </div>
</body>
</html> -->