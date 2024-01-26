<?php

$od = $_POST["od"];
$dla = $_POST["dla"];
$piosenka = $_POST["piosenka"];
$subject = "Dedykacja";
$to = "bartekmiekina21@gmail.com";

$txt = "Od: " . $od . "\r\n" . "Dla: " . $dla . "\r\n" . "Piosenka: " . $piosenka;

$headers = "od: " . $od . "\r\n";
$headers = "Reply-to: " . $od . "\r\n";

$mail_status = mail( $to, $subject, $txt, $headers);

if ($mail_status) {
    header("Location: index.html?mail_status=sent");
} else {
    header("Location: index.html?mail-status=error");
}