
<?php


if(isset($_POST['seo'])){

    if($_POST['seo']==1){

        
$price=$_POST['price'];

$totalrice=$_POST['totalprice'];
$id=$_POST['id'];

$totalPrice=$price+$totalrice;


$response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];

echo json_encode($response);


}elseif($_POST['seo']==0){


    $price=$_POST['price'];

$totalrice=$_POST['totalprice'];
$id=$_POST['id'];

$totalPrice=$totalrice-$price;


$response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];

echo json_encode($response);




}





}

if(isset($_POST['onPage'])){

    if($_POST['onPage']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['onPage']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);
    
    
    
    
    }

}

if(isset($_POST['socialMedia'])){


    if($_POST['socialMedia']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['socialMedia']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);
    
    
    
    
    }




}



if(isset($_POST['popup'])){


    if($_POST['popup']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['popup']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);
    
    
    
    
    }




}




if(isset($_POST['contentWriting'])){


    if($_POST['contentWriting']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['contentWriting']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}




if(isset($_POST['tawkLiveChat'])){


    if($_POST['tawkLiveChat']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['tawkLiveChat']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);
    
    }




}




if(isset($_POST['googleMyBusiness'])){


    if($_POST['googleMyBusiness']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['googleMyBusiness']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}




if(isset($_POST['whatsappChat'])){


    if($_POST['whatsappChat']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['whatsappChat']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}




if(isset($_POST['callButton'])){


    if($_POST['callButton']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['callButton']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}





if(isset($_POST['paymentGateway'])){


    if($_POST['paymentGateway']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['paymentGateway']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}






if(isset($_POST['smsApi'])){


    if($_POST['smsApi']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['smsApi']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}







if(isset($_POST['professional_look'])){


    if($_POST['professional_look']==1){


        $price=$_POST['price'];

        $totalrice=$_POST['totalprice'];
        $id=$_POST['id'];
        
        $totalPrice=$price+$totalrice;
        
        
        $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
        
        echo json_encode($response);
    
    }else if($_POST['professional_look']==0){


        $price=$_POST['price'];
    
    $totalrice=$_POST['totalprice'];
    $id=$_POST['id'];
    
    $totalPrice=$totalrice-$price;
    
    
    $response=["price"=>$price,"totalPrice"=>$totalPrice,"id"=>$id];
    
    echo json_encode($response);

    
    }




}




?>