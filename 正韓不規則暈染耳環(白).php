<?php 
session_start(); 
$name=$_SESSION['name'];
$_SESSION['name']=$name;
echo $name;
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Sandy Studio</title>
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
.divblock{
	width:1200px;
	height:2000px;
	margin:0px auto; 
}
.divblock img{
	width:500px;
	height:500px;
}
.box{
    text-align:center;
    padding-top:30px;
    border-bottom:1.5px dashed;
}
select {
    font-size: 12px; /*文字大小*/
    color: black; /*文字顏色*/
    background-color: #f5f5f5; /*選單背景顏色*/
    width: 300px;
    height: 3em;
}
.click{
    border:0;
    background-color:#f5f5f5;
    color:black;
    border-radius:10px;
    cursor:pointer;
}
.click:hover{ 
        color:black;
        background-color:#f5f5f5;
        border:0px;
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
<br><br>
<div class="divblock">
    <?php
        require 'productpage.php';
        $sql = "SELECT * FROM accproduct WHERE num=59";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <center><table>
    <form action="cartadd.php" method="POST">
    <tr>
        <?php echo "<td><img src=".$row['image']." width=100%></td>"?>
        <td width='50px'></td>
        <td>
            <?php echo '<font face="微軟正黑體" size="5">'.$row['name'].'</font><br><br><br>'?>
            <?php echo '<font face="微軟正黑體"><b>價格：$'.$row['sell'].'</b></font>'?>
            <br><br><br><br>

            <?php echo '<br><font size="2" name="stock">庫存提示 </font>'.$row['stock']; ?>
            <br><br>
            <table border="1" cellspacing="0" bordercolor="#000000" width = "80%" style="border-collapse:collapse;background-color:#f5f5f5;"><tr>
                <td><input class="click" style="width:65px;height:40px;" id="dec" type="button" value="-"></td>
                <td><input class="click" style="width:160px;height:40px;text-align:center;" id="count" type="text" name="buy" value="1" size="1"></td>
                <td><input class="click" style="width:65px;height:40px;" id="inc" type="button" value="+" ></td>
                <td><input type="hidden" value="<?php echo $row['name'];?>" name="product"></td>
            </tr></table>
            <br>
            <input type="hidden" name="name" value="<?php echo $name?>">
            <input type="hidden" name="price" value="<?php echo $row['sell']?>">
            <input type="submit" style="width:305px;height:40px;" id="add" class="none" type="button" name="order" value="加入購物車">
        </td>
    </tr>
    </form>
    </table></center>
    <div class="box"></div><br>
    <center>此款耳環是一體成型夾式的<br>❌所以沒辦法改耳釘<br><br>
    <?php echo '材質：'.$row['material']; ?><br><br>所有商品都是手工製作👐<br>有小小差異是正常的哦<br>極度完美主義者慎選😱<br>不配戴的時候要放進夾鏈袋或收納盒<br>🧹以免氧化後難以清理哦</center>
    <br>
    <center><img src="photo\62 (1).jpg"></center>
    <center><img src="photo\62 (3).jpg"></center>
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
</script><!--到最上面的按鈕-->
<script>//左右加減的按鈕
    window.onload = function(){
        var count = document.getElementById("count");
        var inc = document.getElementById("inc");
        var dec = document.getElementById("dec");
        inc.onclick = function(){
            count.value = parseInt(count.value) + 1;
        };
        dec.onclick = function(){
            if (!isNaN(count.value) && count.value > 1){
                count.value = parseInt(count.value) - 1;
            }else{
                count.value = 1;
            }
        };
    };
</script>
</html>