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
	height:4030px;
	margin:0px auto; 
}
.divblock img{
	width:300px;
	height:300px;
}
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
<!--輪播--><div class="flexslider"><!--style="width:700px;height:200px;"-->
  <ul class="slides">
    <li><img src="new.jpg"/></li><!--style="width:600px;height:200px;"-->
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
	<center>
	<table>
		<tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=1";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p1.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=3";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p3.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=5";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p5.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
		</tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=7";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p7.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=9";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p9.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=11";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p11.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=13";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p13.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=15";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p15.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=17";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p17.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=19";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p19.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=21";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p21php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=23";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p23.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
		</tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=25";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p25.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=27";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p27.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=29";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p29.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=31";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p31.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=33";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p33.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
            <td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=18";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p18.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=35";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p35.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=37";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p37.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
            <td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=39";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p39.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=41";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p41.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=43";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p43.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
            <td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=45";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p45.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=47";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p47.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=49";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p49.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
            <td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=51";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p51.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=53";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p53.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=55";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p55.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        	<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=57";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p57.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
                </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=59";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p59.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=61";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p61.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        	<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=63";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p63.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
		</tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=65";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p65.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=67";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p67.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        	<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=69";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p69.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=71";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p71.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
			<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=73";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p73.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        	<td width='50'></td>
            <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=75";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p75.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        </tr><tr><td height='30'></td></tr><tr>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=77";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p77.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
        <td width='50'></td>
        <?php 
            require 'productpage.php';
            $sql = "SELECT * FROM accproduct WHERE num=79";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<td><a href='p79.php'><img src=".$row['image']." width=100%></a><br><center><b>".$row['name']."</b></center><br><center>$".$row['sell']."</center></td>";
        ?>
		</tr>
	</table>
	</center>
    <br><br>
    <center><table>
        <tr>
            <td><button onclick="location.href='2home1.php'">1</td>
            <td><button onclick="location.href='2home1-1.php'">2</td>
    </table></center>
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