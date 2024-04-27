<?php
    session_start();
    session_destroy();

    // header('Location: '. $_SERVER['HTTP_REFERER']);  for redirecting back to the page from where user came

    header('Location: ./index.php'); 

?>