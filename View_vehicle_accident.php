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


