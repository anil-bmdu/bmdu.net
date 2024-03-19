<?php

if(isset($_POST['totalprice'])){

    $Price=$_POST['totalprice'];


$pages=$_POST['pages'];
$count= count($pages);

$pagesTotal=$count*1000;

    $totalPrice=$pagesTotal+$Price;

$response = ["addOnPagePrice"=>$pagesTotal,"pageArray"=>$pages,"pageCount"=>$count,"totalPrice"=>$Price];

echo json_encode($response);
}
?>