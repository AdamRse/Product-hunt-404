<?php
function returnAjax($retourAjax = true, $code = true){
    return json_encode(array("response" => $retourAjax,"code"=> $code));
}
