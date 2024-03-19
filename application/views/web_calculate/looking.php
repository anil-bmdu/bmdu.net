<?php
if(($_POST['website_type']=="One page")){

    $website_type="One page";
    $totalPrice=10000;


$response = ["website_type"=>$website_type,"page"=>1,"pageId"=>"page_1_to_4","websitePrice"=>10000,"totalPrice"=>10000,"id"=>"one_page"];
echo json_encode($response);
    
 }elseif(($_POST['website_type']=="Corporate")){

$website_type="Corporate";
$totalPrice=40000;

$response = ["website_type"=>$website_type,"page"=>20,"pageId"=>"page_9_to_20","websitePrice"=>40000,"totalPrice"=>40000,"id"=>"corporate","pagePrice"=>0];

echo json_encode($response);
}elseif(($_POST['website_type']=="Dynamic")){
    $website_type= "Dynamic";

   
    
$response = ["website_type"=>$website_type,"page"=>8,"pageId"=>"page_5_to_8","websitePrice"=>30000,"totalPrice"=>30000,"id"=>"dynamic","pagePrice"=>0];
echo json_encode($response);
}elseif(($_POST['website_type']=="E Commerce")){
    $website_type="E Commerce";
    $response = ["website_type"=>$website_type,"page"=>25,"pageId"=>"page_20_to_25","websitePrice"=>100000,"totalPrice"=>100000,"id"=>"e_commerce","pagePrice"=>0];
    echo json_encode($response);


}elseif(($_POST['website_type']=="Static / Information")){

    $website_type= "Static / Information";
    $response = ["website_type"=>$website_type,"page"=>4,"pageId"=>"page_1_to_4","websitePrice"=>10000,"totalPrice"=>10000,"id"=>"static","pagePrice"=>0];
    echo json_encode($response);


}





?>