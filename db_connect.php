<?php
function db_connect(): mysqli {
    $config = require __DIR__ . '/../config/config.php'; // Load config file

    $mysqli = new mysqli(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name'],
        //$config['db_port']
    );

    if ($mysqli->connect_error) {
        throw new Exception("Connection failed: " . $mysqli->connect_error);
    }

    return $mysqli;
}
