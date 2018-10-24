<?php
function findUserById($id) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE id=? LIMIT 1");
    $stmt->execute(array($id));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function findUserByEmail($email) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
    $stmt->execute(array($email));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function findAllPosts() {
    global $db;
    $stmt = $db->prepare("SELECT p.*, u.fullName FROM posts AS p LEFT JOIN users AS u ON u.id = p.userId ORDER BY createdAt DESC");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}

function createUser($email, $fullName, $passwordHash) {
    global $db;
    $stmt = $db->prepare("INSERT INTO users(email, fullName, password) VALUES (?, ?, ?)");
    $stmt->execute(array($email, $fullName, $passwordHash));
    return $db->lastInsertId();
}