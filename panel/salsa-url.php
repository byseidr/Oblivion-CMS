<?php
session_start();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
}
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

$dir = '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/functions/';
$dir = dir($dir);
while ($arquivo = $dir->read()) {
    if ($arquivo == ".." || $arquivo == ".") {
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/functions/' . $arquivo . '';
    }
}
$dir->close();
if ($_SERVER["REQUEST_URI"] == "/panel/") 
    header("Location: /panel/salsa-verificar");

if (isset($_GET['url'])) {
    $arquivo = '' . $_SERVER['DOCUMENT_ROOT'] . '/panel/' . $_GET['url'] . '.php';
    if (file_exists($arquivo)) {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/panel/' . $_GET['url'] . '.php';
        }
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/structure/files/tema/' . tema . '/' . $_ENV['404PAGE'] . '.php';
    }

