<?php
require 'mysql_connect/link_mysqli_table.php';
?>

<html>
<head>
<link href="css/ce.css" rel="stylesheet" type="text/css"> 

</head>
<body style="text-align:center;" >
<h1 style="text-align: center">��ӭע�ᣡ��л����֧�֣�</h1><br>
<p style="text-align: center">ע��ע��ɹ����ɵ�¼���ϴ����������Ʒ������һ����������Ʒ��</p>
<form action="ce_success.php" method="POST">
<span style="color:red;">*</span>�û�����<input type="text" id="z_user" name="z_user"><br><br>
<span style="color:red;">*</span>���룺<input type="text" id="z_pass" name="z_pass"><br><br>
<span style="color:red;">*</span>ѧ�ţ�<input type="text" id="z_num" name="z_num"><br><br>
<span style="color:red;">*</span>������<input type="text" id="z_name" name="z_name"><br><br>
<span style="color:red;">*</span>�༶��<input type="text" id="z_class" name="z_class"><br><br>
�绰��<input type="text" id="z_num" name="z_tel"><br><br>
QQ��<input type="text" id="z_num" name="z_qq"><br><br>

<p>ע���밴�������ʵ��Ϣ��д����*���������ڱ������ݣ�ÿ���˵��û�����ѧ����Ψһ�ģ������밴����ʵ��Ϣ��д��</p>
<input type="submit" value="����ע��">
</form>



</body>
</html>