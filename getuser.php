<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>>旅有友</title>
    
</head>
<body>
 
        
        <?php
        $userid=$_POST['userid'];
        $password=$_POST['password'];
        
		#连接数据库，查询记录用户相关信息
		
        $_SESSION['user']=$userid;
	    $_SESSION['passwd']=$passwd;
		echo "<script>alert('登录成功!进入选择业务主页');window.location.href='admin.php';</script>";

            //echo "<a href=\"admin.php\">点击进入选择业务主页</a>";
        ?>
 
 
</body>
</html>
