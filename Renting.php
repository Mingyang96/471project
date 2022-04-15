<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<style>
    .selectCity{
        text-align: center;
        font-size: 3em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div class="selectCity">
        <p>This is Renting page</p>
        <form action="View_garage.php" method="post">
            <lable>Choose your city: </lable>
            <select name="city">
                <option value=""> --Choose a city--</option>
                <option value="city1"> City1 </option>
                <option value="city2"> City2 </option>
                <option value="city3"> City3 </option>
            </select>
            <input type="submit" value="Search"/>
        </form>
    </div>
</body>
</html>