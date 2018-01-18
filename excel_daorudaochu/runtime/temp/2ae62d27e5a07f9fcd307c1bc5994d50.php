<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\daochu\public/../application/index\view\index\ex.html";i:1515461374;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action=<?php echo url('Index/inserexcel'); ?> enctype="multipart/form-data" method="post">
    <input type="file" name="excel" />
    <input type="submit" value="导入">
</form>
</body>
</html>