<?php
session_start();
$link=@mysqli_connect('localhost','root','','sandystudioacc');
$SQL="SELECT * FROM accproduct";
$result=mysqli_query($link,$SQL);
?>
<head>
    <title>商品管理</title>
    <meta charset="utf-8"/>
    <meta name="description" content="accessory">
    <meta name="keyword" content="accessory,飾品,耳環,項鍊,戒指,手鍊,韓國,質感">
    <link rel="icon" href="logo.png">
    <link rel=stylesheet type="text/css" href="all.css">
    <script src="jquery-3.1.0.min.js"></script>
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
        <table style="text-align:center;">
            <tr>
                <td width='50'>編號</td>
                <td width='300'>商品名稱</td>
                <td width='100'>售價</td>
                <td width='100'>優惠價</td>
                <td width='100'>成本</td>
                <td width='100'>材質</td>
                <td width='50'>庫存</td>
                <td width='100'>修改</td>
                <td width='100'>上架</td>
                <td width='100'>下架</td>
            </tr>
        </table>
    </center>
    <hr width=90%>
<center>
<form action="" method="post">
<table class="table table-sm table-bordered"style="text-align:center;">
   <?php
    if(mysqli_num_rows($result) > 0)
    {
     foreach($result as $row)
     {
   ?>
        <?php do { ?>
        <tr>
            <td width='50'><?php echo $row['num']; ?></td> 
            <td width='300'><?php echo $row['name'];?></td>  
            <td width='100'><?php echo $row['sell']; ?></td>
            <td width='100'><?php echo $row['sale'];?></td>
            <td width='100'><?php echo $row['cost'];?></td>
            <td width='100'><?php echo $row['material'];?></td>
            <td width='50'><?php echo $row['stock'];?></td>
            <?php
                $id = $row['name'];
                echo "<td width='100' align='center'><a href='edit.php?id=$id'><img src='pencil.png' style='width:20px;height:20px;'></a></td>";
            ?>
            <td width='100'>
            <input type="radio" id="<?php echo $row['num']; ?>A" name="<?php echo $row['num']; ?>" value="1" 
            <?php 
                if (!(strcmp($row['state'],1))) {
                    echo "checked=\"checked\"";
                } ?>>上架
            </td><td width='100'>
            <input type="radio" id="<?php echo $row['num']; ?>B" name="<?php echo $row['num']; ?>" value="0" 
            <?php 
                if (!(strcmp($row['state'],0))) {
                    echo "checked=\"checked\"";
                } ?>>下架
            </td></tr>
            <?php } while ($row = mysqli_fetch_assoc($result)); ?>
            <tr height="100px"><td colspan="10" align="middle">
                <input type="submit" style="width:150px;height:40px;" value="更新記錄">
                <input type="hidden" name="MM_update" value="MM_update">
            </td></tr>            
   <?php
      }
    }
   ?>
</table></form></center>
  <br><br>
  <button type="button" id="BackTop" class="toTop-arrow"></button><!--到最上面的按鈕-->
  </body>

<?php
    if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "MM_update")) 
    {
        $sql = "SELECT * FROM accproduct";;
        $q=mysqli_query($link,$sql);
        if (mysqli_num_rows($q)>0)
        {
            while ($row=mysqli_fetch_array($q))
            {
                echo $_POST[$row[0]];
                $updateSQL = sprintf("UPDATE accproduct SET  state='%s' WHERE num='%s'",$_POST[$row['0']],$row[0]); 
                mysqli_query($link, $updateSQL) or die(mysqli_error($link));
            }
        }
    }
?>
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