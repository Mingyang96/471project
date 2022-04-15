<?php include 'navbar.php' ?>

<?php
session_start();
$connection = mysqli_connect("localhost", "root", "88888888", "471project");

$City = $_SESSION['City'];

$result = mysqli_query($connection, "SELECT * FROM garage WHERE City = '".$City."'");

echo "<table boder = '1'>
    <tr>
    <th> Company_name </th>
    <th> Street </th>
    <th> City </th>
    <th> Province </th>
    <th> Postal_code </th>
    <tr>";


    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Company_name'] . "</td>";
        echo "<td>" . $row['Street'] . "</td>";
        echo "<td>" . $row['City'] . "</td>";
        echo "<td>" . $row['Province'] . "</td>";
        echo "<td>" . $row['Postal_code'] . "</td>";
        
        echo "<td><a href = 'View_vehicle.php?GID=".$row['GID']."&Company_name=".$row['Company_name']."'>Select</a></td>";
        
        
    }

    mysqli_close($connection);

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
    h1{
        text-align: center;
        font-size: 10em;
    }
</style>
<body>
    <div class="h1">
        <p>This is View garage based on the chosen city page</p>
        <form action="View_vehicle.php" method="post">

            <table border="1" width="200" height="200" cellspacing="20" align="center">
                <tr>
                    <td>Company name</td>
                    <td>Street</td>
                    <td>Postal_code</td>
                    
                </tr>
                <tr>
                    <td>Company name</td>
                    <td>Street</td>
                    <td>Postal_code</td>
                    <td><input type="submit" value="Select Garage"/></td>
                </tr>
                <tr>
                    <td>Company name</td>
                    <td>Street</td>
                    <td>Postal_code</td>
                    <td><input type="submit" value="Select Garage"/></td>
                </tr>
            </table>

            <p>Need a button to select a garage and then led to a view vehicle page</p>
        </form>
    </div>
</body>
</html> -->