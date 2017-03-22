<?php
require 'mysql_connect/link_mysqli_table.php';
$mysqllink =mysqli_connect(HOST,USENAME,PASSWORD,"test");
mysqli_set_charset($mysqllink,"utf8");
//连接数据库
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
 				alert("该用户名或者学号已经被注册，请您更换一个！");
 				window.history.go(-1); 
   	   	 	    </script>
   	   	 	    <?php 
            }else{
                /*可以注册  */
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
                    alert("注册失败"); 
                    </script>
                    <?php                     
                }
            }
            }
            else{
                ?>
                <script>
                alert("请将必填项（前面带有红色*号）填满！");
                window.history.go(-1); 
                </script>
                <?php 
               }         		
?>
