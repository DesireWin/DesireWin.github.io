<?php

include "vk_api.php";

const VK_KEY = "50f8853cda73604c850fbd8159f99c709e6ce935fc1d78abc5e76bcb19c2be7ba84122d5075e94763db43";
const ACCESS_KEY = "60c7c23c";
const VERSION = "5.81";

$vk = new vk_api(VK_KEY, VERSION); 
$data = json_decode(file_get_contents('php://input')); 

if ($data->type == 'confirmation') { 
    exit(ACCESS_KEY); 
}
$vk->sendOK(); 
// ====== Наши переменные ============
$id = $data->object->from_id;
$peer_id = $data->object->peer_id;
$message = $data->object->text; // Само сообщение от пользователя
// ====== *************** ============

if ($data->type == 'message_new') {

    if ($message == '!бот') {

            $vk->sendMessage($peer_id, "Привет :-)");
            
        }


    }
?>
