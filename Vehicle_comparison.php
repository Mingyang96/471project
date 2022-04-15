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
    <div class = "h1"><h1 >This is Vehicle comparison page</h1></div>
    <!-- <div class="h1">
        <p> It will have a table of entered vehicles and can be selected for viewing info</p><br>

        <form action="View_vehicle_info.php" method="post">
            <table border="1" width="200" height="200" cellspacing="20">
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
                    <td><input type="submit" value="Select"/><br><br></td>
                </tr>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td><input type="submit" value="Select"/><br><br></td>
                </tr>
            </table>
        </form>

        <form action="View_vehicle.php" method="post">
            <input type="submit" value="Go back"/>
        </form>
    </div> -->

    <?php
        $connection = mysqli_connect("localhost", "root", "88888888", "471project");
        session_start();
        $Company_name = $_SESSION['Company_name'];
        echo "<table boder = '1'>
            <tr>
            <th> Vehicle_id </th>
            <th> Plate_no </th>
            <th> Model </th>
            <th> Make </th>
            <th> Capacity </th>
            <th> Mileage </th>
            <th> Price </th>
            
            <tr>";

        $VID_array = $_SESSION['checkbox'];
            foreach ($_SESSION['checkbox'] as $vid) {
                $result = mysqli_query($connection, "SELECT * FROM Vehicle WHERE Vehicle_id = '".$vid."'");
                $row = mysqli_fetch_array($result);

                echo "<tr>";
                echo "<td>" . $row['Vehicle_id'] . "</td>";
                echo "<td>" . $row['Plate_no'] . "</td>";
                echo "<td>" . $row['Model'] . "</td>";
                echo "<td>" . $row['Make'] . "</td>";
                echo "<td>" . $row['Capacity'] . "</td>";
                echo "<td>" . $row['Mileage'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";

                $GID = $row['Vehicle_gid'];

            }
            
            // echo "<td><a href = 'View_vehicle.php?Vehicle_id=".$GID."'>Back</a></td>";
            // echo "<br><input type=\"submit\" action=\"View_vehicle.php?GID\" value=\"Back\"/><br>";
    ?>
    <form action="" method="post">
        <input type="submit" name = "back" value="Back"/><br>
    </form>

    <?php
        if(isset($_POST['back'])) {
            
            header("Location: View_vehicle.php?GID=".$GID."&Company_name=".$Company_name."");
        }
    ?>
</body>
</html>