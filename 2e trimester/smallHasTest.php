<?php
$pswSignup="1234";
$hashPsw= password_hash($pswSignup,PASSWORD_DEFAULT);

var_dump($hashPsw);
/* I am done with signop*/
/* on login*/

$pswLogin="123";


if (password_verify($pswLogin,$hashPsw)) {
    print("Login OK");
}else {
    print("Not ok");
}

?>