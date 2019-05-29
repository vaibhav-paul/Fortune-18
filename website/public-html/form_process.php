<?php

//define variables and set to empty values

$name_error = $email_error = $phone_error = $url_error = "";

$name = $email = $phone = $message = $success = "";

//form is submitted with post method


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $name_error = "Name is required";
    }
    
    else{
        $name = test_input($_POST["name"]);
        //check if name only contains letters and whitespace
        
        if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            $name_error = "Only letters and white space allowed";
        }
    }
    
    if(empty($_POST["email"])){
        $email_error = "Email is required";
    }

    else{
        $email= test_input($_POST["email"]);
        //check if email address is well-formed
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_error = "Invalid email format";
        }
    }
    
    if(empty($_POST["phone"])){
        $phone_error = "Phone is required";
    }
    
    else{
        $phone = test_input($_POST["phone"]);
        //check if valid phone details are there
        
        if(!preg_match("/^(\d[\s-]?)?[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[s\-]?\d{4}$/i",$phone)){
            $phone_error = "Invalid phone number";
        }
    }
    
    if(empty($_POST["url"])){
        $url_error = "";
    }
    
    else{
        $url = test_input($_POST["url"]);
        //check if URL address syntax is valid (this regular expression also allows dashes in the URL
        
        if(!preg_match('/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i')){
            $url_error = "Invalid url";
        }
    }
    
     if(empty($_POST["message"])){
        $message= "";
    }
    
    else{
        $message = test_input($_POST["message"]);
        
    }
        if($name_error == '' and $email_error=='' and $phone_error=='' and $url_error=='' ){
            $message_body = '';
            unset($_POST['submit']);
            foreach($_POST as $key => $value){
                $message_body .= "$key:$value\n";
            }
            
            $to = 'vp8498@gmail.com';
            $subject = 'FORTUNE 18 CONTACT FORM SUBMIT';
            if(mail($to,$subject,$message)){
                $success="Message sent,thank you for contacting us!You will get reply on your submitted email";
                $name = $email = $phone = $message='';
            }
        }
    }

function test_input($data){
    $data=trim($data);
    $data=striplashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
    
 ?>