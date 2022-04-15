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
        <h1 >This is edit car accident record page</h1>

        <label> Year: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Month: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Day: </label><br>
        <input type="text" placeholder=""/><br><br>

        <label> Description: </label><br>
        <input type="text" placeholder=""/><br><br>


        <form action="View_vehicle_accident_record.php" method="post">
            <input type="submit" value="Save"/>
        </form>
    </div>
</body>
</html>