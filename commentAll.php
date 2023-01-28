<?php

$connect = new PDO("mysql:host=localhost;dbname=guest_book", 'root', 'zagirok123');
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $connect->prepare('SELECT * FROM users');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
