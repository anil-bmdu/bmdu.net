<?php 

if($_POST['website_type']=="Corporate"){


    if($_POST['page_type']==25){
        // $response = ["website_type"=>"Corporate","page"=>25,"pageId"=>"page_20_to_25","websitePrice"=>40000,"totalPrice"=>50000,"id"=>"corporate"];
        $response = ["page_type"=>"25","pagePrice"=>5000,"websitePrice"=>40000,"pageTitle"=>"21-25","totalPrice"=>45000,"id"=>"page_20_to_25"];
        echo json_encode($response);
    


    }elseif($_POST['page_type']==20){
        $response = ["page_type"=>"20","pagePrice"=>0,"websitePrice"=>40000,"pageTitle"=>"9-20","totalPrice"=>40000,"id"=>"page_9_to_20"];
        echo json_encode($response);
        


    }elseif($_POST['page_type']==8){
        $response = ["page_type"=>"8","pagePrice"=>0,"websitePrice"=>40000,"pageTitle"=>"5-8","totalPrice"=>40000,"id"=>"page_5_to_8"];
        echo json_encode($response);
        
        
    }elseif($_POST['page_type']==4){
        $response = ["page_type"=>"4","pagePrice"=>0,"websitePrice"=>40000,"pageTitle"=>"1-4","totalPrice"=>40000,"id"=>"page_1_to_4"];
        echo json_encode($response);

        
    }elseif($_POST['page_type']==50){
        $response = ["page_type"=>"50","pagePrice"=>50000,"websitePrice"=>40000,"pageTitle"=>"Unlimited","totalPrice"=>90000,"id"=>"page_unlimited"];
        echo json_encode($response);

        
    }



    
}elseif(($_POST['website_type']=="Dynamic")){


    if($_POST['page_type']==25){

        // $response = ["website_type"=>"Corporate","page"=>25,"pageId"=>"page_20_to_25","websitePrice"=>40000,"totalPrice"=>50000,"id"=>"corporate"];
        $response = ["page_type"=>"25","pagePrice"=>34000,"websitePrice"=>30000,"pageTitle"=>"21-25","totalPrice"=>64000,"id"=>"page_20_to_25"];
        echo json_encode($response);
    


    }elseif($_POST['page_type']==20){
        $response = ["page_type"=>"20","pagePrice"=>24000,"websitePrice"=>30000,"pageTitle"=>"9-20","totalPrice"=>54000,"id"=>"page_9_to_20"];
        echo json_encode($response);
        


    }elseif($_POST['page_type']==8){
        $response = ["page_type"=>"8","pagePrice"=>0,"websitePrice"=>30000,"pageTitle"=>"5-8","totalPrice"=>30000,"id"=>"page_5_to_8"];
        echo json_encode($response);
        
        
    }elseif($_POST['page_type']==4){
        $response = ["page_type"=>"4","pagePrice"=>0,"websitePrice"=>30000,"pageTitle"=>"1-4","totalPrice"=>30000,"id"=>"page_1_to_4"];
        echo json_encode($response);

        
    }elseif($_POST['page_type']==50){
        $response = ["page_type"=>"50","pagePrice"=>84000,"websitePrice"=>30000,"pageTitle"=>"Unlimited","totalPrice"=>114000,"id"=>"page_unlimited"];
        echo json_encode($response);

        
    }








    
}elseif(($_POST['website_type']=="E Commerce")){


    if($_POST['page_type']==25){

        // $response = ["website_type"=>"Corporate","page"=>25,"pageId"=>"page_20_to_25","websitePrice"=>40000,"totalPrice"=>50000,"id"=>"corporate"];
        $response = ["page_type"=>"25","pagePrice"=>0,"websitePrice"=>100000,"pageTitle"=>"21-25","totalPrice"=>100000,"id"=>"page_20_to_25"];
        echo json_encode($response);
    


    }elseif($_POST['page_type']==20){
        $response = ["page_type"=>"20","pagePrice"=>0,"websitePrice"=>100000,"pageTitle"=>"9-20","totalPrice"=>100000,"id"=>"page_9_to_20"];
        echo json_encode($response);
        


    }elseif($_POST['page_type']==8){
        $response = ["page_type"=>"8","pagePrice"=>0,"websitePrice"=>100000,"pageTitle"=>"5-8","totalPrice"=>100000,"id"=>"page_5_to_8"];
        echo json_encode($response);
        
        
    }elseif($_POST['page_type']==4){
        $response = ["page_type"=>"4","pagePrice"=>0,"websitePrice"=>100000,"pageTitle"=>"1-4","totalPrice"=>100000,"id"=>"page_1_to_4"];
        echo json_encode($response);

        
    }elseif($_POST['page_type']==50){
        $response = ["page_type"=>"50","pagePrice"=>50000,"websitePrice"=>100000,"pageTitle"=>"Unlimited","totalPrice"=>150000,"id"=>"page_unlimited"];
        echo json_encode($response);

        
    }







}elseif(($_POST['website_type']=="Static / Information")){


    if($_POST['page_type']==25){

        // $response = ["website_type"=>"Corporate","page"=>25,"pageId"=>"page_20_to_25","websitePrice"=>40000,"totalPrice"=>50000,"id"=>"corporate"];
        $response = ["page_type"=>"25","pagePrice"=>21000,"websitePrice"=>40000,"pageTitle"=>"21-25","totalPrice"=>45000,"id"=>"page_20_to_25"];
        echo json_encode($response);
    


    }elseif($_POST['page_type']==20){
        $response = ["page_type"=>"20","pagePrice"=>16000,"websitePrice"=>40000,"pageTitle"=>"9-20","totalPrice"=>40000,"id"=>"page_9_to_20"];
        echo json_encode($response);
        


    }elseif($_POST['page_type']==8){
        $response = ["page_type"=>"8","pagePrice"=>4000,"websitePrice"=>40000,"pageTitle"=>"5-8","totalPrice"=>40000,"id"=>"page_5_to_8"];
        echo json_encode($response);
        
        
    }elseif($_POST['page_type']==4){
        $response = ["page_type"=>"4","pagePrice"=>0,"websitePrice"=>40000,"pageTitle"=>"1-4","totalPrice"=>40000,"id"=>"page_1_to_4"];
        echo json_encode($response);

        
    }elseif($_POST['page_type']==50){
        $response = ["page_type"=>"50","pagePrice"=>46000,"websitePrice"=>40000,"pageTitle"=>"Unlimited","totalPrice"=>70000,"id"=>"page_unlimited"];
        echo json_encode($response);

        
    }







}





 

?>
