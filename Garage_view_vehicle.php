<?php include 'navbar.php' ?>

<?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    session_start();
    // $_SESSION['Company_name'] = $_POST['Company_name'];
    $Vehicle_company_name = $_SESSION['Vehicle_company_name'];
    // $_SESSION['GID'] = $_POST['GID'];
    $Vehicle_gid = $_SESSION['Vehicle_gid'];
    // $Company_name = $_SESSION['Company_name1'];
    // $GID = $_SESSION['GID1'];

    if ($_GET["job"] == "update"){
        $Vehicle_id = $_POST["Vehicle_id"];
        $Plate_no = $_POST["Plate_no"];
        $Status = $_POST["Status"];
        $Model = $_POST["Model"];
        $Make = $_POST["Make"];
        $Capacity = $_POST["Capacity"];
        $Mileage = $_POST["Mileage"];
        $Price = $_POST["Price"];

        $result = mysqli_query($connection, "UPDATE Vehicle SET Plate_no = '".$Plate_no."', Model = '".$Model."', Make = '".$Make."', Capacity = '".$Capacity."', Mileage = '".$Mileage."', Price = '".$Price."' WHERE Vehicle_id = '".$Vehicle_id."'");
    }
    

    $result = mysqli_query($connection, "SELECT * FROM Vehicle WHERE Vehicle_company_name = '".$Vehicle_company_name."' AND Vehicle_gid = '".$Vehicle_gid."'");
    // $result2 = mysqli_query($connection, "SELECT * FROM Garage WHERE Vehicle_company_name = '".$Company_name."' AND Vehicle_gid = '".$GID."'");

    echo 'Company_name:  ' .$Vehicle_company_name;
    echo "<br>";
    echo "<br>";
    echo 'GID:  ' .$Vehicle_gid;
    echo "<br>";

    echo "<table boder = '1'>
    <tr>
    <th> Vehicle_id </th>
    <th> Plate_no </th>
    <th> Statuts </th>
    <th> Model </th>
    <th> Make </th>
    <th> Capacity </th>
    <th> Mileage </th>
    <th> Vehicle_company_name </th>
    <th> Vehicle_gid </th>
    <th> Price </th>
    <tr>";

    session_start();
    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Vehicle_id'] . "</td>";
        echo "<td>" . $row['Plate_no'] . "</td>";
        echo "<td>" . $row['Status'] . "</td>";
        echo "<td>" . $row['Model'] . "</td>";
        echo "<td>" . $row['Make'] . "</td>";
        echo "<td>" . $row['Capacity'] . "</td>";
        echo "<td>" . $row['Mileage'] . "</td>";
        echo "<td>" . $row['Vehicle_company_name'] . "</td>";
        echo "<td>" . $row['Vehicle_gid'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";

        
        echo "<td><a href = 'Garage_select_vehicle.php?Vehicle_id=".$row['Vehicle_id']."'>Edit</a></td>";
        echo "<td>----------</td>";
        echo "<td><a href = 'Add_return.php?Vehicle_id=".$row['Vehicle_id']."'>Add return</a></td>";
        echo "<td>----------</td>";
        echo "<td><a href = 'View_vehicle_insurance.php?Vehicle_id=".$row['Vehicle_id']."'>View/Edit insurance</a></td>";
        echo "<td>----------</td>";
        echo "<td><a href = 'View_vehicle_accident_record.php?Vehicle_id=".$row['Vehicle_id']."'>View/Edit accident</a></td>";
        
    }

    mysqli_close($connection);

?>

<form action="Add_car.php" method="post">
            <input type="submit" value="Add new vehicle"/>
        </form>



