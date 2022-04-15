<?php include 'navbar.php' ?>
<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");
    $Vehicle_id = $_GET['Vehicle_id'];
    
    //$spl = "SELECT * FROM Vehicle WHERE Vehicle_id = '".$Vehicle_id."'";

    $result = mysqli_query($connection, "SELECT * FROM Vehicle WHERE Vehicle_id = '".$Vehicle_id."'");
    $row = mysqli_fetch_array($result);
    $Price = $row['Price'];
    $Vehicle_gid = $row['Vehicle_gid'];
    $Company_name = $row['Vehicle_company_name'];
    $Start_date_ture = $_GET['Start_date'];
    

    $Start_date = strtotime($_GET['Start_date']);
    $End_date = strtotime($_GET['End_date']);
    
    
    echo 'Your Balance is:   ' .' $ '.$Price * ($End_date-$Start_date)/(24*60*60);

    $_SESSION['Price'] = $Price * ($End_date-$Start_date)/(24*60*60);
    $Price1 = $Price * ($End_date-$Start_date)/(24*60*60);

?>






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
    <div>
        <form action="" method="post">
            <br><br>
            <label> Name of the Card Holder: </label>
            <input type="text" name=""/><br>

            <label> Card Type: </label>
            <input type="text" name=""/><br>
            
            <label> Card Number: </label>
            <input type="text" name="Card_no"/><br>

            <label> Expire Date: </label>
            <input type="date" name=""/><br>

            <label> CVV: </label>
            <input type="text" name=""/><br><br>

            <label> T_id: </label>
            <input type="int" name="Transaction_id"/><br><br>

            <input type="submit" name="pay" value="Pay"/>
        </form>
    </div>

    <?php

        if(isset($_POST['pay'])) {


            $Transaction_id = $_POST['Transaction_id'];
            $Card_no = $_POST['Card_no'];
            $Email = $_SESSION['Email'];

            $sql = "INSERT INTO transaction (Transaction_id, Amount, Date, Card_no, Vehicle_id, Email, Start_date) VALUES ('$Transaction_id', '$Price1', now(), '$Card_no', '$Vehicle_id', '$Email', '$Start_date_ture')";
            $result = mysqli_query($connection, $sql);

            

            // echo $Email;
            // echo '<br>';
            // echo $Transaction_id;
            // echo '<br>';
            // echo $Vehicle_id;
            // echo '<br>';
            // echo $Company_name;
            // echo '<br>';
         

            $sql5 = "INSERT INTO pay (Email, Transaction_id, GID, Company_name) VALUES ('$Email', '$Transaction_id', '$Vehicle_gid', '$Company_name')";
            $result = mysqli_query($connection, $sql5);

            $sql2 = "UPDATE rent_record SET Status = 'paid' WHERE Vehicle_id = '".$Vehicle_id."' AND Email = '".$Email."' AND Start_date = '".$Start_date_ture."' ";
            $result = mysqli_query($connection, $sql2);
            header("Location: Feedback.php?Vehicle_id=".$Vehicle_id."");
        }
    ?>
</body>
</html>
