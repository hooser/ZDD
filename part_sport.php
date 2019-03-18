<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>home</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <script type="text/javascript">
      		function launch(){
      			self.location="launch.html";
      		}
      </script>

      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <!--jquery-css counter time-->
      <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
      <link href="css/style2.css"  rel="stylesheet" type="text/css">
      <!--prettyPhoto slider-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
   </head>
   <body style="background-image:C:\Users\asud66\Desktop\moban2811\images\g4.jpg; background-repeat:repeat-y;">
      <div class="header-outs" id="home">
         <div class="header-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item">
                        <a href="#gallery" style="font-size:25px" class="nav-link scroll">我的队伍</a>
                     </li>
                     
                     <li class="nav-item">
                        <a href = "#" onclick="window.location = 'logout.php'" style="font-size:25px" class="nav-link scroll">退出登录</a>
                     </li>

                     <li class="nav-item">
                         <select name="Choice", onchange="window.location=this.value;">
                           <option value="join.php">ALL</option>
                           <option value="join_sport.php" selected=selected>体育</option>
                           <option value="join_trip.php">拼车</option>
                           <option value="join_study.php">学习</option>
                           <option value="join_snacks.php" >拼单</option>
                         </select>
						   
                     </li>
                  </ul>
               </div>
            </nav>
            <div class="clearfix"> </div>
         </div>
         <!-- //Navigation -->
         <!-- Slideshow 4 -->
         
            <div class="clearfix"> </div>
            <div class="banner_social">
               <ul class="its_social_list">
                <div class="price-table-new">
        <div id="baba" class="container">
			<?php
				session_start();
				$servername = "localhost";
				$username = "root";
				$password = "1122";
				$dbname = "ruangong";
				$id = $_GET["id"];
				
				// 创建连接
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) 
				{
					die("连接失败: " . $conn->connect_error);
				} 
				$sql = "select * from sport where id = $id";
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				
				$sql = "select name from sport_type where id ={$row['sport_tid']}";
				$_result = $conn->query($sql);
				$_row = $_result->fetch_assoc();
				$type_name = $_row["name"];
				$conn->close();
			?>
			<table>  
                <tr>
					<td>类型：</td>    <td><?php echo "$type_name"?> </td>  
                </tr>   
      
				<tr>  
                    <td>注册时间： </td>    <td><?php echo "{$row['start_time']}"?></td>  
                </tr>
			
				<tr>  
                    <td>活动开始时间：</td>    <td><?php echo "{$row['issue_time']}"?></td>
                </tr>

				<tr>  
                    <td>报名截止时间：</td>    <td><?php echo "{$row['stop_time']}"?></td>  
                </tr>	

				<tr>  
                    <td>最大人数：</td>    <td><?php echo "{$row['max_num']}"?></td>  
                </tr>
				
				<tr>  
                    <td>最小人数：</td>    <td><?php echo "{$row['min_num']}"?></td>  
                </tr>
				
				<tr>  
                    <td>活动地点：</td>    <td><?php echo "{$row['place']}"?></td>  
                </tr>
				
				<tr>  
                    <td>详细阐述：</td>    <td><?php echo "{$row['description']}"?></td>  
                </tr>
            </table>
			
			
        </div>
         <div class="clearfix"> </div>
      </div>  
               </ul>
            </div>
         </div>
         <!-- This is here just to demonstrate the callbacks -->
         <!-- <ul class="events">
            <li>Example 4 callback events</li>
            </ul>-->
      </div>
      <!-- //banner -->
     

     
      
      <!--Price-tags -->
  
      
      
      <!-- footer-->
     
      <!--//footer-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:true,
         		nav: false,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      <!-- OnScroll-Number-Increase-JavaScript -->
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- for-bottom-to-top smooth scrolling -->
      <script>
         $(document).ready(function () {
         	/*
         		var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         		};
         	*/
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         });
      </script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
         <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
      <script src="js/jquery-1.7.2.js"></script>
      <script src="js/jquery.quicksand.js"></script>
      <script src="js/script.js"></script>
      <script src="js/jquery.prettyPhoto.js" ></script>
      <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
   </body>
</html>