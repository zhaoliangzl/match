<?php
require 'mysql_connect/link_mysqli_table.php';
?>

<html>
<head>
<link href="css/ce.css" rel="stylesheet" type="text/css"> 

</head>
<body style="text-align:center;" >
<h1 style="text-align: center">欢迎注册！感谢您的支持！</h1><br>
<p style="text-align: center">注：注册成功即可登录，上传你的拍摄作品，与大家一起分享你的作品。</p>
<form action="ce_success.php" method="POST">
<span style="color:red;">*</span>用户名：<input type="text" id="z_user" name="z_user"><br><br>
<span style="color:red;">*</span>密码：<input type="text" id="z_pass" name="z_pass"><br><br>
<span style="color:red;">*</span>学号：<input type="text" id="z_num" name="z_num"><br><br>
<span style="color:red;">*</span>姓名：<input type="text" id="z_name" name="z_name"><br><br>
<span style="color:red;">*</span>班级：<input type="text" id="z_class" name="z_class"><br><br>
电话：<input type="text" id="z_num" name="z_tel"><br><br>
QQ：<input type="text" id="z_num" name="z_qq"><br><br>

<p>注：请按照你的真实信息填写，带*号内容属于必填内容，每个人的用户名和学号是唯一的，所以请按照真实信息填写！</p>
<input type="submit" value="立即注册">
</form>



</body>
</html>