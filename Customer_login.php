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
        font-weight: bold;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div class="h1">
        <p class="ok">This is Customer Login page</p>
        <form action="" method="post">
            <lable> Email: </lable><br>
            <input type="text" name="email"/><br><br>

            <input type="submit" name="login" value="Login"/>
        </form>

        <form action="" method="post">
            <input type="submit" name="signup" value="Sign up"/>
        </form>
    </div>
    <?php
        session_start();
        if (isset($_POST['login'])){
            $_SESSION['Email'] = $_POST['email'];
            header("Location: Customer_login_show.php");
        }

        if (isset($_POST['signup'])){
            $_SESSION['Email'] = $_POST['email'];
            header("Location: Customer_signup.php");
        }
    ?>
</body>
</html>