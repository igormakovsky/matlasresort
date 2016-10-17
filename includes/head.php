<?
$docroot = $_SERVER['DOCUMENT_ROOT'].'/';
/* $dev = '.dev'; //.dev */
/* require $docroot.'includes/language.php'; */
/* require $docroot.'includes/vars.php'; */
/* <html lang="<?=$lang?>"> */

$sign = date("Y").' — Copyright (c) Igor Makovsky | http://www.igormakovsky.ru/';
    $title = $title_ru;
    $description = $description_ru;
    $keywords = 'матлас, курорт, дагестан, хунзах, '.$keywords_ru;
    $author = 'Матлас';
    $lang = 'ru';
    $tomainpage = '&larr;';
    $contact = 'контакты';
    $settolang = 'in english';

?>

<!doctype html>
<html lang="ru">

<head>
<?
require $docroot.'includes/top.php'; 
//require $docroot.'includes/meta.php';
require $docroot.'includes/favicon.php';
require $docroot.'includes/scripts.php';
require $docroot.'includes/styles.php';
//require $docroot.'includes/css.php';
?>
</head>

<body>
<?
require $docroot.'includes/menu.php';
?>

<article class="page">