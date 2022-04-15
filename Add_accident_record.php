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

        <form action="" method="post">
        <label> Date: </label><br>
        <input type="date" name="Date"/><br><br>

        <label> Description: </label><br>
        <input type="text" name="Description"/><br><br>


            <input type="submit" name = "add" value="Add"/>
            <input type="submit" name = "cancel" value="Cancel"/>
        </form>
        
    </div>

    <?php
        $connection = mysqli_connect("localhost", "root", "88888888", "471project");
        $Vehicle_id = $_GET['Vehicle_id'];

        if(isset($_POST['add'])) {
            $Date = $_POST['Date'];
            $Description = $_POST['Description'];
            
    
            $sql = "INSERT INTO accident_record (Date, Vehicle_id, Description) VALUES ('$Date', '$Vehicle_id', '$Description')";

            $result = mysqli_query($connection, $sql);

            header("Location: View_vehicle_accident_record.php?Vehicle_id=".$Vehicle_id."");
        }

        if (isset($_POST['cancel'])){
            header("Location: View_vehicle_accident_record.php?Vehicle_id=".$Vehicle_id."");
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
        <h1 >This is add new accident page</h1>

        <label> Year: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Month: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Day: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Description: </label><br>
        <input type="text" placeholder=""/><br><br>


        <form action="View_vehicle_accident_record.php" method="post">
            <input type="submit" value="Add"/>
        </form>
    </div>
</body>
</html> -->