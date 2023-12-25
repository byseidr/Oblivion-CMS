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

if (file_exists(dirname($_SERVER['DOCUMENT_ROOT']) . '/vendor/autoload.php')) {
    require_once(dirname($_SERVER['DOCUMENT_ROOT']) . '/vendor/autoload.php');
}
$dotenv = Dotenv\Dotenv::createImmutable(dirname($_SERVER['DOCUMENT_ROOT']));
$dotenv->load();

Oblivion\Oblivion::init($dotenv);
$db = new Oblivion\Db();
Oblivion\Session::init($db);

if ($_SERVER["REQUEST_URI"] == "/") header("Location: /index");
if (isset($_GET['url'])) {
    $arquivo = '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . TEMA . '/' . $_GET['url'] . '.php';
    if (file_exists($arquivo)) {
        if (MANUTENCAO == 1 && MNS == 0) {
            if ($_SERVER["REQUEST_URI"] != "/manutencao") {
                header("Location: /manutencao");
            } else {
                include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . TEMA . '/manutencao.php';
            }
        } elseif (MANUTENCAO == 1 && MNS == 1) {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . TEMA . '/' . $_GET['url'] . '.php';
        } else {
            include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . TEMA . '/' . $_GET['url'] . '.php';
        }
    } else {
        include '' . $_SERVER['DOCUMENT_ROOT'] . '/tema/' . TEMA . '/' . $_ENV['404PAGE'] . '.php';
    }
}

   


