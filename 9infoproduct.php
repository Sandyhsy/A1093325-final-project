<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>商品</title>
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">

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
                <input type="button" value="關於我們" style="width:110px;height:40px;" onclick="location.href='1aboutus.php'"></td>
            <td valign="bottom">
                <input type="button" value="商品資訊" style="width:110px;height:40px;" onclick="location.href='2home.php'"></td>
            <td valign="bottom">
                <input type="button" value="顧客服務" style="width:110px;height:40px;" onclick="location.href='3customer.php'"></td>
            <td valign="bottom">
                <input type="button" value="購物車" style="width:110px;height:40px;" onclick="location.href='4cart.php'"></td>
            <td valign="bottom">
                <input type="button" value="會員登入" style="width:110px;height:40px;" onclick="location.href='5login.php'"></td>
            <td width='25'></td>
        </tr>
    </table>
</header>

<body>
    
    <form action="mailsend.php" method="post">
        您的email:<input type="email" name="email" placeholder="請輸入Google帳號"><br>
        您的姓名:<input type="text" name="uName"><br>
        您的留言:<input type="textarea" name="message" rows="10" cols="20"><br>
        <input type="submit">
    </form>
    
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
<!--到最上面的按鈕-->
<script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>