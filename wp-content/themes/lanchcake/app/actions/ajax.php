<?php

add_action('wp_ajax_check_email_exists', 'check_email_exists');
add_action('wp_ajax_nopriv_check_email_exists', 'check_email_exists');
function check_email_exists()
{
    if (email_exists($_POST['email'])) {
        echo json_encode(array(
            'name' => 'email',
            'status' => false,
            'message' => 'Hãy nhập đúng Email',
        ));
        exit;
    }
}