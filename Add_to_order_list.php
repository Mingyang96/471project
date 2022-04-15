<?php include 'navbar.php' ?>

<form action="" method="post">
    <label> Start date: </label>
    <input type="date" name="Start_date"/><br>

    <label> End date: </label>
    <input type="date" name="End_date"/><br>

    <label> Email: </label><br>
    <input type="text" name = "Email"/><br><br>

    <input type="submit" name="confirm" value="Confirm Rent"/>
</form>

<?php
    $connection = mysqli_connect("localhost", "root", "88888888", "471project");
    session_start();
    // $GID = $_GET['GID'];
    if(isset($_POST['confirm'])) {
        $Start_date = $_POST['Start_date'];
        $End_date = $_POST['End_date'];   
        $Email = $_POST['Email'];
        $Vehicle_id = $_GET['Vehicle_id'];

        $_SESSION['Start_date'] = $Start_date;
        $_SESSION['End_date'] = $End_date;
        $_SESSION['Email'] = $Email;

        // $sql1 = "INSERT INTO customer (Email, Lname, Mname, Fname, Driver_license, Phone) VALUES ('$Email', NULL, NULL, NULL, NULL, NULL)";
        // $result = mysqli_query($connection, $sql1);

        $result1 = mysqli_query($connection, "SELECT * FROM customer WHERE Email = '".$Email."'");
        if (mysqli_num_rows($result1) == 0){
            header("Location: Customer_signup.php");
        }else {
            $sql = "INSERT INTO rent_record (Vehicle_id, Email, Start_date, End_date, Status) VALUES ('$Vehicle_id', '$Email', '$Start_date', '$End_date', 'not_pay')";
            $result = mysqli_query($connection, $sql);

            $sql2 = "UPDATE vehicle SET Status = 'rent' WHERE Vehicle_id = '".$Vehicle_id."'";
            $result2 = mysqli_query($connection, $sql2);
            
            // $result = mysqli_query($connection, $sql);
            header("Location: Transaction.php?Vehicle_id=".$Vehicle_id."&Start_date=".$Start_date."&End_date=".$End_date."");
        }
        
    }

?>




<!-- <!DOCTYPE html>
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
    <div class="h1">
        <h1 >This is Adding Cars</h1>
        <p>Please enter your email</p>

        <label> Email: </label><br>
        <input type="text" placeholder=""/><br><br>

        <form action="Transation.php" method="post">
            <input type="submit" value="Confirm"/>
        </form>
    </div>
</body>
</html> -->