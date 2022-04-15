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
    <div class="h1">
        <h1 >This is Login as Company</h1>
        <!-- <form action="Garage_view_vehicle.php" method="post"> -->
        <form action="" method="post">
            <lable> Company name: </lable><br>
            <input type="text" name="Company_name"/><br><br>

            <lable> Garage ID: </lable><br>
            <input type="text" name="GID"/><br><br>

            <input type="submit" name="login" value="Login"/>
        </form>

        <form action="Company_signup.php" method="post">
            <input type="submit" value="Sign up"/>
        </form>
    </div>

    <?php
    session_start();
    if(isset($_POST['login'])) {
        $_SESSION['Vehicle_company_name'] = $_POST['Company_name'];
        $_SESSION['Vehicle_gid'] = $_POST['GID'];
        header("Location: Garage_view_vehicle.php");
    }
    ?>
</body>
</html>
