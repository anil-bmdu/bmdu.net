<?php

if(isset($_POST['totalprice'])){

    $Price=$_POST['totalprice'];
    $totalPrice=3600+$Price;


$response =["hosting_type"=>"Yes","hostingPrice"=>3600,"totalPrice"=>$totalPrice,"id"=>"hosting_yes"];

// $_SESSION['response'] = $response;


echo json_encode($response);
}else{

}
?>