<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Master</title>
    <link rel="stylesheet" href="style.css">
</head>


<style>
    .h1{
        text-align: center;
        color: #FFFFFF;
        font-size: 5em;
    }
    body {
        background-image: url('Images/BG.jpg');
    }
</style>
<?php include 'navbar.php' ?>
    <body>
    <section id="main page">
        <div class="h1">
            <form action="View_garage.php" method="post">
                <h1>Rent Master</h1>
                <h1>Rent like a master </h1>
                <select name="city_pass">
                <option value="" disabled selected> --Choose a city--</option>
                    <?php
                        $connection = mysqli_connect("localhost", "root", "88888888", "471project");

                        $result = mysqli_query($connection, "SELECT DISTINCT City FROM Garage");

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value="  .$row["City"]. ">" .$row["City"]. "</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Search"/>
            </form>
            <br><img src="Images/carBackgrand.jpg" alt="MDN" style="width:300px;height:400px;">
        </div>
    </section>
    <?php
        session_start();
        if(isset($_POST['search'])) {
            $_SESSION['City'] = $_POST['city_pass'];

            $result = mysqli_query($connection, $sql);
            header("Location: View_garage.php");
        }
    ?>
</body>
</html>