<html>
<head>
<?php
require 'mysql_connect/link_mysqli_table.php';
$mysqllink =mysqli_connect(HOST,USENAME,PASSWORD,"test");
mysqli_set_charset($mysqllink,"utf8");
?>
<script src=js/sql-main.js> </script>
<link href=css/sql-main.css type="text/css" rel="stylesheet">

</head>
<body>            
        <?php                         	 
//    	 	if (!empty($_POST['username'])&&!empty($_POST['password']))
//    	   	 	{	    
//    	   	 	    $sql="select * from user";
//    	   	 	    $result=mysqli_query($mysqllink,$sql);   	   	 	    
//    	   	 	    $username=$_POST['username'];
//    	   	 	    $password=$_POST['password'];
//    	   	 	    while ($row=mysqli_fetch_array($result))
//    	   	 	    {   	   	 	    
//    	   	 	        if($username==$row['username']&&$password==$row['password'])
//    	   	 	        { 	   	 	               	   	 	            
//    	   	 	            $s=100;
//    	   	 	            break;
//    	   	 	        }else {
//    	   	 	            $s=0;  	   	 	        
//    	   	 	        }
//    	   	 	        echo "账号".$row['username']."密码：".$row['password'];
//    	   	 	    }
//    	   	 	    if ($s==100){
   	   	 	        ?><script>
//    	   	 	        alert("登录成功！");   	   	 	        
   	   	 	        </script>
   	   	 	        <?php 
//    	   	 	    }else{
   	   	 	        ?><script>
//    	   	   	 	 	 window.history.go(-1); 
//            	   	   	 alert("账号密码不正确！");   
   	   	 	        </script>
   	   	 	        <?php  
//    	   	 	          } 	   	 	       	   	 	    
//    	   	 	}else{
//    	   	 	    ?>
<!--    	   	 	    <script> -->
<!-- // 					alert("请输入用户名或密码！");
// 					window.history.go(-1); -->
   	   	 	    </script>
   	   	 	    <?php 
//    	   	 	}         
   		?>
   		<div id="any">
        <div id="left"> 
            <div id="left-top"> 
            <br> 
                 <h1 style="margin:0px; text-align:center;">个人中心</h1>
            </div>
            <div id="left-button">
            <br> 
                 <h1 style="margin:0px; text-align:center;">上传作品</h1>
            </div>
        </div>
        <div id="top"></div>
        <div id="dis">
            <h1 style="text-align: center;">投票区</h1>
            
        
        
        </div>
        
        
        </div>
        
        
               
</body>
</html>