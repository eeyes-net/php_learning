<h1>所有用户信息</h1>
<?php

$db_host = '127.0.0.1';
$db_username = 'root';
$db_password = '';
$db_database = 'test';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);

$result = $mysqli->query("SELECT * FROM `users`");

if (!$result) {
    echo '查询失败，错误信息：' . $mysqli->error;
    exit;
}

echo '查询成功', '<br><br>';

$records = $result->fetch_all(MYSQLI_ASSOC);

foreach ($records as $record) {
    echo 'ID：', $record['id'], '<br>';
    echo '用户名：', $record['username'], '<br>';
    echo '密码：', $record['password'], '<br>';
    echo '姓名：', $record['name'], '<br>';
    echo '<br>';
}

$result->close();
$mysqli->close();
