<?php
session_start();
require 'DBconnect.php';
$SQL="SELECT * FROM accproduct";
$result=mysqli_query($link,$SQL);
$userID = $_GET['id'];

$sql = "SELECT * FROM accproduct WHERE name='$userID'";
$ans = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($ans);
if(mysqli_num_rows($ans)){
    $num = $row['num'];
    $name = $row['name'];
    $sell = $row['sell'];
    $sale = $row['sale'];
    $cost = $row['cost'];
    $material = $row['material'];
    $stock = $row['stock'];
}
if (isset($_POST["action"]) && $_POST["action"] == 'update') {
    $newnum = $_POST['num'];
    $newname = $_POST['name'];
    $newsell = $_POST['sell'];
    $newsale = $_POST['sale'];
    $newcost = $_POST['cost'];
    $newmaterial = $_POST['material'];
    $newstock = $_POST['stock'];
    $sql_query = "UPDATE accproduct SET num='$newnum', name='$newname', sell='$newsell', sale='$newsale', cost='$newcost', material='$newmaterial', stock='$newstock'
                    WHERE name='$userID'";
    mysqli_query($link,$sql_query);
    $link->close();
    header('Location: back2.php');
}
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
    height:auto;
}
.block{
    height:40px;
    width:200px;
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
    <center><font face="微軟正黑體" size="5"><b><font size="6"><?php echo $userID;?></font> 更新</b></font>
	<br><br>
    <div>						
        <form action="" method="post" name="formAdd" id="formAdd">
				<table border='1'>
					<tr>
				    	<td style="width:100px;">編號</td>
                        <td style="width:200px;height:50px;"><input class="block" type="text" name="num" id="num" value=" <?php echo $num ?>"></td>
					</tr><tr>
						<td style="width:100px;">商品名稱</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="name" id="name" value=" <?php echo $name ?>"></td>
					</tr><tr>
						<td style="width:100px;">售價</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="sell" id="sell" value=" <?php echo $sell ?>"></td>
					</tr><tr>
						<td style="width:100px;">優惠價</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="sale" id="sale" value=" <?php echo $sale ?>"></td>
					</tr><tr>
						<td style="width:100px;">成本</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="cost" id="cost" value=" <?php echo $cost ?>"></td>
					</tr><tr>
						<td style="width:100px;">材質</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="material" id="material" value=" <?php echo $material ?>"></td>
					</tr><tr>
						<td style="width:100px;">庫存</td>
						<td style="width:200px;height:50px;"><input class="block" type="text" name="stock" id="stock" value=" <?php echo $stock ?>"></td>
                        </tr><tr>
					<td>照片上傳</td>
				    <td><input class="block" type='file' name='photo'></td>
			    </tr><tr>
                    <td colspan='2' align="center">
                        <input type="hidden" name="action" value="update">
                        <input class="input" style="width:150px;height:50px;" type="submit" value="確定修改">
                    </td>
                </tr>
                </table>
			</form></center>
	</div>
<br><br>
    </body>
</html>
