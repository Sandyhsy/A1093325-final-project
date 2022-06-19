<?php
session_start();
require 'productpage.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>會員管理</title>
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
.click{
    border:0;
    background-color:#966f4f;
    color:white;
    border-radius:10px;
    cursor:pointer;
}
.click:hover{ 
        color:white;
        background-color:#966f4f;
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
                <input type="button" value="訂單管理" style="width:110px;height:40px;" onclick="location.href='back1.php'"></td>
            <td width='35'></td>
            <td valign="bottom">
                <input type="button" value="商品管理" style="width:110px;height:40px;" onclick="location.href='back2.php'"></td>
            <td width='35'></td>
            <td valign="bottom">
                <input type="button" value="會員管理" style="width:110px;height:40px;" onclick="location.href='back3.php'"></td>
            <td width='35'></td>
            <td valign="bottom">
                <img src="exit.png" style="width:20px;height:20px;" onclick="location.href='2home.php'"></td>
            <td width='25'></td>
        </tr>
    </table>
</header>

<body>
<br>
<center><font style="微軟正黑體" size="5"><b>新增商品</b></font></center><br>
	<div>						
        <center><form action="" method="post" name="formAdd" id="formAdd" senctype="multipart/form-data">
				<table border='1'>
					<tr>
				    	<td>編號</td>
						<td><input type="text" style="width:290px;height:25px;" name="num" required="required"></td>
					</tr><tr>
						<td>商品名稱</td>
						<td><input type="text" style="width:290px;height:25px;" name="name" required="required"></td>
					</tr><tr>
						<td>售價</td>
						<td><input type="text" style="width:290px;height:25px;" name="sell" required="required"></td>
					</tr><tr>
						<td>優惠價</td>
						<td><input type="text" style="width:290px;height:25px;" name="sale" required="required"></td>
					</tr><tr>
						<td>成本</td>
						<td><input type="text" style="width:290px;height:25px;" name="cost" required="required"></td>
					</tr><tr>
						<td>材質</td>
						<td><input type="text" style="width:290px;height:25px;" name="material" required="required"></td>
					</tr><tr>
						<td>庫存</td>
						<td>
                            <input class="click" style="width:65px;height:25px;" id="dec" type="button" value="-">
                            <input class="click" style="width:160px;height:25px;text-align:center;" id="count" type="text" name="stock" value="1" size="1">
                            <input class="click" style="width:65px;height:25px;" id="inc" type="button" value="+" >
                        </td>
					</tr><tr>
						<!-- <td>照片上傳</td>
                        <td><input type="file" name="photo" accept="image/*"></td>
				    </tr><tr> -->
                    <td colspan='2' align="center">
                        <input type="hidden" name="action" value="upload">
                        <input class="input" style="width:150px;height:50px;" type="submit" value="確定修改">
                    </td>
                </tr>
                </table>
			</form></center>

<?php 
if (isset($_POST["action"]) && $_POST["action"] == 'upload') {
    echo "in upload!!!!!!";
    $newnum = $_POST['num'];
    $newname = $_POST['name'];
    $newsell = $_POST['sell'];
    $newsale = $_POST['sale'];
    $newcost = $_POST['cost'];
    $newmaterial = $_POST['material'];
    $newstock = $_POST['stock'];

    $sql = "INSERT INTO accproduct (num,name,sell,sale,cost,material,stock)
        VALUES ('$newnum','$newname','$newsell','$newsale','$newcost','$newmaterial','$newstock')";
    $result = mysqli_query($link,$sql);
    mysqli_query($link,$sql);
    if (mysqli_affected_rows($link)>0) {
        echo "<script>alert('成功上傳!');</script>";
        header('Location: back2.php');
    }
    elseif(mysqli_affected_rows($link)==0) {
        echo "無資料新增";
    }
    else {
        echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
    }
    mysqli_close($link); 
}
?>
	</div>
<br><br>
    <button type="button" id="BackTop" class="toTop-arrow"></button><!--到最上面的按鈕-->

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
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
<script>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</html>