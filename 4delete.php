<?php
require 'productpage.php';
$id = $_GET['id'];

$SQL= "DELETE FROM accorder WHERE product='$id'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=4cart.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗')";
    echo "</script>";
}
?>