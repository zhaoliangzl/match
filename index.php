<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>长院讲协植物切片比赛</title>
   
    <link href="css/head.css"  rel="stylesheet" type="text/css"> 
</head>
<body style="background:url(img/x0.jpg) no-repeat;background-size:100% 100%;">
    <div id="head">
            <p id="title">植物切片显微照片比赛</p>
            <ul id="head_list_h">
                <li id="head_list_l1">首页
                    <div id="head_list_hl1">
                        <a href="">页面一</a>
                        <a href="">页面二</a>
                        <a href="">页面三</a>
                    </div>               
                </li> 
                <li id="head_list_l2">活动
                    <div id="head_list_hl2">
                        <a>活动一</a>
                        <a>活动二</a>
                        <a>活动三</a>
                    </div>
                </li>
                <li id="head_list_l3">服务</li>
                <li id="head_list_l4">关于</li>           
            </ul>
    </div>
    
    <div id="body" >      
        <div id="body-left"><input type="image" id="left-button" onclick="right()" src="img/btn2.png"></div>
        <div id="pic"><img src="" id="img1"></img></div>
        <div id="body-right"><input type="image" id="right-button" onclick="left()" src="img/btn1.png"></div>        
        </div>                    
    </div>
    <div id="body-main" >
    <br><br><br><h1 >欢迎登录</h1><br>
        <div id="login">
        <form action="sql.php" method="POST">
                            账号：<input type="text" value="" id="user" name="username"><br><br>
                            密码：<input type="password" value="" id="password" name="password"> <br><br><br>
           &nbsp&nbsp&nbsp<input type="submit" value="登录" id="btn-login" ">&nbsp&nbsp&nbsp
           <input type="button" value="注册" id="btn-zhu">
        </form>
        </div>
    </div>
   
    <div id="foot">
    <span id="xc">活动简介：</span><span id="js">本次活动是科学与艺术的结合,旨在提高大家最科学的兴趣，让唯美显微切片照片走到大家的身边，</span>
    
    
    </div>
     <script src="js/head.js"></script>
</body>
</html>