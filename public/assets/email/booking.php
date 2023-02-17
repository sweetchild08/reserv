<?php
if($_POST)
{
    // Retrieve the email template required
    $admin_message = file_get_contents('admin-template.html');
    $customer_message = file_get_contents('customer-template.html');
    
    ##################################################################################################################
    
    // Site Settings 
    $site_title          = "Santorenz Bay Resort";
    $site_url            = "http://santorenzbayresort.com/";
    $facebook_link       = "https://www.facebook.com/santorenzbayresort.com"; 
    $twitter_link        = "https://twitter.com/"; 
    $admin_phone         = "18881234567";

    // Email Settings
    $admin_email         = "santorenzbayresort2022@gmail.com";
    $admin_subject       = "Santorenz Bay Resort - New Reservation"; 
    $customer_subject    = "Santorenz Bay Resort - Booking Details"; 
    
    // Output Messages
    $success_mssg        = "Your reservation has been submitted to us.<br> We'll contact you as quickly as possible.";
    $error_mssg          = "An error has occurred. Please check your PHP email configuration.";
    $email_mssg          = "Please enter a valid email!"; 
    $booking_date        = "You can't depart before you arrive"; 
    $empty_email         = "Email is empty!<br> Please enter something.";
    $empty_roomtype      = "Room Type is empty!<br> Please enter something.";
    $empty_checkin       = "Arrival Date is empty!<br> Please enter something.";
    $empty_checkout      = "Departure Date is empty!<br> Please enter something.";
    $empty_adults        = "Adults is empty!<br> Please enter something.";
    $empty_children      = "Children is empty!<br> Please enter something.";
    $empty_name          = "Name is empty!<br> Please enter something.";
    $empty_phone         = "Phone Number is empty!<br> Please enter something.";
    $empty_comments      = "Coomments section is empty!<br> Please enter something.";
    $empty_country       = "Country section is empty!<br> Please enter something.";
    
    ##################################################################################################################
    
    //Check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    
        //Exit script outputting json data 
        $output = json_encode(
        array(
            'type'=>'error', 
            'text' => 'Request must come from Ajax'
        ));
        
        die($output);
    } 

    //Sanitize input data using PHP filter_var(). *PHP 5.2.0+
    $customer_email     = filter_var($_POST["booking_email"], FILTER_SANITIZE_STRING);
    $roomtype           = filter_var($_POST["booking_roomtype"], FILTER_SANITIZE_STRING);
    $checkin            = filter_var($_POST["booking_checkin"], FILTER_SANITIZE_STRING);
    $checkout           = filter_var($_POST["booking_checkout"], FILTER_SANITIZE_STRING);
    $adults             = filter_var($_POST["booking_adults"], FILTER_SANITIZE_STRING);
    $children           = filter_var($_POST["booking_children"], FILTER_SANITIZE_STRING);
    $customer_name      = filter_var($_POST["booking_name"], FILTER_SANITIZE_STRING);
    $customer_phone     = filter_var($_POST["booking_phone"], FILTER_SANITIZE_STRING);
    $comments           = filter_var($_POST["booking_comments"], FILTER_SANITIZE_STRING);
    $country            = filter_var($_POST["booking_country"], FILTER_SANITIZE_STRING);
    
    if(empty($customer_email)){$output = json_encode(array('type'=>'error', 'text' => $empty_email)); die($output);}
    if(empty($roomtype)){$output = json_encode(array('type'=>'error', 'text' => $empty_roomtype)); die($output);}
    if(empty($checkin)){$output = json_encode(array('type'=>'error', 'text' => $empty_checkin)); die($output);}
    if(empty($checkout)){$output = json_encode(array('type'=>'error', 'text' => $empty_checkout)); die($output);}
    if(empty($adults) && ($adults != '0')){$output = json_encode(array('type'=>'error', 'text' => $empty_adults)); die($output);}
    if(empty($children) && ($children != '0')){$output = json_encode(array('type'=>'error', 'text' => $empty_children)); die($output);}
    //if(empty($customer_name)){$output = json_encode(array('type'=>'error', 'text' => $empty_name));die($output);}
    //if(empty($customer_phone)){$output = json_encode(array('type'=>'error', 'text' => $empty_phone));die($output);}
    //if(empty($comments)){$output = json_encode(array('type'=>'error', 'text' => $empty_comments));die($output);}
    //if(empty($country)){$output = json_encode(array('type'=>'error', 'text' => $empty_country));die($output);}
    

    //Email Validation
    if(!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'error', 'text' => $email_mssg));
        die($output);
    }
    //Format Date
    $clear_checkin = str_replace('/', '-', $checkin);
    $format_checkin = date('Y-m-d', strtotime($clear_checkin));
    $clear_checkout = str_replace('/', '-', $checkout);
    $format_checkout = date('Y-m-d', strtotime($clear_checkout));

    if ($format_checkin > $format_checkout){
        $output = json_encode(array('type'=>'error', 'text' => $booking_date));
        die($output);
    }
    
    //Admin Message
    $admin_message = str_replace('%customer_name%', $customer_name, $admin_message);
    $admin_message = str_replace('%customer_email%', $customer_email, $admin_message);
    $admin_message = str_replace('%customer_phone%', $customer_phone, $admin_message);
    $admin_message = str_replace('%roomtype%', $roomtype, $admin_message);
    $admin_message = str_replace('%adults%', $adults, $admin_message);
    $admin_message = str_replace('%children%', $children, $admin_message);
    $admin_message = str_replace('%checkin%', $checkin, $admin_message);
    $admin_message = str_replace('%checkout%', $checkout, $admin_message);
    $admin_message = str_replace('%country%', $country, $admin_message);
    $admin_message = str_replace('%comments%', $comments, $admin_message);
    $admin_message = str_replace('%site_title%', $site_title, $admin_message);
    $admin_message = str_replace('%site_url%', $site_url, $admin_message);
    $admin_message = str_replace('%facebook_link%', $facebook_link, $admin_message);
    $admin_message = str_replace('%twitter_link%', $twitter_link, $admin_message);

    //Customer Message
    $customer_message = str_replace('%customer_name%', $customer_name, $customer_message);
    $customer_message = str_replace('%customer_email%', $customer_email, $customer_message);
    $customer_message = str_replace('%customer_phone%', $customer_phone, $customer_message);
    $customer_message = str_replace('%roomtype%', $roomtype, $customer_message);
    $customer_message = str_replace('%adults%', $adults, $customer_message);
    $customer_message = str_replace('%children%', $children, $customer_message);
    $customer_message = str_replace('%checkin%', $checkin, $customer_message);
    $customer_message = str_replace('%checkout%', $checkout, $customer_message);
    $customer_message = str_replace('%country%', $country, $customer_message);
    $customer_message = str_replace('%comments%', $comments, $customer_message);
    $customer_message = str_replace('%admin_email%', $admin_email, $customer_message);
    $customer_message = str_replace('%admin_phone%', $admin_phone, $customer_message);
    $customer_message = str_replace('%site_title%', $site_title, $customer_message);
    $customer_message = str_replace('%site_url%', $site_url, $customer_message);
    $customer_message = str_replace('%facebook_link%', $facebook_link, $customer_message);
    $customer_message = str_replace('%twitter_link%', $twitter_link, $customer_message);
    
    //Headers for admin email.
    $admin_headers = 'From: '.$site_title.' <'.$customer_email.'>' . PHP_EOL .
    'Reply-To: '.$customer_name.' <'.$customer_email.'>' . PHP_EOL .
    'MIME-Version: 1.0' . PHP_EOL .
    'Content-type:text/html;charset=iso-8859-1' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    //Headers for customer email.
    $customer_headers = 'From: '.$site_title.' <'.$admin_email.'>' . PHP_EOL .
    'Reply-To: '.$site_title.' <'.$admin_email.'>' . PHP_EOL .
    'MIME-Version: 1.0' . PHP_EOL .
    'Content-type:text/html;charset=utf-8' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
    
    //Send booking details to admin
    $sendemail_to_admin = @mail($admin_email, $admin_subject,  $admin_message, $admin_headers);

    //Send booking details to customer
    $sendemail_to_customer = @mail($customer_email, $customer_subject,  $customer_message, $customer_headers);
    
    
    if(!$sendemail_to_admin && $sendemail_to_customer)
    {
        $output = json_encode(array('type'=>'error', 'text' => $error_mssg));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => $success_mssg));
        die($output);
    }

}else{

   header('Location: ../404.html');
}
?>