<?php

    $fullname = $_POST['fullname'];
    $emailadd = $_POST['emailadd'];
    $mobilephone = $_POST['mobilephone'];
    $inquiry = $_POST['inquiry']; 
 

    $to = "koowdph@gmail.com";
    $subject = "Inquiry";

    $message = "
    <html>
        <head>
            <title>INQUIRY | $fullname</title>
        </head>
        <body>
            <p>INQUIRY</p>
            <table>
                <tr>
                    <th>Full Name</th>
                    <td>$fullname</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>$emailadd</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>$mobilephone</td>
                </tr>
                <tr>
                    <th>Inquiry</th>
                    <td>$inquiry</td>
                </tr>
            </table>
        </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <koowdph@gmail.com>' . "\r\n";
    $headers .= 'Cc: camuaphey@gmail.com' . "\r\n";

    mail($to,$subject,$message,$headers);
?>