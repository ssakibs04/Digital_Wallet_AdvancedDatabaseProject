<?php
include '../Model/DBConnection.php';
function employee($fullname, $email, $phone, $commission, $salary, $dob,$mgr,  $branch)
{
    $conn = connection();
    $sql = oci_parse($conn, "insert into 
    employee(
    e_id,
    e_name,
    e_email,
    e_commission,
    e_salary,
    e_dob,
    mgr,
    phone_id, 
    branch_name)
    VALUES (
    emp_seq.nextVal,
    '$fullname',
    '$email',
    $commission,
    $salary,
    to_char(to_date('$dob', 'YYYY-MM-DD')), 
   
    $mgr,
    '$phone',
    '$branch')");
    $res = oci_execute($sql);
    return $res;
}
