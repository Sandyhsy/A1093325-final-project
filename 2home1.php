<?php 
    session_start(); 
    $name=$_SESSION['name'];
    $_SESSION['name']=$name;
    require 'productpage.php';
    $SQL="SELECT * FROM accproduct WHERE state=1";
    $result=mysqli_query($link,$SQL);
?>
        <!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>Sandy Studio Accessory</title><!--標題-->
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">
    <!--輪播-->
    <link rel="stylesheet" href="flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider.js"></script>
    <script type="text/javascript" charset="utf-8"></script>
    <script>$(window).load(function(){
        $('.flexslider').flexslider();
    });
    </script><!--輪播-->
    <style>
body {
	background: #f5f5f5;
	height: 100%;
}
button{
    border:0;
    background-color:#966f4f;
    color:white;
    border-radius:10px;
    cursor:pointer;
    width:40px;
    height:25px;
}
.divblock{
	width:1200px;
	height:auto;
	margin:0px auto; 
}
.divblock img{
	width:300px;
	height:300px;
}
a{text-decoration:none}
a:hover{text-decoration:none}
</style>
</head>

<header class="header">
<table>
        <tr>
            <td width='25'></td>
            <td><br><img src="logo.png" width=80 height=80 /></td>
            <td width='15'></td>
            <td><font face="Gungsuh" color=white><h2> Sandy Studio </h2></font></td>
            <td width='325'></td>
            <td valign="bottom">
                <input type="button" value="關於我們" style="width:110px;height:40px;" onclick="location.href='1aboutus1.php'"></td>
            <td valign="bottom">
                <input type="button" value="商品資訊" style="width:110px;height:40px;" onclick="location.href='2home1.php'"></td>
            <td valign="bottom">
                <input type="button" value="顧客服務" style="width:110px;height:40px;" onclick="location.href='3customer1.php'"></td>
            <td valign="bottom">
                <input type="button" value="購物車" style="width:110px;height:40px;" onclick="location.href='4cart.php'"></td>
            <td valign="bottom">
                <input type="button" value="會員" style="width:110px;height:40px;" onclick="location.href='6vip.php'"></td>
            <td valign="top" width='20'>
                <img src="exit.png" style="width:20px;height:20px;" onclick="location.href='2home.php'"></td>
        </tr>
    </table>
</header>

<body>

<!--輪播--><div class="flexslider">
  <ul class="slides">
    <li><img src="new.jpg"/></li>
    <li><img src="pic.jpg"/></li>
    <li><img src="free.jpg"/></li>
  </ul>
</div><!--輪播-->
<br><br>
<div class="divblock">
    <center><table>
        <tr>
            <td><button onclick="location.href='2home1.php'">1</td>
            <td><button onclick="location.href='2home1-1.php'">2</td>
    </table></center>
    <br>
    <center><table>
   <?php
        $SQL="SELECT * FROM accproduct";
        $result=mysqli_query($link,$SQL);
        $count=mysqli_num_rows($result);
        $num=0;
        for($i=1;$i<$count;$i++){
            if($i%2!=0){
                $sql = "SELECT * FROM accproduct WHERE num='$i' AND state=1";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);
                echo "<td height='50px' width='350px'>";
                echo "<center><a href='".$row['name'].".php'><img src='".$row['image']."' width='70%'></center><br>";
                echo "<center><font color=black size=4px>".$row['name']."</center><br>";
                echo "<center><font color=black size=4px>$".$row['sell']."</center></a><br><br>";
                echo "</td>";  
                $num++;
                if($num%3==0)
                {
                    echo "<tr>";
                }
        }
    }
    ?>
   </table></center>
   <center><table>
        <tr>
            <td><button onclick="location.href='2home1.php'">1</td>
            <td><button onclick="location.href='2home1-1.php'">2</td>
    </table></center>
    <center><table>
</div>
<br>
    <button type="button" id="BackTop" class="toTop-arrow"></button><!--到最上面的按鈕-->
    <!--最下方的板板-->
    <footer id="footer" class="footer"><br>
        <p style="text-align: center;"><font color="white" size=2px face="微軟正黑體"><strong>Sandy Studio｜生活再怎麼不順心 也需要飾懷</strong></font></p> 
        <p style="text-align: center;"><font color="white" size=1px face="微軟正黑體">客服信箱：hungfish0118@gmail.com</font></p> 
        <p style="text-align: center;"><font color="white" size=1px face="微軟正黑體">業務合作：hungfish0118@gmail.com</font></p> 
        <p style="text-align: center;"><font color="white" size=1px face="微軟正黑體">office hour：Mon-Fri&nbsp; 10:00 - 18:00</font></p> 
        <p style="text-align: center;"><font color="white" size=1px face="微軟正黑體">其他時段來信，回覆若有怠慢請見諒</font></p> 
        <br>
        <p style="text-align: center;"><font color="white" size=1px face="微軟正黑體">Copyright ©2022 Sandy Studio</font></p> 
</footer>

</body>

<!--script--><!--輪播-->
<script type="text/javascript">
    $(function() {
        $(".flexslider").flexslider({
        slideshowSpeed: 5000, //展示时间间隔ms
        animationSpeed: 500, //滚动时间ms
        touch: true //是否支持触屏滑动
        });
    }); //輪播
//到最上面的按鈕
$(function(){
	$('#BackTop').click(function(){ 
		$('html,body').animate({scrollTop:0}, 333);
	});
	$(window).scroll(function() {
		if ( $(this).scrollTop() > 300 ){
			$('#BackTop').fadeIn(222);
		} else {
			$('#BackTop').stop().fadeOut(222);
		}
	}).scroll();
});//到最上面的按鈕
</script>
<!--script-->

</html>