<?php
require 'productpage.php';
$id = $_GET['id'];
echo $id;

$SQL= "DELETE FROM accorder WHERE name='$id'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=back3.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
}
?>