<?php

function parseUrl ()
{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    return parse_url($url);
}

function ru() {
    
    $dev = '.dev'; //.dev
    $host = parseUrl();
	$host = $host['host'];
    
    //if($_COOCKIE['language']=='en')echo "My Site";else echo "Мой сайт"    
    
    $firstDomain = 'matlasresort.com'.$dev;
    $lang = ($host == $firstDomain)?true:false;
    return $lang;
}
?>