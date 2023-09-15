<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/Header.css">
    
    <title>Trigger</title>
</head>
<body>
<?php

include '../../View/Header.php';
include '../../Model/FoodModel/FoodTriggerModel.php';
?>
<div class="title">
    <h1>Trigger Operation</h1>
</div>

<div class="heading-table">
    <p>Food Creating a trigger to automatically store employee  salary update information in a table to identify when and how much salary increased</p>
</div>
<div class="info">
<form action="../../Controller/Food/FoodTriggerCheck.php" method="POST" name="form2" >
     <label for="bid">Branch ID: </label>
    <input type="number" id="bid" name="bid" required>
    <label for="sales">New Sales Amount: </label>
    <input type="number" id="sales" name="sales" required>
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>
</div>
</body>
</html>