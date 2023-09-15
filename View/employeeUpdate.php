<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/employee.css">
    <title>Merchant</title>
</head>

<body>
    <?php
    include '../View/Header.php';
    include '../Model/employeeUpdateModel.php';
    ?>


<h1>Merchant Update</h1>
    <div class="search">
        <form action="" method="GET">
            <input type="text" name="e_id" placeholder="Enter Merchant Id">
            <input type="submit" value="Edit" name="edit" class="formbold-btn">
        </form>
    </div>

    <?php
    function input_data ($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (array_key_exists('edit', $_GET)) {
        $res = findEmployee(input_data($_GET['e_id']));
        oci_fetch($res);
        if(!oci_result($res, 'E_ID') == input_data($_GET['e_id'])){
            echo ('Merchant Not found');
        }

    } else if (array_key_exists('delete', $_GET)) {
        
    }
    ?>





    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="../Controller/employeeUpdateCheck.php" method="POST">

                <div class="formbold-input-flex">
                    <div>
                        <label for="e_id" class="formbold-form-label"> Merchant Id </label>
                        <input type="number" name="e_id" id="e_id" class="formbold-form-input" value="<?php echo(isset($res) ?oci_result($res, 'E_ID') : ''); ?>" />
                    </div>
                    <div>
                    <label for="address" class="formbold-form-label">Full Name</label>
                    <input type="text" name="fullname" id="name" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'E_NAME') : ''); ?>"/>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="email" class="formbold-form-label"> Email </label>
                        <input type="email" name="email" id="email" class="formbold-form-input" value="<?php echo(isset($res) ?oci_result($res, 'E_EMAIL') : ''); ?>" />
                    </div>
                    <div>
                        <label for="phone" class="formbold-form-label"> Phone number </label>
                        <input type="number" name="phone" id="phone" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'PHONE_ID') : ''); ?>"/>
                    </div>
                </div>

                <!-- commission and salary start -->
                <div class="formbold-input-flex">
                    <div>
                        <label for="commision" class="formbold-form-label"> Commission</label>
                        <input type="number" name="commission" id="commitssion" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'E_COMMISSION') : ''); ?>" />
                    </div>
                    <div>
                        <label for="salary" class="formbold-form-label"> Limitation </label>
                        <input type="number" name="salary" id="salary" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'E_SALARY') : ''); ?>"/>
                    </div>
                </div>
                <!-- commission and salary end -->

                <!-- Manager and Job start -->
                <div class="formbold-input-flex">
                    <div>
                        <label for="mgr" class="formbold-form-label"> Marchant Id</label>
                        <input type="number" name="mgr" id="mgr" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'MGR'): ''); ?>"/>
                    </div>
                  <!--  <div>
                        <label for="Job" class="formbold-form-label"> Job </label>
                        <input type="text" name="job" id="job" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'JOB'): ''); ?>"/>
                    </div>-->
                </div>
                <!-- dob and hiredate end -->

                <!-- zip and branch id start -->
                <div class="formbold-input-flex">
                  <!--  <div>
                        <label for="Zip Code" class="formbold-form-label"> Zip Code</label>
                        <input type="number" name="zip" id="zip-code" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'ZIP_CODE'): ''); ?>"/>
                    </div>-->
                    <div>
                        <label for="branch" class="formbold-form-label">Branch Id</label>
                        <input type="text" name="branch" id="branch" class="formbold-form-input" value="<?php echo(isset($res) ? oci_result($res, 'BRANCH_NAME'): ''); ?>"/>
                    </div>
                </div>
                <!-- zip and Branch id end -->
                <input type="submit" name="employee" value="Register" class="formbold-btn">
            </form>
        </div>
    </div>
</body>

</html>