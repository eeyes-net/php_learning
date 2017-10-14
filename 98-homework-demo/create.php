<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}

$username = $_POST['username'];
$content = $_POST['content'];

/** @var \mysqli $mysqli */
$mysqli = include 'connect.php';

// 准备待执行的SQL语句
$stmt = $mysqli->prepare("INSERT INTO `posts` (`username`, `content`) VALUES (?, ?);");
// 绑定语句中要用的变量（这个类似于引用的方式） s = string
$stmt->bind_param('ss', $username, $content);

$result = $stmt->execute();

if (!$result) {
    echo '评论失败';
}

echo '评论成功';
