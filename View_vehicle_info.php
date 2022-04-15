<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<style>
    .controler{
        text-align: center;
        font-size: 3em;
    }
</style>
<body>
    <?php include 'navbar.php' ?>
    <div class="controler">
        <p>This is page for viewing the info of the selected vehicle and can be ordered</p>

        <form action="View_vehicle_accident.php" method="psot">

            <table border="1" width="200" height="200" cellspacing="20" align="center">
                <tr>
                    <td>Vehicle ID</td>
                    <td>Plate_No</td>
                    <td>Status</td>
                    <td>Model</td>
                    
                </tr>
                <tr>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td><input type="submit" value="View accident record"/></td>
                </tr>
            </table>
        </form>

        <br><br><form action="Add_to_order_list.php" method="post">
            <input type="submit" value="Reserve vehicle"/>
        </form>
    </div>
</body>
</html>