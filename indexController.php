<?php

try {
    $name = $_GET['name'];
    $comment = $_GET['comment'];

    $config = require_once 'config.php';
    $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];
    $connect = new PDO($dsn, $config['username'], $config['password']);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($name && $comment) {

        $stmt = $connect->prepare("INSERT INTO users (name,comment) VALUES (:name,:comment)");
        $stmt->bindParam('name', $name);
        $stmt->bindParam('comment', $comment);
        $stmt->execute();
    }
    $stmt = $connect->prepare('SELECT name,comment FROM users');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (\PDOException $exception) {
    return $exception->getMessage();
}
$connect = null;

header("Location: view/index.php");