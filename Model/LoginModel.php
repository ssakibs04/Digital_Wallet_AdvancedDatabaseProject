<?php
include'../Model/DBConnection.php';
function Login($email,$password){
   
    $conn = connection();
    $sql = oci_parse($conn, "select * from owner where o_email='$email' and o_password='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_assoc($sql);
    return $row;
   
    
}

?>