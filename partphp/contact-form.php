<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mail = $_POST['e-mail'];
    $sub = $_POST['subject'];
    $men = $_POST['message'];

    $mailto = 'rolandototo@gmail.com';
    $headers = "Form: ".$mail;
    $txt = "mail reciver from: ".$name."./n/n".$men;


    mail($mailto, $sub, $txt, $headers);
    header("Location: index.php?mailsend");
}