<?php
include'../../Model/DBConnection.php';
//view
function FoodShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from portal") ;
     $res = oci_execute($sql);
     return $sql;
}

//insert
function FoodInsert($user_name,$user_phone,$user_nid,$user_balance,$user_due){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO portal(user_name,user_phone,user_nid,user_balance,user_due) VALUES (seq_portal.nextval,'$user_name','$user_phone','$user_nid','$user_balance','$user_due')") ;
    $res = oci_execute($sql);
    return $res;
}
?>