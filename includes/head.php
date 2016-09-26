<?
$docroot = $_SERVER['DOCUMENT_ROOT'].'/';
$dev = '.dev'; //.dev
require $docroot.'includes/language.php';
require $docroot.'includes/vars.php';
?>

<!doctype html>
<html lang="<?=$lang?>">

<head>
<?
require $docroot.'includes/top.php'; 
require $docroot.'includes/meta.php';
require $docroot.'includes/scripts.php';
require $docroot.'includes/styles.php';
require $docroot.'includes/css.php';
?>
</head>

<body>
<?
require $docroot.'includes/preloader.php';
require $docroot.'includes/menu.php';
?>

<article class="page">