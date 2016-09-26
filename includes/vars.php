<?php
$base_dir  = __DIR__;
// Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME'].'/');
# ex: /var/www
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);
# ex: '' or '/mywebsite'
$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'];
$full_url  = "${protocol}://${domain}${disp_port}${base_url}";
# Ex: 'http://example.com', 'https://example.com/mywebsite', etc.

//universal paths to the pages on the whole website
$siteroot = $protocol.'://'.$domain; //http://igormakovsky.ru
if ($id != 'contents'){
$mainfolder = '/'.$parent.'/'.$id;
$headimage = $siteroot.'/'.$parent.'/'.$id.'/img/index.jpg'; //path to leading image
$canonical = $siteroot.'/'.$parent.'/'.$id.'/'; //path to canonical page
}
else {
    $mainfolder = '';
    $headimage = $siteroot.'/img/index.jpg'; //path to main image
    $canonical = $siteroot;
}

//$headimage = $siteroot.$mainfolder.'/img/'.$id.'.jpg'; //path to leading image
$thispage = $domain.$mainfolder.'/'; //path to the current folder
$deldomain = (str_replace('index.php', '', $_SERVER['SCRIPT_NAME'])); //erase index.php

/*
//for bugtesting
echo 'mainfolder is '.$mainfolder.'<br>';
echo 'fullurl is '.$full_url.'<br>';
echo 'doc_root is '.$doc_root.'<br>';
echo 'baseurl is '.$base_url.'<br>';
echo 'siteroot is '.$siteroot.'<br>';*/
//Language differences in variables




if (ru()) {
    $sign = date("Y").' — Игорь Маковский';
    $title = $title_ru;
    $description = $description_ru;
    $keywords = 'игорь, маковский, дизайн, сайт, иллюстрация, книга, портфолио, работы, '.$keywords_ru;
    $author = 'Игорь Маковский';
    $switch = 'igormakovsky.com'.$dev.$deldomain;
    $lang = 'ru';
    $tomainpage = '&larr;';
    $contact = 'контакты';
    $settolang = 'in english';
}
else {
    $sign = date("Y").' — Igor Makovsky';
    $title = $title_en;
    $description = $description_en;
    $keywords = 'igor, makovsky, design, site, illustrations, books, portfolio, works, '.$keywords_en;
    $author = 'Igor Makovsky';
    $switch = 'igormakovsky.ru'.$dev.$deldomain;
    $contact = 'contact info';
    $tomainpage = '&larr;';
    $lang = 'en-US';
    $settolang = 'по-русски';
}

?>