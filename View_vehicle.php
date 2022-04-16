







<!DOCTYPE html>
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
        font-size: 0.7em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div>
        <!-- <p> The following is a table of all the cars in this garage </p><br>

        <p>Inter the rent dates</p>
        <label> Start date: </label>
        <input type="date" name="Start_date"/><br>
        
        <label> End date: </label>
        <input type="date" name="End_date"/><br>
        <input type="submit" name="confirm" value="Confirm dates"/>-->
        
        <form action="" method="post">
            <?php
            $connection = mysqli_connect("localhost", "root", "88888888", "471project");
            session_start();
            $GID = $_GET['GID'];
            $Vehicle_company_name = $_GET['Company_name'];
            if(isset($_POST['confirm'])) {
                $_SESSION['Start_date'] = $_POST['Start_date'];
                $_SESSION['End_date'] = $_POST['End_date'];
                
                
                // $result = mysqli_query($connection, $sql);
                header("Location: View_vehicle.php");
            }
            
            $_SESSION['Start_date'];     
            $_SESSION['End_date']; 
            
            $result = mysqli_query($connection, "SELECT * FROM Vehicle WHERE Status = 'avaiable' AND Vehicle_gid = '".$GID."' AND Vehicle_company_name = '".$Vehicle_company_name."'");
            
            echo "<table boder = '1'>
            <tr>
            <th> Vehicle_id </th>
            <th> Plate_no </th>
            <th> Model </th>
            <th> Make </th>
            <th> Capacity </th>
            <th> Mileage </th>
            <tr>";
            
            session_start();

            $_SESSION['Company_name'] = $Vehicle_company_name;
            while ($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['Vehicle_id'] . "</td>";
                echo "<td>" . $row['Plate_no'] . "</td>";
                echo "<td>" . $row['Model'] . "</td>";
                echo "<td>" . $row['Make'] . "</td>";
                echo "<td>" . $row['Capacity'] . "</td>";
                echo "<td>" . $row['Mileage'] . "</td>";
                
                echo "<td>----------</td>";
                echo "<td><a href = 'View_vehicle_accident.php?Vehicle_id=".$row['Vehicle_id']."&Vehicle_gid=".$row['Vehicle_gid']."'>View vehicle accident</a></td>";
                
                echo "<td>----------</td>";
                echo "<td><a href = 'Add_to_order_list.php?Vehicle_id=".$row['Vehicle_id']."'>Rent</a></td>";
                
                echo "<td>----------</td>";
                echo "<td><input type=\"checkbox\" name=\"checkbox[]\" value=" .$row['Vehicle_id']."></td>";
            }
            
            echo "<input type=\"submit\" name=\"compare\" value=\"Compare\"/><br><br>";
            
            
            
            $_SESSION['checkbox'] = $_POST['checkbox'];

            if (isset($_POST['compare'])) {
                // foreach ($_SESSION['checkbox'] as $vid) {
                //     echo $vid;
                // }
                header("Location: Vehicle_comparison.php");
            }

            
            mysqli_close($connection);
            
           
            ?>
        </form>


    </div>
</body>
</html>
