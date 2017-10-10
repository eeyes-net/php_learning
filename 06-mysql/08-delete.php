<meta charset="UTF-8">
<h1>删除用户</h1>
<form method="POST">
    用户名：<input type="text" name="username"><br>
    <input type="submit">
</form>
<?php

if (empty($_POST)) {
    exit;
}

$db_host = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_database = 'test';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);

$stmt = $mysqli->prepare("DELETE FROM `users` WHERE `username` = ?");
$stmt->bind_param('s', $username);

$username = $_POST['username'];

$result = $stmt->execute();

if (!$result) {
    echo "删除失败，错误信息：" . $mysqli->error;
    exit;
}

echo '删除成功，删除了' . $stmt->affected_rows . '条记录';

$stmt->close();
$mysqli->close();
