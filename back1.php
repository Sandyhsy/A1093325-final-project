<?php
    session_start();
    require 'productpage.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <title>訂單管理</title>
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
    <br><br>
    <table style='margin-left:900px;'><tr>
        <td style="color:brown;" width="120px">0：購物車</td>
        <td style="color:brown;" width="120px">1：待出貨</td>
        <td style="color:brown;" width="120px">2：已出貨</td>
    </tr></table>
    <br>
    <center><table>
        <tr>
            <td width='150' align='middle'>會員姓名</td>
            <td width='250' align='middle'>商品明細</td>
            <td width='100' align='middle'>商品件數</td>
            <td width='100' align='middle'>總價格</td>
            <td width='100' align='middle'>狀態確認</td>
            <td width='100' align='middle'>訂單寄出</td>
            <td width='100' align='middle'>取消訂單</td>
        </tr>
    </table></center>
    <hr width=85%>
    <center><table>
        <?php
            $SQL="SELECT * FROM accorder";
            $result=mysqli_query($link, $SQL);
            if(mysqli_num_rows($result) > 0)
            {
                foreach($result as $row)
                {
                    do{
                        echo "<tr>";
                        echo "<td width='150' align='middle'>".$row['name']."</td>";
                        echo "<td width='250' align='middle'>".$row['product']."</td>";
                        echo "<td width='100' align='middle'>0".$row['many']."</td>";
                        echo "<td width='100' align='middle'>".$row['total_price']."</td>";
                        echo "<td width='100' align='middle'>".$row['state']."</td>";
                        $id = $row['name'];
                        echo "<td width='100' align='middle'><a href='changestate.php?id=$id'><img src='checkbox.png' style='width:20px;height:20px;'></td>";
                        echo "<td width='100' align='middle'><a href='deletecart.php?id=$id'><img src='delete.png' style='width:20px;height:20px;'></td>";
                        echo "</tr>";
                    }while ($row = mysqli_fetch_assoc($result));
                }
            }
        ?>
    </table></center>
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
    let confirm=document.querySelector("#confirm")
    let btn=document.querySelector(".btn")
    btn.addEventListener("click", function(){console.log(confirm.checked)})
</script>
</html>