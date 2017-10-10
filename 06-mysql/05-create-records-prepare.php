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

// 准备待执行的SQL语句
$stmt = $mysqli->prepare("INSERT INTO `users` (`username`, `password`, `name`) VALUES (?, ?, ?);");
// 绑定语句中要用的变量（这个类似于引用的方式）
$stmt->bind_param('sss', $username, $password, $name);
// 给这些变量赋值
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
// 执行准备好的SQL语句
$result = $stmt->execute();

if (!$result) {
    echo '新增失败，错误信息：' . $mysqli->error;
    exit;
}

echo '新增成功';

$stmt->close();
$mysqli->close();
