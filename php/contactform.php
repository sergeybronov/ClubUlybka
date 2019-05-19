<?php

if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $phone= $_POST['phone'];

    $mailTo= "webworks7@mail.ru";
    $txt= "You got message from ".$name.".\n\n".$phone;

    mail( $mailTo, $txt);
    header("Location: index.php?mailsend");
}

?>