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
