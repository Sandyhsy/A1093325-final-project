<?php
session_start();
require 'productpage.php';
$name=$_SESSION['name'];
$sql="SELECT * FROM accorder WHERE name='$name' AND state='0'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);

$SQL="UPDATE accorder SET state='1' where name='$name' AND state='0'";
if(mysqli_query($link,$SQL))
{
    echo "<script type='text/javascript'>";
    echo "alert('購買成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=6vip.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('購買失敗')";
    echo "</script>";
}
?>