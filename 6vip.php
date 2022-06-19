<?php
session_start();
$name=$_SESSION['name'];
$_SESSION['name']=$name;
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>會員專區</title>
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">

	<style>
body {
	background: #f5f5f5;
	height: auto;
}
.vippage{
    margin-top:50px;
    margin-left:200px;
    width:1000px;
    height:500px;
    opacity: 0.75;
    display:block;
}
.order{
    margin-top:50px;
    margin-left:200px;
    width:1000px;
    height:500px;
    opacity: 0.75;
    display:none;
}
.point{
    margin-top:50px;
    margin-left:200px;
    width:1000px;
    height:500px;
    opacity: 0.75;
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
}
.block{
    color:black;
    border-color:#966f4f;
    width:274px;
    height:60px;
    background-color:#DFCFBD;
}
.none{
    color:black;
    border-color:#DFCFBD;
    width:274px;
    height:60px;
    background-color:#966f4f;
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
    <!--個人資訊vippage-->
    <form class="vippage" id="vippage">
        <table class="table" cellpadding='5'>
        <tr style="background-color:#DFCFBD;">
            <td align='center' valign="middle">
                <input class="block" type='button' onclick="TurnToVippage()" value='個人資訊'></td>
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToPoint()" value='會員點數'></td>
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToOrder()" value='訂 單'></td>
        </tr>
        <?php
            $mail=$_SESSION["mail"];
            include 'productpage.php';
                //將資料庫裡的所有會員資料顯示在畫面上
                $sql = "SELECT * FROM accvip WHERE mail='$mail'";
                $result = mysqli_query($link,$sql);
                $row=mysqli_fetch_assoc($result);
                echo "<tr><td width='30' colspan='3'>會員等級： ".$row['rank']."</td></tr>";
                echo "<tr><td width='30' colspan='3'>會員姓名： ".$row['name']."</td></tr>";
                echo "<tr><td width='30' colspan='3'>會員生日： ".$row['birth']."</td></tr>";
                echo "<tr><td width='30' colspan='3'>電話號碼： 0".$row['tel']."</td></tr>";
                echo "<tr><td width='30' colspan='3'>寄件地址： ".$row['address']."</td></tr>";
                echo "<tr><td width='30' colspan='3'>電子郵件： ".$row['mail']."</td></tr>";
        ?>
        </table>
    </form>
    <!--會員點數point-->
    <form class="point" id="point">
        <table class="table" cellpadding='5';>
        <tr style="background-color:#DFCFBD;">
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToVippage()" value='個人資訊'></td>
            <td align='center' valign="middle">
                <input class="block" type='button' onclick="TurnToPoint()" value='會員點數'></td>
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToOrder()" value='訂 單'></td>
        </tr>
        <?php
            $mail=$_SESSION["mail"];
            include 'productpage.php';
            $sql = "SELECT * FROM accvip WHERE mail='$mail'";
            $result = mysqli_query($link,$sql);
            $row=mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td>&nbsp&nbsp&nbsp&nbsp會員點數：".$row['point']."</td>";
            echo "</tr>";
        ?>
            <tr width='300'><td colspan="3"><hr  width=95%></td></tr>
            <tr><td colspan="3">&nbsp&nbsp&nbsp&nbsp點數獲取方式：</td></tr>
            <tr><td colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp1.於商城中單筆消費滿NT$500(含)，不包含運費等其他費用，即可獲得1點。</td></tr>
            <tr><td colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.消費超過NT$500每增加NT$50，則可獲得1點，以此類推。</td></tr>
            <tr><td colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.於商城活動期間，點數累積方式會有所異動，敬請參照活動簡章。</td></tr>
            <tr><td colspan="3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp4.點數無使用期限。</td></tr>
        </table>
    </form>
    <!-- 訂單order -->
    <form class="order" id="order">
        <table class="table" cellpadding='5';>
        <tr style="background-color:#DFCFBD;">
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToVippage()" value='個人資訊'></td>
            <td align='center' valign="middle">
                <input class="none" type='button' onclick="TurnToPoint()" value='會員點數'></td>
            <td align='center' valign="middle">
                <input class="block" type='button' onclick="TurnToOrder()" value='訂 單'></td>
        </tr><tr>
        <?php                   
            echo "<td align='center'>商品名稱</td>";
            echo "<td align='center'>數量</td>";
            echo "<td align='center'>總金額</td></tr>";
            echo "<tr><td colspan='3'><hr></td></tr>";
            require 'productpage.php';
            $SQL = "SELECT product, many, total_price FROM accorder o, accvip v WHERE v.name='$name' AND o.state='1' || o.state='2'";
            $result=mysqli_query($link,$SQL);
            $count=mysqli_num_rows($result);
            if($count > 0){
                $sql = "SELECT * FROM accorder WHERE name='$name' AND state='1' UNION SELECT * FROM accorder WHERE name='$name' AND state='2'";
                $result1=mysqli_query($link,$sql);
                $row=mysqli_fetch_assoc($result1);
                foreach($result1 as $row){
                    echo "<tr><td align='center'>".$row['product']."</td>";
                    echo "<td align='center'>".$row['many']."</td>";
                    echo "<td align='center'>".$row['total_price']."</td>";
                }
            }else{
                echo "<td colspan='3' align='center'>尚未新增訂單</td>";
                echo "<tr><td colspan='3' align='center'><a href='2home1.php'>看更多</a></td>";
            }
        ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var TurnToVippage = () => {
        document.getElementById('vippage').style.display = "block";
        document.getElementById('point').style.display = "none";
        document.getElementById('order').style.display = "none";
    }
    var TurnToPoint = () => {
        document.getElementById('vippage').style.display = "none";
        document.getElementById('point').style.display = "block";
        document.getElementById('order').style.display = "none";
    }
    var TurnToOrder = () => {
        document.getElementById('vippage').style.display = "none";
        document.getElementById('point').style.display = "none";
        document.getElementById('order').style.display = "block";
    }
</script>
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

</html>