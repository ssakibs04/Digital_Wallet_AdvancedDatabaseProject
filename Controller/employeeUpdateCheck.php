<?php
include '../Model/employeeUpdateModel.php';
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['employee'])) {
    $fullname = $email = $phone = $commission = $salary = $mgr = $job = $zip = $branch = "";
    $e_id = input_data($_POST['e_id']);
    $fullname = input_data($_POST['fullname']);
    $email = input_data($_POST['email']);
    $phone = input_data($_POST['phone']);
    $commission = input_data($_POST['commission']);
    $salary = input_data($_POST['salary']);
    $mgr = input_data($_POST['mgr']);
    $job = input_data($_POST['job']);
    $zip = input_data($_POST['zip']);
    $branch = input_data($_POST['branch']);
    $res = employeeUpdate($e_id, $fullname, $email, $phone, $commission, $salary, $mgr ,$job ,$zip ,$branch);
    if ($res) {
        echo "Successful";
    } else {
        echo "failed";
    }
}

