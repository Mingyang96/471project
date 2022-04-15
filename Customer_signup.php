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
        <form action="Customer_info.php" method="post">
            <label> First Name: </label><br>
            Fname: <input type="text" name="Fname"/><br><br>

            <label> Middle Name: </label><br>
            Mname: <input type="text" name="Mname"/><br><br>

            <label> Last Name: </label><br>
            Lname: <input type="text" name="Lname"/><br><br>

            <label> Phone Number: </label><br>
            Phone: <input type="text" name="phone"/><br><br>

            <label> Email: </label><br>
            E-mail: <input type="text" name="email"/><br><br>

            <label> Driver Licence: </label><br>
            Licence: <input type="text" name="license"/><br><br>

            <input type="submit" value="Sign up"/>
        </form>

        <form action="Customer_login.php" method="post">
            <input type="submit" value="Cancel"/>
        </form>
    </div>
</body>
</html>