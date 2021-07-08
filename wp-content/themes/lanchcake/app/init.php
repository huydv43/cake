<?php

require APP_DIR . '/helpers.php';

require_all(APP_DIR . '/actions/');
require_all(APP_DIR . '/filters/');
require_all(APP_DIR . '/shortcodes/');
require_all(APP_DIR . '/models/');
require_all(APP_DIR . '/views/');
require_all(APP_DIR . '/views/common/');

require APP_DIR . '/addon/init.php';
require APP_DIR . '/customizer/init.php';
require THEME_DIR . '/config/common.php';
require THEME_DIR . '/config/timezone.php';
require THEME_DIR . '/config/message.php';
