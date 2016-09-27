<?php
if( isset( $_POST["lang"] ) ) {
    $langs = $_POST["lang"];
    setcookie ( 'langs', $langs, time() + 60*60*24*30, '/'/*, 'mydomain.com'*/);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else {
    $langs = 'ru';
}