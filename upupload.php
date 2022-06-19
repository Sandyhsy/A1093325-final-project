<?php

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'sandystudioacc');
// $phtooname=$_FILES["photo"]["tmp_name"];
// echo $phtooname;
//取得副檔名
$pathpart=pathinfo($_FILES['photo']['name']);
$extname=$pathpart['extension'];

//產生新檔案名稱
$finalphoto="Photo_".time().".".$extname;
$SQL="UPDATE accproduct SET image='$finalphoto' where num='7'";
// echo $finalphoto;
// echo'<br/>';

//上傳檔案
if(copy($_FILES["photo"]["tmp_name"],$finalphoto))
{
    if(mysqli_query($link,$SQL))
    {
        echo "<script type='text/javascript'>";
        echo "alert('上傳成功')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=upload.php'>";
    }
}
?>