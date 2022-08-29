<?php

    $fullname = $_POST['fullname'];
    $emailadd = $_POST['emailadd'];
    $mobilephone = $_POST['mobilephone'];
    $inquiry = $_POST['inquiry'];
    $msg = 'Fullname: '.$fullname .'<br>';
    $msg .= 'Email: '.$emailadd .'<br>';
    $msg .= 'Mobile: '.$mobilephone.'<br>';

    mail("koowdph@gmail.com","Inquiry",$msg);

    
?>