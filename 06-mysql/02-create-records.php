<meta charset="UTF-8">
<h1>创建用户</h1>
<form method="POST">
    用户名：<input type="text" name="username"><br>
    密码：<input type="password" name="password"><br>
    姓名：<input type="text" name="name"><br>
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

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$result = $mysqli->query("INSERT INTO `users` (`username`, `password`, `name`) VALUES ('$username', '$password', '$name')");

if (!$result) {
    echo '新增失败，错误信息：' . $mysqli->error;
    exit;
}

echo '新增成功';

$mysqli->close();
