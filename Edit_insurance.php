

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

<?php
    $Insurance_no = $_GET['Insurance_no'];

    $connection = mysqli_connect("localhost", "root", "88888888", "471project");

    $result = mysqli_query($connection, "SELECT * FROM insurance WHERE Insurance_no = '".$Insurance_no."' ");
    $row = mysqli_fetch_array($result)

?>

<body>
    <?php include 'navbar.php' ?>
    <div class="h1">

        <form action="" method="post">
        <label> Company: </label><br>
        <input type="text" name="Company_name" value = <?php echo $row['Company_name'];?>><br><br>

        <label> Amount: </label><br>
        <input type="text" name="Amount" value = <?php echo $row['Amount'];?>><br><br>

            <input type="submit" name = "save" value="Save"/>
        </form>
    </div>
    <?php
        if(isset($_POST['save'])) {
            $Company_name = $_POST['Company_name'];
            $Amount = $_POST['Amount'];
            
    
            //$sql = "INSERT INTO return_car (Vehicle_id, GID, Company_name, Email, Date, Penalty) VALUES ('$Vehicle_id', '$Vehicle_gid', '$Vehicle_company_name', '$Email', '$Date', '$Penalty')";
            $sql2 = "UPDATE insurance SET Company_name = '$Company_name', Amount = '$Amount' WHERE Insurance_no = '".$Insurance_no."'";

            $result = mysqli_query($connection, $sql2);
            //$result = mysqli_query($connection, $sql);
            header("Location: View_vehicle_insurance.php?Vehicle_id=".$row['Vehicle_id']."");
        }
    ?>

</body>
</html>