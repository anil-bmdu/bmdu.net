$(document).ready(function(){
    // Wesite Type 
    $('#emailCount').hide();
    $(document).delegate('[name="website_type"]', 'change', function(){
    let website_type = $(this).val();
    let website_type_id = $(this).attr('id');
    $('[name="website_type"]').parent('li').removeClass('active');
    $('[name="page_type"]').parent('li').removeClass('active');
    $('#domain_yes').parent('li').removeClass('active');
    $('[name="domain"]').prop('checked', false);
    $('#hosting_yes').parent('li').removeClass('active');
    $('[name="hosting"]').prop('checked', false);
    $('[name="page_type"]').parent('li').removeClass('active');
    $('[name="email"]').prop('checked', false);
    $('#email_yes').parent('li').removeClass('active');
    $('#do_you_domain').css('display', 'none');
    $('#do_you_hosting').css('display', 'none');
    $('#do_you_emails').css('display', 'none');
    $('[name="pages_name[]"]').prop('checked', false);
    $('[name="e_commerce_tec[]"]').prop('checked', false);
    $('[type="checkbox"]').prop('checked', false);
    $('#seo_box').css('display', 'none');
    $('#on_page_box').css('display', 'none');
    $('#social_media_box').css('display', 'none');
    $('#popup_box').css('display', 'none');
    $('#banner_dynamic_box').css('display', 'none');
    $('#admin_panel_box').css('display', 'none');
    $('#edit_page_box').css('display', 'none');
    $('#manage_pages_box').css('display', 'none');
    $('#content_writing_box').css('display', 'none');
    $('#live_chat_box').css('display', 'none');
    $('#google_business_box').css('display', 'none');
    $('#whatsapp_chat_box').css('display', 'none');
    $('#call_button_box').css('display', 'none');
    $('#payment_gateway_box').css('display', 'none');
    $('#sms_api_box').css('display', 'none');
    $('#professional_look_box').css('display', 'none');
    $('#appendPages').html('');
    $('#email_count').val('1');
    $('#emailCount').css('display', 'none');
    if(website_type != ''){
    $.ajax({
    url: 'looking.php',
    method: 'POST',
    data: {website_type: website_type, website_type_id: website_type_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    if(data.website_type == website_type)
    {
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#looking_for').css('display', 'flex');
    $('#mobile_looking_for').css('display', 'flex');
    $('#package_name').text(data.website_type);
    $('#mobile_package_name').text(data.website_type);
    $('#website_type_status').text(data.websitePrice);
    $('#page_type_status').text(data.pagePrice);

    $('#mobile_website_type_status').text(data.websitePrice);
    $('#'+data.pageId).parent('li').addClass('active');
    $('#no_of_page').css('display', 'flex');
    $('#mobile_no_of_page').css('display', 'flex');
    $('#page_type').text(data.page);
    $('#mobile_page_type').text(data.page);
    if(data.website_type == 'One page')
    {
        $('#page_5_to_8').attr('disabled', true);
        $('#page_9_to_20').attr('disabled', true); 
        $('#page_20_to_25').attr('disabled', true); 
        $('#page_unlimited').attr('disabled', true); 
    }else{
        $('#page_5_to_8').attr('disabled', false);
        $('#page_9_to_20').attr('disabled', false); 
        $('#page_20_to_25').attr('disabled', false); 
        $('#page_unlimited').attr('disabled', false);
    }
    }
    }
    });
    }
    });

    // Page Type 
    $(document).delegate('[name="page_type"]', 'change', function(){
    
        let page_type = $(this).val();
    let page_type_id = $(this).attr('id');
    $('#do_you_domain').css('display', 'none');
    $('#do_you_hosting').css('display', 'none');
    $('#do_you_emails').css('display', 'none');
    $('#domain_yes').parent('li').removeClass('active');
    $('[name="domain"]').prop('checked', false);
    $('#hosting_yes').parent('li').removeClass('active');
    $('[name="hosting"]').prop('checked', false);
    $('[name="page_type"]').parent('li').removeClass('active');
    $('[name="email"]').prop('checked', false);
    $('#email_yes').parent('li').removeClass('active');
    $('[name="pages_name[]"]').prop('checked', false);
    $('[name="e_commerce_tec[]"]').prop('checked', false);
    $('[type="checkbox"]').prop('checked', false);
    $('#seo_box').css('display', 'none');
    $('#on_page_box').css('display', 'none');
    $('#social_media_box').css('display', 'none');
    $('#popup_box').css('display', 'none');
    $('#banner_dynamic_box').css('display', 'none');
    $('#admin_panel_box').css('display', 'none');
    $('#edit_page_box').css('display', 'none');
    $('#manage_pages_box').css('display', 'none');
    $('#content_writing_box').css('display', 'none');
    $('#live_chat_box').css('display', 'none');
    $('#google_business_box').css('display', 'none');
    $('#whatsapp_chat_box').css('display', 'none');
    $('#call_button_box').css('display', 'none');
    $('#payment_gateway_box').css('display', 'none');
    $('#sms_api_box').css('display', 'none');
    $('#professional_look_box').css('display', 'none');
    $('#appendPages').html('');
    $('#email_count').val('1');
    $('#emailCount').css('display', 'none');
    
    let website_type=$('#package_name').html();
    
    if(page_type != '' && $(this).attr('disabled', false)){
    $.ajax({
    url: 'page_type.php',
    method: 'POST',
    data: {website_type:website_type,page_type: page_type, page_type_id: page_type_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    if(data.page_type == page_type)
    {
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#no_of_page').css('display', 'flex');
    $('#mobile_no_of_page').css('display', 'flex');
    $('#page_type').text(data.pageTitle);
    $('#mobile_page_type').text(data.pageTitle);
    $('#page_type_status').text(data.pagePrice);
    $('#mobile_page_type_status').text(data.pagePrice);
    $('#page_1_to_4').attr('disabled', data.page1To4?true:false);
    $('#page_5_to_8').attr('disabled', data.page1To4?true:false);
    $('#page_9_to_20').attr('disabled', data.page1To4?true:false);
    }
    }
    });   
    }
    });
    // Domain Type
    $(document).delegate('[name="domain"]', 'change', function(){
    let domain_type = $(this).val();
    let domain_type_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();

    if($(this).is(':checked')){
    if(domain_type != ''){
    $.ajax({
    url: 'domain_type.php',
    method: 'POST',
    data: {totalPrice:totalprice,domain_type: domain_type, domain_type_id: domain_type_id},
    success: function(response){
    let data = JSON.parse(response);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_domain').css('display', 'flex');
    $('#mobile_do_you_domain').css('display', 'flex');
    $('#domain_type_status').text(data.domainPrice);
    $('#mobile_domain_type_status').text(data.domainPrice);
    }
    });
    }
    }
    });
    // Hosting Type
    $(document).delegate('[name="hosting"]', 'change', function(){
    let hosting_type = $(this).val();
    let hosting_type_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();


    if($(this).is(':checked')){
    if(hosting_type != ''){
    $.ajax({
    url: 'hosting_type.php',
    method: 'POST',
    data: {totalprice: totalprice ,hosting_type: hosting_type, hosting_type_id: hosting_type_id},
    success: function(response){
    let data = JSON.parse(response);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_hosting').css('display', 'flex');
    $('#mobile_do_you_hosting').css('display', 'flex');
    $('#hosting_type_status').text(data.hostingPrice);
    $('#mobile_hosting_type_status').text(data.hostingPrice);
    }
    });
    }
    }
    });
    // Emails Ids
    $(document).delegate('[name="email"]', 'change', function(){
    $('#emailCount').show();
    let email = $(this).val();
    let email_id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();


    if($(this).is(':checked')){
    if(email != ''){
    $.ajax({
    url: 'email.php',
    method: 'POST',
    data: {totalprice: totalprice, email: email, email_id: email_id},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#'+data.id).parent('li').addClass('active');
    $('#do_you_emails').css('display', 'flex');
    $('#mobile_do_you_emails').css('display', 'flex');
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    });
    }
    }
    });
    // Email Count => Plus Option
    $(document).delegate('#plus', 'click', function(){
        $qty=0;
    let qty = $('[name="qty"]').val();
     $totalEmailPrice=1200;
    let totalEmailPrice = parseInt(qty) * 1200;
    if($('[name="email"]').is(':checked') == true){
    if(qty == 1)
    {
    $(this).prop('disabled', true);
    return false;
    }else{
    
        if(totalEmailPrice > 0){
            let totalprice=$('.grandTotal').html();

            $.ajax({
    url: 'email_count.php',
    method: 'POST',
    data: {totalprice:totalprice, inc: 1, totalEmailPrice: totalEmailPrice},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);  
    $('.grandTotal').text(data.totalPrice);
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    })
    }
    }
}
    });
    // Email Count => Minus Option
    $(document).delegate('#minus', 'click', function(){
    let qty = $('[name="qty"]').val();
    if($('[name="email"]').is(':checked') == true){
    if(qty > 0){
    let totalEmailPrice =totalEmailPrice-parseInt(qty) * 1200;
    if(totalEmailPrice > 0){
    $.ajax({
    url: 'process/email_count.php',
    method: 'POST',
    data: {totalEmailPrice: totalEmailPrice, dec: 1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);  
    $('.grandTotal').text(data.totalPrice);
    $('#email_type_status').text(data.emailPrice);
    $('#mobile_email_type_status').text(data.emailPrice);
    }
    })
    }
    }
    }
    });
     // ecommarce Section
     $(document).delegate('[name="e_commerce_tec[]"]', 'change', function(){
        let pages = [];
        $('[name="e_commerce_tec[]"]:checked').each(function(){
        if($(this).is(':checked')){
        pages.push($(this).val());
        }
        });
        if(pages.length > 0){
    
            let totalprice=$('.grandTotal').html();
    
    
        $.ajax({    
        url: 'page_count.php',
        method: 'POST',
        data: {totalprice:totalprice,pages: pages, pageData:1},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        let total=data.totalPrice;
        
        $('.grandTotal').text(total);
        $('#mobile_page_type_status').text(data.addOnPagePrice);
        $('#appendPages_').html(data.pageArray);
        $('#mobile_appendPages').html(data.pageArray);
        }
        });
        }
        });
    // Pages Section
    $(document).delegate('[name="pages_name[]"]', 'change', function(){
    let pages = [];
    $('[name="pages_name[]"]:checked').each(function(){
    if($(this).is(':checked')){
    pages.push($(this).val());
    }
    });
    if(pages.length > 0){

        let totalprice=$('.grandTotal').html();


    $.ajax({    
    url: 'page_count.php',
    method: 'POST',
    data: {totalprice:totalprice,pages: pages, pageData:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    let total=data.totalPrice;
    
    $('.grandTotal').text(total);
    $('#mobile_page_type_status').text(data.addOnPagePrice);
    $('#appendPages').html(data.pageArray);
    $('#mobile_appendPages').html(data.pageArray);
    }
    });
    }
    });

    // Add Ons Page Section
    $(document).delegate('#addMore', 'click', function(){
        let pageName = $('#addPage').val();
        if(pageName != ''){
        $('#multiple_check').append('<li><input type="checkbox" name="pages_name[]" value="'+pageName+'">'+pageName+'</li>');
        $('#addPage').val('');
        }else{
            alert('Please Enter Page Name');
        }
    });

    // Add Ons Page Section
    $(document).delegate('#seo', 'change', function(){
    let price = $(this).attr('price');
    let id = $(this).attr('id');
    let totalprice=$('.grandTotal').html();
    if($(this).is(':checked')){
    $.ajax({
    url: 'special_requirements.php',
    method: 'POST',
    data: {totalprice:totalprice ,price: price, id: id, seo:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#seo_price').text(data.price);
    $('#mobile_seo_price').text(data.price);
    $('#seo_box').css('display', 'flex');
    $('#mobile_seo_box').css('display', 'flex');
    }
    });
    }else{
   
        let totalprice=$('.grandTotal').html();

        $.ajax({
    url:'special_requirements.php',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, seo:0},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('#seo_box').css('display', 'none')
    $('#mobile_seo_box').css('display', 'none');
    $('.grandTotal').text(data.totalPrice);
    }
    });
    }
    });

