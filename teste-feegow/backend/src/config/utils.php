<?php

function addSuccessMsg($msg) {
    
    $_SESSION['message'] = [
        'type' => 'success',
        'message' => $msg
    ];
}

function addErrorMsg($msg) {
    
    $_SESSION['message'] = [
        'type' => 'error',
        'message' => $msg
    ];
}

function xhtmlRequests($url, $params = array()) {
    
    $token = TOKEN;
    
    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) >0) {
                ${$key} = $value;
            }
        }
    }

    $header = array(
        'Content-Type: application/json',
        "x-access-token: $token"
    );

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $result = json_decode(curl_exec($ch));
    curl_close($result);

    return $result;
}