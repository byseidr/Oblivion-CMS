<?php
if (CUR != null || SESSAO != null || USUARIO != null)
{
      echo "<script>window.location.href='/me?=já_está_registrado';</script>";
      exit;
 }
$vlsalsa = 1;
$qra = "SELECT * FROM users WHERE username='" . NOTICIAFINAL . "' ORDER BY id DESC LIMIT 1";
if ($ra = $db->query($qra)) {
    $existe = mysqli_num_rows($ra);
    if ($existe == $vlsalsa) {
        $ST = $qra;
        $QR = $db->query($ST) or die($db->error());
        while ($FUNCTION = $QR->fetch_assoc()) {
            if ($FUNCTION['ip_current'] == $_SERVER['REMOTE_ADDR']) {
                $remove = "UPDATE users SET referidos = referidos-1 WHERE username = '" . $FUNCTION['username'] . "'";
                $db->query($remove);
                echo "<script>window.location.href='/registro?=erro';</script>";
            } elseif ($FUNCTION['ip_current'] != $_SERVER['REMOTE_ADDR']) {
                $remove = "UPDATE users SET referidos = referidos+1 WHERE username = '" . $FUNCTION['username'] . "'";
                $db->query($remove);
                echo "<script>window.location.href='/registro?=sucesso';</script>";
            }
        }
    }
} else {
    echo "<script>window.location.href='/registro?=nao-encontrado';</script>";
}