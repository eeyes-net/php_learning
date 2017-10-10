<h1>所有用户信息</h1>
<?php

$db_host = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_database = 'test';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);

// 准备待执行的SQL语句
$stmt = $mysqli->prepare("SELECT `id`, `username`, `password`, `name` FROM `users`");
// 绑定语句中返回的变量（这个类似于引用的方式）
$stmt->bind_result($id, $username, $password, $name);
// 执行准备好的SQL语句
$result = $stmt->execute();

if (!$result) {
    echo "查询失败，错误信息：" . $mysqli->error;
    exit;
}

echo '查询成功', '<br><br>';

// 每次fetch都会更新 $id, $username, $password, $name 变量的值
while ($stmt->fetch()) {
    echo 'ID：', $id, '<br>';
    echo '用户名：', $username, '<br>';
    echo '密码：', $password, '<br>';
    echo '姓名：', $name, '<br>';
    echo '<br>';
}

$stmt->close();
$mysqli->close();
