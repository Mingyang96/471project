<?php include 'navbar.php' ?> 
    <?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    $Fname = mysqli_real_escape_string($connection, $_REQUEST['Fname']);
    $Mname = mysqli_real_escape_string($connection, $_REQUEST['Mname']);
    $Lname = mysqli_real_escape_string($connection, $_REQUEST['Lname']);
    $Email = mysqli_real_escape_string($connection, $_REQUEST['email']);
    $Driver_license = mysqli_real_escape_string($connection, $_REQUEST['license']);
    $Phone = mysqli_real_escape_string($connection, $_REQUEST['phone']);

    $sql = "INSERT INTO customer (Email, Lname, Mname, Fname, Driver_license, Phone) VALUES ('$Email', '$Lname', '$Mname', '$Fname', '$Driver_license', '$Phone')";

    if (!mysqli_query($connection, $sql)){
        echo "Failed to sql: ";
    }

    if ($_GET["job"] == "update"){
        $Email = $_POST["email"];
        $Lname = $_POST["Lname"];
        $Mname = $_POST["Mname"];
        $Fname = $_POST["Fname"];
        $Driver_license = $_POST["license"];
        $Phone = $_POST["phone"];

        $result = mysqli_query($connection, "UPDATE customer SET Lname = '".$Lname."', Mname = '".$Mname."', Fname = '".$Fname."', Driver_license = '".$Driver_license."', Phone = '".$Phone."' WHERE Email =".$Email);

    }

    $result = mysqli_query($connection, "SELECT * FROM customer WHERE Email = '".$Email."'");

    echo "<table boder = '1'>
    <tr>
    <th> Email </th>
    <th> Lname </th>
    <th> Mname </th>
    <th> Fname </th>
    <th> Driver_license </th>
    <th> Phone </th>
    <tr>";

    session_start();

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Lname'] . "</td>";
        echo "<td>" . $row['Mname'] . "</td>";
        echo "<td>" . $row['Fname'] . "</td>";
        echo "<td>" . $row['Driver_license'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";

        $_SESSION['index'] = $row['Email'];
        echo "<td><a href = 'Edit_customer_info.php'>Update</a></td>";

        
    }
    echo "</table>";

    mysqli_close($connection);

?>


    <form action="Order_list.php" method="post">
        <input type="submit" value="View my order"/>
    </form>

    <form action="Index.php" method="post">
        <input type="submit" value="Rent a vehicle"/>
    </form>
