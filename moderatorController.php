<?php

$connect = new PDO("mysql:host=localhost;dbname=guest_book", 'root', 'zagirok123');
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ($_GET['number_delete']) {
    $id = $_GET['number_delete'];
    $stmt = $connect->prepare('DELETE FROM users WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $stmt = $connect->prepare('SELECT * FROM users');
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if ($_GET['edit_id']) {
    $id = $_GET['edit_id'];
    $name = $_GET['edit_name'];
    $comment = $_GET['edit_comment'];
    if ($name) {
        $stmt = $connect->prepare('UPDATE users SET name = :name WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }
    if ($comment) {
        $stmt = $connect->prepare('UPDATE users SET comment= :comment WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':comment', $comment);
        $stmt->execute();
    }
}
header("Location: view/moderator.php");

