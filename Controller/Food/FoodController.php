<?php
include ("../../Model/FoodModel.php");
$f_name=$dic_price=$price=$result=$res="";
$f_nameerr=$dic_priceerr=$priceerr="";
$count=0;

if(isset($_POST["Submit"])){
 $f_name=$_POST["f_name"];
    if(empty($f_name)|| !preg_match ("/^[a-zA-Z\s]+$/", $f_name) || strlen($f_name)<3){
     $f_nameerr= " Please enter a valid food name!";
       }
       else{
       $count++;
    }

$dic_price=$_POST["dic_price"];
if(empty("$dic_price")){

    $dic_priceerr= " Please enter dic_price!";
    }
    else{
        $count++;
    }

$price=$_POST["price"];
    if(empty("$price")){
        $priceerr= " Please enter price!";
        }
        else{
            $count++;
        }
    }
?>