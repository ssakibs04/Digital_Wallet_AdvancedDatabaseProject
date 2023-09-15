<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PlSql.css">

    <title>PLSQL</title>
</head>

<body>
    <?php

    include "../Controller/PlSqlCheck.php";


    include '../View/Header.php';
    ?>
    <div class="title">
        <h1>Procedures and function</h1>
    </div>
    <div class="heading-table">
        <p>Increase Merchantss Limitation</p>
    </div>
    <div class="info">

        <form action="" method="POST" name="form1">
            <label for="eid">Merchant ID: </label>
            <input type="number" id="eid" name="eid" requird>

            <label for="esal">New Limitation: </label>
            <input type="number" id="esal" name="esal" required>

            <br><br>
            <input class="formbold-btn" type="submit" id="submit1" name="submit1" value="Submit">
        </form>

    </div>

    <!-- 2nd ques -->
    <div class="heading-table">
        <p>Delete Merchant by giving input id</p>
    </div>
    <div class="info">

        <form action="" method="POST" name="form2" required>
            <label for="cid">Merchant ID: </label>
            <input type="number" id="cid" name="eid">

            <br><br>
            <input class="formbold-btn" type="submit" id="submit2" name="submit2" value="Submit">
        </form>

    </div>

</body>

</html>