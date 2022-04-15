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
        font-size: 1em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div class="h1">
        <p>This is Customer_signup page</p>

        <form action="" method="post">
        <label> GID: </label><br>
        <input type="text" name="GID"/><br><br>

        <label> Company Name: </label><br>
        <input type="text" name="Company_name"/><br><br>

        <label> Street: </label><br>
        <input type="text" name="Street"/><br><br>

        <label> City: </label><br>
        <input type="text" name="City"/><br><br>

        <label> Province: </label><br>
        <input type="text" name="Province"/><br><br>

        <label> Postal code: </label><br>
        <input type="text" name="Postal_code"/><br><br>

            <input type="submit" name="signup" value="Sign up"/>
        </form>

        <form action="Company_login.php" method="post">
            <input type="submit" value="Cancel"/>
        </form>
        
    </div>
    <?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    if(isset($_POST['signup'])) {
        $GID = $_POST['GID'];
        $Company_name = $_POST['Company_name'];
        $Street = $_POST['Street'];
        $City = $_POST['City'];
        $Province = $_POST['Province'];
        $Postal_code = $_POST['Postal_code'];

        

        //$sql = "INSERT INTO return_car (Vehicle_id, GID, Company_name, Email, Date, Penalty) VALUES ('$Vehicle_id', '$Vehicle_gid', '$Vehicle_company_name', '$Email', '$Date', '$Penalty')";
        $sql2 = "INSERT INTO garage (GID, Company_name, Street, City, Province, Postal_code) VALUES ('$GID', '$Company_name', '$Street', '$City', '$Province', '$Postal_code')";

        $result = mysqli_query($connection, $sql2);
        //$result = mysqli_query($connection, $sql);
        session_start();
        $_SESSION['Vehicle_company_name'] = $Company_name;
        $_SESSION['Vehicle_gid'] = $GID;

        header("Location: Garage_view_vehicle.php");

    }
    ?>
</body>
</html>