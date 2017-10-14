<meta charset="UTF-8">

<?php
/** @var \mysqli $mysqli */
$mysqli = include 'connect.php';

// 准备待执行的SQL语句
$stmt = $mysqli->prepare("SELECT `id`, `username`, `content`, `created_at` FROM `posts`");
// 绑定语句中返回的变量（这个类似于引用的方式）
$stmt->bind_result($id, $username, $content, $created_at);
// 执行准备好的SQL语句
$result = $stmt->execute();

if (!$result) {
    echo "查询失败，错误信息：" . $mysqli->error;
}

?>
<h1>评论列表</h1>
<table>
    <thead>
        <tr>
            <td>用户名</td>
            <td>内容</td>
            <td>时间</td>
            <td>删除</td>
        </tr>
    </thead>
    <tbody>
        <?php while ($stmt->fetch()) { ?>
            <tr>
                <td><?php echo $username; ?></td>
                <td><?php echo $content; ?></td>
                <td><?php echo $created_at; ?></td>
                <td>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" value="删除">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<h1>发表评论</h1>
<form action="create.php" method="POST">
    用户名：<input type="text" name="username"><br>
    内容：<br>
    <textarea name="content"></textarea><br>
    <input type="submit">
</form>
