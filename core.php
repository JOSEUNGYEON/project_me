<?php

function jAlert($gubun, $msg, $return, $url1='', $url2='', $okValue='', $noValue=''){

  echo $gubun."----".$msg."----".$url1."----".$url2;

    if (!$msg) {
        $msg = '올바른 방법으로 이용해 주십시오.';
        alert($msg);
    }


    $msg = str_replace("\\n", "<br>", $msg);
        //core 안에 
    include_once('./jAlert.php');

    if($return == "true")    exit;

}

