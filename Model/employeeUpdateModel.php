<?php
include '../Model/DBConnection.php';


function findEmployee($e_id)
{
    $conn = connection();

    $sql = oci_parse($conn, "select * from employee where e_id = $e_id");
    oci_execute($sql);

    return $sql;
}
function employeeUpdate($e_id, $fullname, $email, $phone, $commission, $salary, $mgr ,$job ,$zip ,$branch){
    $conn = connection();
    $sql = oci_parse($conn, "UPDATE employee SET e_name = '$fullname', e_email =' $email', e_commission = $commission, e_salary = $salary, mgr = $mgr, job = '$job',
    zip_code = $zip, phone_id = $phone, branch_name = '$branch' WHERE E_ID = $e_id");
    $res = oci_execute($sql);
    return $res;
}