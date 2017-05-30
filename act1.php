<?php
require __DIR__ . '/vendor/autoload.php';

define('data', __DIR__ . '/data');
define('fb_data', data . '/fb_data');

is_dir(data) or mkdir(data);
is_dir(fb_data) or mkdir(fb_data);

use System\ActionHandler;

$email	= "ammarfaizi2";
$pass	= "454469123iceteaf";

(new ActionHandler($email, $pass))->run();