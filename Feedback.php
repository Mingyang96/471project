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
        font-size: 10em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div>

        <form action="" method="post">
            <select name="Rate">
                <option value=""> --Rate Us--</option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>
        <br><br><input type="text" name="Comment"/><br><br>

            <input type="submit" name = "send" value="Send feedback"/>
        </form>
    </div>

    <?php
        $connection = mysqli_connect("localhost", "root", "88888888", "471project");
        if(isset($_POST['send'])) {
            session_start();
            $Email = $_SESSION['Email'];
            $Vehicle_id = $_GET['Vehicle_id'];

            $Comment = $_POST['Comment'];
            $Rate = $_POST['Rate'];


            $sql5 = "INSERT INTO feedback (Vehicle_id, Email, Rate, Comment) VALUES ('$Vehicle_id', '$Email', '$Rate', '$Comment')";
            $result = mysqli_query($connection, $sql5);

            header("Location: Thankyou.php");
        }
    ?>
</body>
</html>