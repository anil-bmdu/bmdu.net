<?php

if(isset($_POST['totalprice'])){

    $Price=$_POST['totalprice'];
    $totalPrice=$_POST['totalEmailPrice']+$Price;

$response =["emailPrice"=>$_POST['totalEmailPrice'],"totalPrice"=>$totalPrice];

echo json_encode($response);
}
?>