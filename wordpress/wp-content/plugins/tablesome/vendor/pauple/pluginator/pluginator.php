<?php


define('PLUGINATOR__FILE__', __FILE__);
define('PLUGINATOR_PATH', dirname(PLUGINATOR__FILE__));
define('PLUGINATOR_SRC_PATH', dirname(PLUGINATOR__FILE__) . '/src');

pluginator_setup_autoload();

// global $pluginator_security_agent;
// $pluginator_security_agent = new \Pauple\Pluginator\SecurityAgent();

function pluginator_setup_autoload()
{
    require __DIR__ . '/vendor/autoload.php';
}

error_log('pluginator.php loaded');
