<?php  
    if(isset($_POST['contact'])){
        $contact_email = $_POST['contact_email'];
        $contact_content = $_POST['contact_content'];
        $contact_ans = $_POST['contact_ans'];
        $contact_name = $_POST['contact_name'];

        $header = "MIME-Version: 1.0" . "\r\n";
        $header .="Content-type:text/html;charset=UTF-8" . "\r\n";
        $header .='From: <Troywu@zoaki.com>'."\r\n";

        mail($contact_email, $contact_name,$contact_content,$header);
    }else{
        echo "fail to send";
    }





?>