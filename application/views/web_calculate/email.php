<?php

if(isset($_POST['totalprice'])){

    $Price=$_POST['totalprice'];
    $totalPrice=1200+$Price;


$response =["hosting_type"=>"Yes","emailPrice"=>1200,"totalPrice"=>$totalPrice,"id"=>"email_yes"];


echo json_encode($response);
}
?>