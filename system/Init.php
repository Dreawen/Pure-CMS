<?php

$pdo = new PDO(
    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD,
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
);

require_once ABS_PATH . '/system/base.php';
Base::$pdo = $pdo;

require_once ABS_PATH . '/system/model.php';
require_once ABS_PATH . '/system/controller.php';
