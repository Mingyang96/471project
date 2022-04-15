<?php include 'navbar.php' ?>

<?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");
    session_start();
    $Email = $_SESSION['Email'];

    $result = mysqli_query($connection, "SELECT * FROM vehicle AS v, rent_record AS r WHERE v.Vehicle_id = r.Vehicle_id AND Email = '".$Email."'");
    
        echo "<table boder = '1'>
        <tr>
        <th> Vehicle_id </th>
        <th> Plate_no </th>
        <th> Model </th>
        <th> Make </th>
        <th> Mileage </th>
        <th> Status </th>
        <tr>";
    
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Vehicle_id'] . "</td>";
            echo "<td>" . $row['Plate_no'] . "</td>";
            echo "<td>" . $row['Model'] . "</td>";
            echo "<td>" . $row['Make'] . "</td>";
            echo "<td>" . $row['Mileage'] . "</td>";
            echo "<td>" . $row['Status'] . "</td>";

            if ($row['Status'] == 'not_pay') {
                echo "<td><a href = 'Transaction.php?Vehicle_id=".$row['Vehicle_id']."&Start_date=".$row['Start_date']."&End_date=".$row['End_date']."'>Process to Payment</a></td>";
            }
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
    .h1{
        text-align: center;
        font-size: 2em;
    }
</style>
<body>
    <div class="h1">
        <p>This is Order page</p><br>
        <p>It should have a table that shows the added vehicle</p><br>

        <p>Cars can be delected by the button in each row</p>
        <p>Can view the car info by the button in each row</p>

        <form action="Transation.php" method="post">
            <table border="1" width="200" height="200" cellspacing="20" align="center">
                <tr>
                    <td>Vehicle ID</td>
                    <td>Plate_No</td>
                    <td>Status</td>
                    <td>Model</td>
                    
                </tr>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td><input type="submit" value="View info"/></td>
                    <td><input type="submit" value="Process to payment"/></td>
                    <td><input type="submit" value="Delete"/></td>
                </tr>
            </table>
        </form>

        <form action="Index.php" method="post">
            <input type="submit" value="Add new vehicles"/>
        </form>
    </div>
</body>
</html> -->