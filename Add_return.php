
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

        <label> Customer email: </label><br>
        <input type="text" name="Email"/><br><br>

        <label> Penalty: </label><br>
        <input type="int" name="Penalty"/><br><br>

        <label> Return date: </label><br>
        <input type="date" name="Date"/><br><br>

        <input type="submit" name = "add" value="Add"/>
    </form>
    </div>

    <?php
        $connection = mysqli_connect("localhost", "root", "88888888", "471project");
        session_start();
        $Vehicle_company_name = $_SESSION['Vehicle_company_name'];
        $Vehicle_gid = $_SESSION['Vehicle_gid'];
        $Vehicle_id = $_GET['Vehicle_id'];

        if(isset($_POST['add'])) {
            $Email = $_POST['Email'];
            $Penalty = $_POST['Penalty'];
            $Date = $_POST['Date'];
            
    
            $sql = "INSERT INTO return_car (Vehicle_id, GID, Company_name, Email, Date, Penalty) VALUES ('$Vehicle_id', '$Vehicle_gid', '$Vehicle_company_name', '$Email', '$Date', '$Penalty')";
            $sql2 = "UPDATE Vehicle SET Status = 'avaiable' WHERE Vehicle_id = '".$Vehicle_id."'";

            $result = mysqli_query($connection, $sql);
            $result = mysqli_query($connection, $sql2);
            header("Location: Garage_view_vehicle.php");
        }

    ?>
</body>
</html>