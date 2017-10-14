<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$id = $_POST['id'];

/** @var \mysqli $mysqli */
$mysqli = include 'connect.php';

// 准备待执行的SQL语句
$stmt = $mysqli->prepare("DELETE FROM `posts` WHERE `id` = ?;");
// 绑定语句中要用的变量（这个类似于引用的方式） s = string
$stmt->bind_param('i', $id);

$result = $stmt->execute();

if (!$result) {
    echo '删除评论失败';
}

echo '删除评论成功';
