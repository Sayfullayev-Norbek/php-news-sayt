<?php

    $host = 'localhost';
    $dbName = 'amaliyot';
    $user = 'root';
    $password = '';

    try {
        $dsn = "mysql:host=$host;dbname=$dbName";
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    const UPLOADS = "/upload";

