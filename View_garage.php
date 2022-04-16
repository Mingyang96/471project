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

