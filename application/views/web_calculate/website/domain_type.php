<?php

if(isset($_POST['totalPrice'])){

    $Price=$_POST['totalPrice'];
    $totalPrice=900+$Price;


$response =["domain_type"=>"Yes","domainPrice"=>900,"totalPrice"=>$totalPrice,"id"=>"domain_yes"];


echo json_encode($response);
}
?>