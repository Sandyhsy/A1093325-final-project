<?php 
session_start(); 
$name=$_SESSION['name'];
$_SESSION['name']=$name;
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Sandy Studio 顧客服務</title>
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">

</head>
<style>
body {
	background: #f5f5f5;
	height: 100%;
}
.div1{
    width:80%;
    margin:auto;
}
</style>
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
<div class="div1">
    <br><table style="text-align:center;vertical-align:middle;">
        <tr>
            <td width='10'></td>
                <td style="border: solid 3px #966f4f;border-radius: 50px 15px;width:200px;height:50px;"><font face="標楷體" color="Brown"size=5px> 聯絡資訊 
                </font>
            </td>
        </tr>
    </table><table>
        <tr>
            <tr><td colspan="3" height="20"></td></tr>
            <td width='30'></td>
            <td><font face="微軟正黑體">
            &ensp;&ensp;&ensp;&ensp;Line官方帳號: @177lzrnq<br>
            &ensp;&ensp;&ensp;&ensp;IG: s.tudio_accessory<br>
            &ensp;&ensp;&ensp;&ensp;Facebook: https://www.facebook.com/SandyStudioAccessory<br>
            &ensp;&ensp;&ensp;&ensp;行銷企劃、合作等事宜：Hungfish0118@gmail.com<br>
            </font></td>
            <td width='30'></td>
            </tr><td colspan="3" height="20"></td><tr>
        </tr>
    </table>
    <hr style="height:1px;border:none;border-top:1.5px dashed gray">
    <table style="text-align:center;vertical-align:middle;">
        <tr>
            <td width='10'></td>
                <td style="border: solid 3px #966f4f;border-radius: 50px 15px;width:200px;height:50px;"><font face="Times New Roman" color="Brown" size=5px> FAQ 
                </font>
            </td>
        </tr>
    </table><table>
        <tr>
            <tr><td colspan="3" height="20"></td></tr>
            <td width='30'></td>
            <td><font face="微軟正黑體">
            <b>Q1: 沒有註冊會員也一樣可以下單嗎?</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 這裡先跟您說聲抱歉！沒有註冊會員是沒辦法下單的，註冊會員是方便您日後查詢訂單狀況以及我們的顧客管理作業，所以需要先麻煩您加入會員喲！<br><br><br>
            <b>Q2: 如何註冊成會員呢?</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 進入B&R官網後，在頁面右上角點選「會員登入」， 再點選「註冊會員」，按照指示填寫送出即可。<br><br><br>
            <b>Q3: 商品要多久才可以收到? 匯款完成後要如何通知你們呢?</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 訂單成立後，選擇超取需3-7的工作天備貨並送往物流，物流也需3-4天配送至您指定的超商。匯款的訂單，在備貨完成後，則需2~3天個工作天對帳及寄送，如遇缺貨我們會另行簡訊通知。<br><br><br>
            <b>Q4: 請問缺貨商品會再補貨嗎？</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 缺貨商品基本上都會補貨，時間大約4~6週不等。您也可以填寫「補貨通知單」，商品補貨時我們會用E-mail統一寄送補貨通知。 <br><br><br>
            <b>Q5: 耳環能改夾式的嗎？</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 目前還未提供改夾服務，如有不便在此跟您說聲抱歉。<br><br><br>
            <b>Q6: 收到東西後，發現商品有瑕疵是否可以退換貨？</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 若商品有瑕疵或錯誤，請在收到商品的「30日內」與客服聯繫辦理退換貨。<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;► 10日內，可辦理瑕疵退換、無瑕退換，10日後一律轉成購物金。 <br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;► 10日內，瑕疵品及退貨郵資由賣場負擔，10日後運費自行負擔。<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;由上方聯絡資訊擇一聯絡即可，請務必聯繫後再寄出，若自行寄出一概不受理。<br><br><br>
            <b>Q7: 請問怎麼量戒圍，如何判斷戒指大小是否適合我？</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 賣場戒指使用的單位為內徑直徑(cm)，以下提供您方法做測量:<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;1. 請拿直尺測量平常佩戴的戒指內徑。<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;2. 也可測量配戴的手指最寬處(大約)。 <br><br><br>
            <b>Q8: 如何查詢商品出貨狀況？</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 全家取貨付款商品進度查詢: http://goo.gl/ATRiAv<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;7-11取貨付款商品進度查詢: hyperurl.co/7-11<br>
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;黑貓宅配進度查詢:http://www.t-cat.com.tw/Inquire/Trace.aspx<br><br><br>
            <b>Q9: 刷卡會有手續費嗎?</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A: 我們不收取手續費，而刷卡手續費由刷卡系統收取，經由PayPal的化台灣買家用台幣帳戶刷卡是沒有手續費的，海外消費或是非台幣支付才會收取手續費。<br><br><br>
            <b>Q10: 為什麼達到免運活動標準訂單還會出現運費呢?</b><br><br>
            &ensp;&ensp;&ensp;&ensp;A:  例如: 官網活動滿$101免運費，如訂單內有使用購物金，折抵後未滿$101活動標準，系統就會自動產生運費哦！<br><br><br>
            </font></td>
            <td width='30'></td>
        </tr>
    </table>
</div>
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
