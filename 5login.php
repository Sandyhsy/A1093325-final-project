<?php
session_start();
$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'sandystudioacc');  // 預設使用的資料庫名稱
    $sql = "SELECT `email`, `password` FROM `sandystudioacc`.`vip`;";
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>會員登入</title>
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
.login{
    margin-top:100px;
    margin-left:325px;
    margin-bottom:100px;
    width:500px;
    height:500px;
    opacity: 0.75;
    display:block;
}
.register{
     margin-top:100px;
     margin-left:325px;
     margin-bottom:100px;
     width:500px;
     height:500px;
     opacity: 0.75;
     margin-top:100px;
     display:none;
}
::placeholder {
	color: black;
}
.table {
    border:3px #DDDDDD solid;
    padding:5px;
    background-color:#DFCFBD;
}
.input{
    width:480px;
    height:40px;
    background-color:white;
    color:black;
}
.none{
    color:black;
    border-color:#DFCFBD;
    width:300px;
    height:60px;
    background-color:#f4ecd0;
}
.none:hover{ 
    color:black;
    background-color:#f4ecd0;
    border:2px #f4ecd0 solid;
}
.block{
    color:black;
    border-color:#f4ecd0;
    width:300px;
    height:60px;
    background-color:#DFCFBD;
}
.block:hover{ 
    color:black;
    background-color:#DFCFBD;
    border:2px #DFCFBD solid;
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
                <input type="button" value="關於我們" style="width:110px;height:40px;" onclick="location.href='1aboutus.php'"></td>
            <td valign="bottom">
                <input type="button" value="商品資訊" style="width:110px;height:40px;" onclick="location.href='2home.php'"></td>
            <td valign="bottom">
                <input type="button" value="顧客服務" style="width:110px;height:40px;" onclick="location.href='3customer.php'"></td>
            <td valign="bottom">
                <input type="button" value="購物車" style="width:110px;height:40px;"></td>
            <td valign="bottom">
                <input type="button" value="會員登入" style="width:110px;height:40px;" onclick="location.href='5login.php'"></td>
            <td width='25'></td>
        </tr>
    </table>
</header>

<body>
<!--登入-->

	<form class="login" id="login" action="logcheck.php" method="post">
        <table class="table" cellpadding='5'>
        <tr style="background-color:#f4ecd0">
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToRegister()" value='會員註冊'></td>
            <td align='center' valign="middle" style="background-color:#DFCFBD">
                <input class="block" type='button' onclick="TurnToLogin()" value='會員登入'></td>
        </tr><tr style="background-color:#DFCFBD">
            <td colspan="2" align='center' valign="middle"><br>
            <input class="input" name="gmail" type="email" placeholder="  Gmail" required="required">
            <br><br>
            <input class="input" name="password" type="password" placeholder="  密碼" required="required">
            <br><br>
            <a href='7forget.php' class="link">忘記密碼?</a>
            <br><br>
            <input type="submit" class="none" name="" type="button" value=" 登 入 "/>
            </td>
        </tr>
        </table>
	</form>
    <form class="register" id="register" action="register.php" method="post">
        <table class="table" cellpadding='5';>
        <tr style="background-color:#f4ecd0;">
            <td align='center' valign="middle" style="background-color:#DFCFBD">
                <input class="block" type='button' onclick="TurnToRegister()" value='會員註冊'></td>
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToLogin()" value='會員登入'></td>
        </tr><tr style="background-color:#DFCFBD">
            <td colspan="2" align='center' valign="middle"><br>
            <input class="input" name="name" type="text" placeholder="  會員姓名" required="required">
            <br><br>
            <input class="input" name="birth" type="date" placeholder="  會員生日" required="required">
            <br><br>
            <input class="input" name="tel" type="tel" oninput="value=value.replace(/[^\d]/g,'')" pattern="[0-9]{10}" placeholder="  電話號碼" required="required">
            <br><br>
            <input class="input" name="address" type="address" placeholder="  寄件地址" required="required">
            <br><br>
            <input class="input" name="gmail" type="email" placeholder="  Gmail" required="required">
            <br><br>
            <input class="input" name="password" type="password" placeholder="  密碼" required="required">
            <br><br>
            <input type="submit" class="none" name="" type="button" value="加入會員"/>
            </td>
        </tr>
        </table>
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

<script>
    var TurnToLogin = () => {
        document.getElementById('login').style.display = "block";
        document.getElementById('register').style.display = "none";
    }
    var TurnToRegister = () => {
        document.getElementById('register').style.display = "block";
        document.getElementById('login').style.display = "none";
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	});
</script>
<!--到最上面的按鈕-->
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
</html>