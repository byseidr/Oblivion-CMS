<?php
/***
 *                _
 *               | |
 *      ___  __ _| |___  __ _
 *     / __|/ _` | / __|/ _` |
 *     \__ \ (_| | \__ \ (_| |
 *     |___/\__,_|_|___/\__,_|
 *     GitHub: https://github.com/victorlbs/Salsa-CMS-for-Arcturus-Emulator/
 *
*/
session_start();

if (file_exists($_SERVER['DOCUMENT_ROOT'] . '../vendor/autoload.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '../vendor/autoload.php');
}
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . "..");
$dotenv->load();

Oblivion\Oblivion::init($dotenv);

if ($_SERVER["REQUEST_URI"] == "/") header("Location: /index");
if (isset($_GET['url'])) {
    $arquivo = '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . tema . '/' . $_GET['url'] . '.php';
    if (file_exists($arquivo)) {
        if (manutencao == 1 && mns == 0) {
            if ($_SERVER["REQUEST_URI"] != "/manutencao") {
                header("Location: /manutencao");
            } else {
                include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . tema . '/manutencao.php';
            }
        } elseif (manutencao == 1 && mns == 1) {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . tema . '/' . $_GET['url'] . '.php';
        } else {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . tema . '/' . $_GET['url'] . '.php';
        }
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . tema . '/' . $_ENV['404PAGE'] . '.php';
    }
}

   


