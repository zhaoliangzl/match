<?php
require 'mysql_connect/link_mysqli_table.php';
$mysqllink =mysqli_connect(HOST,USENAME,PASSWORD,"test");
mysqli_set_charset($mysqllink,"utf8");
//�������ݿ�
$s=1;
if (!empty($_POST['z_user'])&&!empty($_POST['z_num'])&&!empty($_POST['z_pass'])&&!empty($_POST['z_name'])&&!empty($_POST['z_class'])){
    $sql="select * from user";
    $result=mysqli_query($mysqllink,$sql);
    $username=$_POST['z_user'];
    $usernum=$_POST['z_num'];
    while ($row=mysqli_fetch_array($result)){
        if($username===$row['username']&&$usernum===$row['student_num']) {
            $s=100;
            break;
        }else{
            $s=0;
        }
            }
            if ($s==100){
                ?>
    	   	 	<script>
 				alert("���û�������ѧ���Ѿ���ע�ᣬ��������һ����");
 				window.history.go(-1); 
   	   	 	    </script>
   	   	 	    <?php 
            }else{
                /*����ע��  */
                if (!empty($_POST['z_tel'])||!empty($_POST['z_qq'])){
                    $tel=$_POST['z_tel'];
                    $qq=$_POST['z_qq'];
                }else{
                    $tel=" ";
                    $qq=" ";
                }
                $sql_insert="insert into user(username,password,student_num,name,class,tel_phone,QQ)values('".$_POST['z_user']."','".$_POST['z_pass']."','".$_POST['z_num']."','".$_POST['z_name']."','".$_POST['z_class']."','".$tel."','".$qq."')";
                if (mysqli_query($mysqllink,$sql_insert)){
                    ?>
                    <script>window.location.href='sql.php';</script>
                    <?php
                }else{
                    ?>
                    <script>
                    alert("ע��ʧ��"); 
                    </script>
                    <?php                     
                }
            }
            }
            else{
                ?>
                <script>
                alert("�뽫�����ǰ����к�ɫ*�ţ�������");
                window.history.go(-1); 
                </script>
                <?php 
               }         		
?>
