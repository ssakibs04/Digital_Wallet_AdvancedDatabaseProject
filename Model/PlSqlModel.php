<?php
include '../Model/DBConnection.php';
function plsqldb1($eid,$esal){

    $conn = connection();
    $sql = 'BEGIN hotel_pack1.emp_sal_up(:eid, :esal); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':eid',$eid,32);
    oci_bind_by_name($stmt,':esal',$esal,32);
    return oci_execute($stmt);
    
}

function plsqldb2($eid){

    $conn = connection();
    $sql = 'BEGIN hotel_pack2.delete_employee(:eid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':eid',$eid,32);
    return oci_execute($stmt);
    
}
?>