<?php
    require_once("./inc/Page.class.php");

    echo Page::pageHeader();

    if (! empty($_POST) ) {
        echo Page::contactForm();

        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
        $userAddress = $_POST['address'];
        $userCity = $_POST['city'];
        $userProvince = $_POST['province'];
        $userPostal = $_POST['postal'];

        $to = "g.freitas.dev@gmail.com";
        $subject = "Contact Form Message - ";
    
        $message = "<b>This is a message from your contact Page.</b>\n";
        $message .= "
        <ul>
            <li>User Email: $userEmail</li>
            <li>User Address: $userAddress</li>
            <li>User City: $userCity</li>
            <li>User Province: $userProvince</li>
            <li>User Postal Code: $userPostal</li>
        </ul>
        ";
    
        $header = "From:g.freitas.dev@gmail.com \n";
        $header .= "Cc:moncanem@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\n";
        $header .= "Content-type: text/html\n";
    
        $retval = mail($to,$subject,$message,$header);
    
        if( $retval == true ) {
            echo "Message sent successfully...";
        }else {
            echo "Message could not be sent...";
        }

    } else {
        echo Page::contactForm();
    }

    echo Page::pageFooter();