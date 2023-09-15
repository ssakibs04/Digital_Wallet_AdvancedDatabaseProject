<?php  
include '../../Model/DBConnection.php';
 
 function trigger2($bid,$sales){
    $conn = connection();
    $sql = oci_parse($conn,"update branch set sales = '$sales' where branch_id = $bid") ;
    $res = oci_execute($sql);
    return $res;
 }
 function trigger3($eid,$efname){
    $conn = connection();
    $sql = oci_parse($conn,"update employee set e_fname = '$efname' where e_id = $eid") ;
    $res = oci_execute($sql);
    return $res;
 }

 function trigger4($sid,$quan){
    $conn = connection();
    $sql = oci_parse($conn,"update sales set quantity = '$quan' where sales_id = $sid") ;
    $res = oci_execute($sql);
    return $res;
 }
 function logShow1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from emp_dml_log") ;
    $res = oci_execute($sql);
    return $sql;
 }
 function logShow2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from emp_sal_uplog") ;
    $res = oci_execute($sql);
    return $sql;
 }
?>