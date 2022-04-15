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
        font-size: 7em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div class="h1">
        <h1 >This is add insurance page</h1>

        <form action="" method="post">
        <label> Insurance Number: </label><br>
        <input type="text" name="Insurance_no"/><br><br>

        <label> Company_name: </label><br>
        <input type="text" name="Company_name"/><br><br>

        <label> Amount: </label><br>
        <input type="int" name="Amount"/><br><br>


            <input type="submit" name = "add" value="Add"/>
            <input type="submit" name = "cancel" value="Cancel"/>
        </form>
    </div>

    <?php
        $connection = mysqli_connect("localhost", "root", "88888888", "471project");
        $Vehicle_id = $_GET['Vehicle_id'];

        if(isset($_POST['add'])) {
            $Insurance_no = $_POST['Insurance_no'];
            $Company_name = $_POST['Company_name'];
            $Amount = $_POST['Amount'];
            
    
            $sql = "INSERT INTO insurance (Vehicle_id, Insurance_no, Company_name, Amount) VALUES ('$Vehicle_id', '$Insurance_no', '$Company_name', '$Amount')";

            $result = mysqli_query($connection, $sql);

            header("Location: View_vehicle_insurance.php?Vehicle_id=".$Vehicle_id."");
        }

        if (isset($_POST['cancel'])){
            header("Location: View_vehicle_insurance.php?Vehicle_id=".$Vehicle_id."");
        }

    ?>
</body>
</html>