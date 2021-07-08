<?php
$config_msg = array(
    array(
        "key" => "COMMSG001",
        "vi"  => "Email trống hoặc nhập space",
        "jp"  => "メールアドレスを入力してください。",
    ),
);

function get_message($code, $contry = 'vi')
{
    global $config_msg;
    foreach ($config_msg as $key => $value) {
        if ($code === $value['key']) return $value[$contry];
    }
    return null;
}
// $message = get_message_by_code("COMMSG052", $config_msg);