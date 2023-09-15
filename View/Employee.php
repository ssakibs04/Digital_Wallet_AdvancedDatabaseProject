<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/employee.css">
    <title>Employee</title>
</head>

<body>
    <?php
    include '../View/Header.php';
    ?>

    <h1>Merchant</h1>

    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">

            <form action="../Controller/employeeCheck.php" method="POST">


                <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label">
                        Full Name
                    </label>
                    <input type="text" name="fullname" id="name" class="formbold-form-input" />
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="email" class="formbold-form-label"> Email </label>
                        <input type="email" name="email" id="email" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="phone" class="formbold-form-label"> Phone number </label>
                        <input type="number" name="phone" id="phone" class="formbold-form-input" />
                    </div>
                </div>

                <!-- commission and limitation start -->
                <div class="formbold-input-flex">
                    <div>
                        <label for="commision" class="formbold-form-label"> Commission</label>
                        <input type="number" name="commission" id="commitssion" class="formbold-form-input" />
                    </div>
                    <div>
                        <label for="salary" class="formbold-form-label"> Limitation </label>
                        <input type="number" name="salary" id="salary" class="formbold-form-input" />
                    </div>
                </div>
                <!-- commission and salary end -->

                <!-- dob and hiredate start -->
                <div class="formbold-input-flex">
                    <div>
                        <label for="dob" class="formbold-form-label"> Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="formbold-form-input" />
                    </div>
                   
                </div>
                <!-- dob and hiredate end -->

                <!-- Manager and Job start -->
                <div class="formbold-input-flex">
                    <div>
                        <label for="mgr" class="formbold-form-label"> User Serial</label>
                        <input type="number" name="mgr" id="mgr" class="formbold-form-input" />
                    </div>
                  <!--  <div>
                        <label for="Job" class="formbold-form-label"> Occupation </label>
                        <input type="text" name="job" id="Job" class="formbold-form-input" />
                    </div>-->
                </div>
                <!-- dob and hiredate end -->

                <!-- zip and branch id start 
                <div class="formbold-input-flex">
                    <div>
                        <label for="Zip Code" class="formbold-form-label"> Zip Code</label>
                        <input type="number" name="zip" id="zip-code" class="formbold-form-input" />
                    </div>-->
                    <div>
                        <label for="branch" class="formbold-form-label">Branch Id</label>
                        <input type="number" name="branch" id="branch" class="formbold-form-input" />
                    </div>
                </div>
                <!-- zip and Branch id end -->
                <input type="submit" name="employee" value="Register" class="formbold-btn">
            </form>
        </div>
    </div>
</body>

</html>