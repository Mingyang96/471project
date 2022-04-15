<?php include 'navbar.php' ?>
<form action="" method="post">
<select name="city_pass">
    <option value="" disabled selected> --Choose a city--</option>
    <?php
$connection = mysqli_connect("localhost", "root", "88888888", "471project");

$result = mysqli_query($connection, "SELECT DISTINCT City FROM Garage");

while ($row = mysqli_fetch_array($result)){
    ?>
        <option value=<?php  echo $row['City'];?>> <?php echo $row['City'];?> </option>
        <?php
}


?>

<input type="submit" name="search" value="Search"/>
</select>
</form>

<?php
session_start();
if(isset($_POST['search'])) {
    $_SESSION['City'] = $_POST['city_pass'];

    
    $result = mysqli_query($connection, $sql);
    header("Location: View_garage.php");
}
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .h1{
        text-align: center;
        font-size: 10em;
    }
</style>

<body>
    <section id="main page">
        <div class="h1">
            <form action="View_garage.php" method="post">
                <h1>Choose your city: </h1>
                <select name="city">
                    <option value=""> --Choose a city--</option>
                    <option value="city1"> City1 </option>
                    <option value="city2"> City2 </option>
                    <option value="city3"> City3 </option>
                </select>
                <input type="submit" value="Search"/>
            </form>
        </div>
    </section>
</body>
</html> -->