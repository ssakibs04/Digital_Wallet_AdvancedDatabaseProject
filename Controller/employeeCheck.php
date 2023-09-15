<?php
include '../Model/employeeModel.php';
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['employee'])) {
    $fullname = $email = $phone = $commission = $salary = $dob  = $mgr = $branch = "";
    $fullname = input_data($_POST['fullname']);
    $email = input_data($_POST['email']);
    $phone = input_data($_POST['phone']);
    $commission = input_data($_POST['commission']);
    $salary = input_data($_POST['salary']);
    $dob = input_data($_POST['dob']);
    
    $mgr = input_data($_POST['mgr']);
   // $job = input_data($_POST['job']);
   // $zip = input_data($_POST['zip']);
    $branch = input_data($_POST['branch']);
    $res = employee($fullname, $email, $phone, $commission, $salary, $dob,  $mgr ,$branch);
    if ($res) {
        echo "Successful";
    } else {
        echo "failed";
    }
}