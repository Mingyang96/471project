<?php include 'navbar.php' ?>

<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    $Vehicle_gid = $_GET['Vehicle_gid'];
    
    $Vehicle_id = $_GET['Vehicle_id'];

    $Company_name = $_SESSION['Company_name'];
    
    $result = mysqli_query($connection, "SELECT * FROM accident_record WHERE Vehicle_id = '".$Vehicle_id."'");
    
    echo "<table boder = '1'>
        <tr>
        <th> Date </th>
        <th> Description </th>
        <tr>";
    
    
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td>" . $row['Description'] . "</td>";
        }
    
        mysqli_close($connection);
?>

<form action="" method="post">
    <input type="submit" name ="back" value="Back"/>
</form>
<?php

    if(isset($_POST['back'])) {
        
        header("Location: View_vehicle.php?GID=".$Vehicle_gid."&Company_name=".$Company_name."");
    }
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<style>
    .h1{
        text-align: center;
        font-size: 10em;
    }
</style>
<body>
    <div class="h1">
        <p>This is view car accident page</p>

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
            </tr>
        </table>

        <p>It can return to the view vehicle page</p>
        <form action="View_vehicle_info.php" method="post">
            <input type="submit" value="Back to vehicle info"/>
        </form>
    </div>
</body>
</html> -->