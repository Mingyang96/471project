<?php include 'navbar.php' ?> 
<?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    session_start();
    $Email = $_SESSION['Email'];

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
    $result2 = mysqli_query($connection, "SELECT * FROM emergency_contact WHERE Email ='".$Email."'");


    if ($result == NULL){
        echo "Please sign up first".$Email;
    }

    echo "<table boder = '1'>
    <tr>
    <th> Email </th>
    <th> Lname </th>
    <th> Mname </th>
    <th> Fname </th>
    <th> Driver_license </th>
    <th> Phone </th>
    <tr>";

    $row = mysqli_fetch_array($result);
    $custEmail = $row['Email'];
    $custLname = $row['Lname'];
    $custMnme = $row['Mname'];
    $custFname = $row['Fname'];
    $custDriver = $row['Driver_license'];
    $custPhone = $row['Phone'];

    $_SESSION['index'] = $row['Email'];

    echo "<td>" . $custEmail . "</td>";
    echo "<td>" . $custLname . "</td>";
    echo "<td>" . $custMnme . "</td>";
    echo "<td>" . $custFname . "</td>";
    echo "<td>" . $custDriver . "</td>";
    echo "<td>" . $custPhone . "</td>";

    echo '<tr>';

    echo '<th> Emergency_Fname </th>
    <th> Emergency_Lname </th>
    <th> Emergency_Phone </th>';
    echo '<tr>';

    while ($row = mysqli_fetch_array($result2)){

        echo "<td>" . $row['Fname'] . "</td>";
        echo "<td>" . $row['Lname'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        
        echo '<tr>';
    }

    mysqli_close($connection);
?>


<form action="Order_list.php" method="post">
    <input type="submit" value="View my order"/>
</form>

<form action="Index.php" method="post">
    <input type="submit" value="Rent a vehicle"/>
</form>

<form action="Edit_customer_info.php" method="post">
    <input type="submit" value="Update Info/Emergency contact"/>
</form>
