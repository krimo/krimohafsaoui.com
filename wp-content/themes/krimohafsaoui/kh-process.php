<?php
if( isset($_POST) ){
    
    //form validation vars
    $formok = true;
    $errors = array();
    
    //submission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
    
    //form data
    $name = $_POST['contact_form_name'];    
    $email = $_POST['contact_form_email'];
    $message = $_POST['contact_form_body'];
    
    $headers = "From: ".$email."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $emailbody = "<p>You have received a new message from the enquiries form on your website.</p>
                  <p><strong>Name: </strong> {$name} </p>
                  <p><strong>Email Address: </strong> {$email} </p>
                  <p><strong>Message: </strong> {$message} </p>
                  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
    
    mail("krimo@krimohafsaoui.com","New Enquiry",$emailbody,$headers);
    
    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'name' => $name,
            'email' => $email,
            'message' => $message
        ),
        'form_ok' => $formok,
        'errors' => $errors
    );
        
    
    //if this is not an ajax request
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;
        
        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>