<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>>������</title>
    
</head>
<body>
 
        
        <?php
        $userid=$_POST['userid'];
        $password=$_POST['password'];
        
		#�������ݿ⣬��ѯ��¼�û������Ϣ
		
        $_SESSION['user']=$userid;
	    $_SESSION['passwd']=$passwd;
		echo "<script>alert('��¼�ɹ�!����ѡ��ҵ����ҳ');window.location.href='admin.php';</script>";

            //echo "<a href=\"admin.php\">�������ѡ��ҵ����ҳ</a>";
        ?>
 
 
</body>
</html>
