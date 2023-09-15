<?php
include '../Model/DBConnection.php';
function view1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from customer_view") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from reservaton_view") ;
    $res = oci_execute($sql);
    return $sql;
}
?>