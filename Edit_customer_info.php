<?php include 'navbar.php' ?>
<?php
    session_start();

    $Email = $_SESSION['index'];

    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    $result = mysqli_query($connection, "SELECT * FROM customer WHERE Email =".$Email);

    while ($row = mysqli_fetch_array($result)){
        ?>
        <form action  ="Customer_login_show.php?job=update" method = "post">
            <input type = "hidden" name = "email" value = <?php echo $row['Email'];?>>
            Lname: <input type = "text" name = "Lname" value = <?php echo $row['Lname'];?>><br>
            Mname: <input type = "text" name = "Mname" value = <?php echo $row['Mname'];?>><br>
            Fname: <input type = "text" name = "Fname" value = <?php echo $row['Fname'];?>><br>
            Driver_license: <input type = "text" name = "license" value = <?php echo $row['Driver_license'];?>><br>
            Phone: <input type = "text" name = "phone" value = <?php echo $row['Phone'];?>><br>

            <input type = "submit" value = "Update personal info">
        </form>
        <?php
    }

    $result = mysqli_query($connection, "SELECT * FROM emergency_contact WHERE Email =".$Email);

    while ($row = mysqli_fetch_array($result)){
        ?>
        <form action  ="" method = "post">
            <input type = "hidden" name = "email" value = <?php echo $row['Email'];?>>
            Fname: <input type = "text" name = "Fname" value = <?php echo $row['Fname'];?>><br>
            Lname: <input type = "text" name = "Lname" value = <?php echo $row['Lname'];?>><br>
            Phone: <input type = "text" name = "Phone" value = <?php echo $row['Phone'];?>><br>

            <input type = "submit" name="emergency" value = "Update emergency contact">
        </form>
        <?php
    }

    if(isset($_POST['emergency'])) {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Phone = $_POST['Phone'];
        
        $sql2 = "UPDATE emergency_contact SET Fname = '$Fname', Lname = '$Lname', Phone = '$Phone'";
        $result = mysqli_query($connection, $sql2);
    
        header("Location: Customer_login_show.php");
    }
?>

<form action  ="" method = "post">
    <input type = "hidden" name = "email" value = <?php echo $row['Email'];?>>
    Fname: <input type = "text" name = "Fname" value = <?php echo $row['Fname'];?>><br>
    Lname: <input type = "text" name = "Lname" value = <?php echo $row['Lname'];?>><br>
    Phone: <input type = "text" name = "Phone" value = <?php echo $row['Phone'];?>><br>

    <input type = "submit" name="emergency_add" value = "Insert emergency contact">
</form>

<?php
    if(isset($_POST['emergency_add'])) {
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $Phone = $_POST['Phone'];
        
        $sql2 = "INSERT INTO emergency_contact (Email, Fname, Lname, Phone) VALUES ('$Email' ,'$Fname', '$Lname','$Phone')";

        $result = mysqli_query($connection, $sql2);
        header("Location: Edit_customer_info.php");
    }
?>

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
        font-size: 1em;
    }
</style>
<body>
    <div class="h1">

        <form action="Customer_login_show.php" method="post">
            <input type="submit" value="Cancel"/>
        </form>
    </div>
    

</body>
</html>