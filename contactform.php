<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phoneFrom = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo = "rens@houseofretouch.nl"
    $headers = "from: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
 
    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsend");
};    


