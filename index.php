<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sending html email using php</title>
</head>
<body>
    <?php
    $to = "zunishak87@gmail.com";
    $subject = "this is subject";

    $message = "<b>this is html message</b>";
    $message = "<h1>this is headline</h1>";

    $header = "from:zunishak87@gmail.com/r/n";
    $header = "Cc:zunishak87@gmail.com";
    $header = "mine-version: 1.0/r/n";
    $header = "content-type: text/html/r/n";

    $retval = mail( $to, $subject, $message,  $header);

    if( $retval ==true){
        echo "message sent successfully...";
    }else{
        echo "message could not be sent...";
    }
    ?>
    
</body>
</html>