$(document).delegate('#onPage', 'change', function(){
let price = $(this).attr('price');
let id = $(this).attr('id');
if($(this).is(':checked')){

    
    let totalprice=$('.grandTotal').html();


$.ajax({
url: 'special_requirements.php',
method: 'POST',
data: {totalprice:totalprice ,price: price, id: id, onPage:1},
success: function(response){
let data = JSON.parse(response);
console.log(data);
$('.grandTotal').text(data.totalPrice);
$('#on_page_price').text(data.price);
$('#mobile_on_page_price').text(data.price);
$('#on_page_box').css('display', 'flex');
$('#mobile_on_page_box').css('display', 'flex');
}
});
}else{

    
    let totalprice=$('.grandTotal').html();

$.ajax({
url: 'special_requirements.php',
method: 'POST',
data: {totalprice:totalprice,price: price, id: id, onPage:0},
success: function(response){
let data = JSON.parse(response);
console.log(data);
$('#on_page_box').css('display', 'none');
$('#mobile_on_page_box').css('display', 'none');
$('.grandTotal').text(data.totalPrice);
}
});
}
});



$(document).delegate('#socialMedia', 'change', function(){
    let price = $(this).attr('price');
    let id = $(this).attr('id');
    if($(this).is(':checked')){
        
    let totalprice=$('.grandTotal').html();

    $.ajax({
    url: 'special_requirements.php',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, socialMedia:1},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('.grandTotal').text(data.totalPrice);
    $('#social_media_price').text(data.price);
    $('#mobile_social_media_price').text(data.price);
    $('#social_media_box').css('display', 'flex');
    $('#mobile_social_media_box').css('display', 'flex');
    }
    });
    }else{

        
    let totalprice=$('.grandTotal').html();

    $.ajax({
    url: 'special_requirements.php',
    method: 'POST',
    data: {totalprice:totalprice,price: price, id: id, socialMedia:0},
    success: function(response){
    let data = JSON.parse(response);
    console.log(data);
    $('#social_media_box').css('display', 'none');
    $('#mobile_social_media_box').css('display', 'none');
    $('.grandTotal').text(data.totalPrice);
    }
    });
    }
    });

    $(document).delegate('#popup', 'change', function(){
        let price = $(this).attr('price');
        let id = $(this).attr('id');
        if($(this).is(':checked')){
            
    let totalprice=$('.grandTotal').html();

        $.ajax({
        url: 'special_requirements.php',
        method: 'POST',
        data: {totalprice:totalprice,price: price, id: id, popup:1},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        $('.grandTotal').text(data.totalPrice);
        $('#popup_price').text(data.price);
        $('#mobile_popup_price').text(data.price);
        $('#popup_box').css('display', 'flex');
        $('#mobile_popup_box').css('display', 'flex');
        }
        });
        }else{

            
    let totalprice=$('.grandTotal').html();


        $.ajax({
        url: 'special_requirements.php',
        method: 'POST',
        data: {totalprice:totalprice,price: price, id: id, popup:0},
        success: function(response){
        let data = JSON.parse(response);
        console.log(data);
        $('#popup_box').css('display', 'none');
        $('#mobile_popup_box').css('display', 'none');
        $('.grandTotal').text(data.totalPrice);
        }
        });
        }
        });

        $(document).delegate('#contentWriting', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){
            
            
    let totalprice=$('.grandTotal').html();

            
                $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, contentWriting:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#content_writing_price').text(data.price);
            $('#mobile_content_writing_price').text(data.price);
            $('#content_writing_box').css('display', 'flex');
            $('#mobile_content_writing_box').css('display', 'flex');
            }
            });
            }else{

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, contentWriting:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#content_writing_box').css('display', 'none');
            $('#mobile_content_writing_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });


        $(document).delegate('#tawkLiveChat', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, tawkLiveChat:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#live_chat_price').text(data.price);
            $('#mobile_live_chat_price').text(data.price);
            $('#live_chat_box').css('display', 'flex');
            $('#mobile_live_chat_box').css('display', 'flex');
            }
            });
            }else{
                
           let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, tawkLiveChat:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#live_chat_box').css('display', 'none');
            $('#mobile_live_chat_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#googleMyBusiness', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
    let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, googleMyBusiness:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#google_business_price').text(data.price);
            $('#mobile_google_business_price').text(data.price);
            $('#google_business_box').css('display', 'flex');
            $('#mobile_google_business_box').css('display', 'flex');
            }
            });
            }else{

    let totalprice=$('.grandTotal').html();
          
    $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice ,price: price, id: id, googleMyBusiness:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#google_business_box').css('display', 'none');
            $('#mobile_google_business_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });


        $(document).delegate('#whatsappChat', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){


                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, whatsappChat:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#whatsapp_chat_price').text(data.price);
            $('#mobile_whatsapp_chat_price').text(data.price);
            $('#whatsapp_chat_box').css('display', 'flex');
            $('#mobile_whatsapp_chat_box').css('display', 'flex');
            }
            });
            }else{


                let totalprice=$('.grandTotal').html();
            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, whatsappChat:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#whatsapp_chat_box').css('display', 'none');
            $('#mobile_whatsapp_chat_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });
        $(document).delegate('#callButton', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, callButton:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#call_button_price').text(data.price);
            $('#mobile_call_button_price').text(data.price);
            $('#call_button_box').css('display', 'flex');
            $('#mobile_call_button_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, callButton:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#call_button_box').css('display', 'none');
            $('#mobile_call_button_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#paymentGateway', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();
          

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, paymentGateway:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#payment_gateway_price').text(data.price);
            $('#mobile_payment_gateway_price').text(data.price);
            $('#payment_gateway_box').css('display', 'flex');
            $('#mobile_payment_gateway_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();
          
            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, paymentGateway:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#payment_gateway_box').css('display', 'none');
            $('#mobile_payment_gateway_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });

        $(document).delegate('#smsApi', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();
          

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice, price: price, id: id, smsApi:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#sms_api_price').text(data.price);
            $('#mobile_sms_api_price').text(data.price);
            $('#sms_api_box').css('display', 'flex');
            $('#mobile_sms_api_box').css('display', 'flex');
            }
            });
            }else{

                let totalprice=$('.grandTotal').html();


            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, smsApi:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#sms_api_box').css('display', 'none');
            $('#mobile_sms_api_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });




        $(document).delegate('#professional_look', 'change', function(){
            let price = $(this).attr('price');
            let id = $(this).attr('id');
            if($(this).is(':checked')){

                let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, professional_look:1},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('.grandTotal').text(data.totalPrice);
            $('#professional_look_price').text(data.price);
            $('#mobile_professional_look_price').text(data.price);
            $('#professional_look_box').css('display', 'flex');
            $('#mobile_professional_look_box').css('display', 'flex');
            }
            });
            }else{

                
                let totalprice=$('.grandTotal').html();

            $.ajax({
            url: 'special_requirements.php',
            method: 'POST',
            data: {totalprice:totalprice,price: price, id: id, professional_look:0},
            success: function(response){
            let data = JSON.parse(response);
            console.log(data);
            $('#professional_look_box').css('display', 'none');
            $('#mobile_professional_look_box').css('display', 'none');
            $('.grandTotal').text(data.totalPrice);
            }
            });
            }
            });




            $(document).delegate('#submit', 'click', function(){
                let name = $('#name').val();
                let email = $('#email').val();
                let phone = $('#phone').val();
                let city = $('#city').val();

                if(name == ''){
                    $('#name_msg').text('Please Enter Name...');
                }
                if(email == ''){
                     $('#email_msg').text('Please Enter Email...');
                }
                if(phone == ''){
                     $('#phone_msg').text('Please Enter Phone...');
                }
                if(city == ''){
                     $('#city_msg').text('Please Enter City...');
                }

                if(name != '' && email != '' && phone != '' && city != '')
                {
                    $.ajax({
                        url: 'process/submit.php',
                        method: 'POST',
                        data: {name: name, email: email, phone: phone, city: city},
                        success: function(response){
                            console.log(response);
                        }
                    });



                }





            });



});

