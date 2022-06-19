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
div{
    height:2500px;
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
<center>
    <table>
        <tr>   
            <td width='100'>會員姓名</td>
            <td width='100'>生日</td>
            <td width='115'>電話</td>
            <td width='200'>電子郵件</td>
            <td width='270'>地址</td>
            <td width='60'>等級</td>
            <td width='60'>點數</td>
            <td width='60'>刪除</td>
        </tr>
    </table>
    </center>
    <hr width=85%>
    <center><table>
        <?php
            $SQL="SELECT * FROM accvip";
            $result=mysqli_query($link, $SQL);
            if(mysqli_num_rows($result) > 0)
            {
                foreach($result as $row)
                {
                    do{
                        echo "<tr>";
                        echo "<td width='100'>".$row['name']."</td>";
                        echo "<td width='100'>".$row['birth']."</td>";
                        echo "<td width='115'>0".$row['tel']."</td>";
                        echo "<td width='200'>".$row['mail']."</td>";
                        echo "<td width='270'>".$row['address']."</td>";
                        echo "<td width='60'>".$row['rank']."</td>";
                        echo "<td width='60'>".$row['point']."</td>";
                        $id = $row['name'];
                        echo "<td width='60' align='center'><a href='delete.php?id=$id'><img src='delete.png' style='width:20px;height:20px;'>";
                        echo "</td></tr>";
                    }while ($row = mysqli_fetch_assoc($result));
                }
            }
        ?>
    </table></center>
    <button type="button" id="BackTop" class="toTop-arrow"></button><!--到最上面的按鈕-->
</body>
<script>
    function click(){
        var result="<?php delete(); ?>";
    }
</script>
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
</html>