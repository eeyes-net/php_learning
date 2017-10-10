<meta charset="UTF-8">
<h1>修改密码</h1>
<form method="POST">
    用户名：<input type="text" name="username"><br>
    密码：<input type="password" name="password"><br>
    新密码：<input type="password" name="password_new"><br>
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

$stmt = $mysqli->prepare("UPDATE `users` SET `password` = ? WHERE `username` = ? AND `password` = ?");
$stmt->bind_param('sss', $password_new, $username, $password);

$password_new = $_POST['password_new'];
$username = $_POST['username'];
$password = $_POST['password'];

$result = $stmt->execute();

if (!$result) {
    echo "修改失败，错误信息：" . $mysqli->error;
    exit;
}

echo '修改成功，更新了' . $stmt->affected_rows . '条记录';

$stmt->close();
$mysqli->close();
