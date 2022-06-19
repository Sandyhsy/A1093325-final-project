<?php
    session_start(); 
    $name=$_SESSION['name'];
    $_SESSION['name']=$name;
    require 'productpage.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>購物車</title>
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">
	
<style>
body {
	background: #f5f5f5;
	height: 100%;
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
	<br>
		<?php 
			echo "&nbsp&nbsp&nbsp&nbsp".$name."會員您好";
		?>
	<br><br>
	<form action="4checkorder.php" method="POST"><center>
    <table>
		<tr>
			<td style="height:50px;width:300px;background-color:#DFCFBD;" align="middle"><font face="微軟正黑體" size="4"><b>商 品 名 稱</b></font></td>
			<td style="height:50px;width:200px;background-color:#DFCFBD;" align="middle"><font face="微軟正黑體" size="4"><b>單   價</b></font></td>
			<td style="height:50px;width:200px;background-color:#DFCFBD;" align="middle"><font face="微軟正黑體" size="4"><b>數   量</b></font></td>
			<td style="height:50px;width:200px;background-color:#DFCFBD;" align="middle"><font face="微軟正黑體" size="4"><b>小   計</b></font></td>
            <td style="height:50px;width:50px;background-color:#DFCFBD;" align="middle"><font face="微軟正黑體" size="4"><b>刪   除</b></font></td>
		</tr>
		<tr>
			<td colspan='5' width='90%'><hr width=100%></td>
		</tr>
		<tr>
        <?php
			$total = 0;
			$SQL = "SELECT * FROM accorder WHERE name='$name' AND state='0'";
			$result=mysqli_query($link,$SQL);
			$row=mysqli_fetch_assoc($result);
			if(empty($row)){
				echo "<tr><td colspan='5' align='middle'>";
				echo "<b><h1>尚未加入購物車!</h1></b>";
				echo "</td></tr>";
			}else if(!empty($row)){
				$order="SELECT * FROM accproduct a, accorder o WHERE a.name=o.product AND o.name='$name' AND o.state='0'" ;
				$result2=mysqli_query($link,$order);
				$row1=mysqli_fetch_assoc($result2);
				foreach($result as $row){
					$total = $total + $row['total_price'];
					$id = $row['product'];
					echo "<tr>";
					echo "<td style='width:300px;' align='center'>".$row['product']."</td>";
					echo "<td style='width:200px;' align='center'>".$row1['sell']."</td>";
					echo "<td style='width:200px;' align='center'>".$row['many']."</td>";
					echo "<td style='width:200px;' align='center'>".$row['total_price']."</td>";
					echo "<td style='width:50px;' align='center'><a href='4delete.php?id=$id'><img src='delete.png' style='width:20px;height:20px;'>";
					echo "</tr>";
				}
			}
			?>
	    		<td width='150px'></td>
    		</tr>
        </table>
        <table>
		    <tr>
                <td colspan='5' width='90%'><hr width=90%></td>
		    </tr>
		    <tr>
    			<td bgcolor=#DFCFBD width='600px'></td>
	    		<td bgcolor=#DFCFBD width='200px' align="middle"><font face="微軟正黑體" size="4">合計：<span><?php echo $total;?></span>元</font></td>
		    	<td bgcolor=#DFCFBD width='150px' height='50px'><input type="submit" style="height:50px;width:300px;" name="saveorder" value="去結帳"></td>
		    </tr>	            
	    </table>
    </center>
</form>
<br><br>

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

<script src="all.js"> </script>
<script><!--到最上面的按鈕-->
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
});
</script><!--到最上面的按鈕-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</html>