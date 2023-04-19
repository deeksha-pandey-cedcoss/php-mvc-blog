<?php
// configuration for database
define('BASE', dirname(__DIR__));
include_once BASE . '/dp.php';
require_once BASE_PATH . '/library/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(BASE_PATH . '/Model');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/blog'
    ));
});
