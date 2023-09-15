<?php
include '../../Model/FoodModel/FoodTriggerModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if (isset($_POST['submit2'])) {

    $bid = $sales = "";
   
        $bid = input_data($_POST['bid']);
        $sales = input_data($_POST['sales']);
        $res = trigger2($bid,$sales);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    }


if (isset($_POST['submit3'])) {
   
    $eid = $efname = "";
    
        $eid = input_data($_POST['eid']);
        $efname = input_data($_POST['efname']);
        $res = trigger3($eid,$efname);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    
}


if (isset($_POST['submit4'])) {
   
    $sid = $quan = "";
    
        $sid = input_data($_POST['sid']);
        $quan = input_data($_POST['quan']);
        $res = trigger4($sid,$quan);
        if($res){
            echo "trigger mission done";
        }
        else{
            echo"trigger mission failed";
        }
    
}
?>