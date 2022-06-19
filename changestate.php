<?php
session_start();
require 'productpage.php';
$name=$_SESSION['name'];

$SQL="UPDATE accorder SET state='2' where name='$name' AND state='1'";
if(mysqli_query($link,$SQL))
{
    $sql="SELECT * FROM accorder WHERE name='$name' AND state='1'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    echo "<script type='text/javascript'>";
    echo "alert('修改成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=back1.php'>";
}
else
{
    echo "<script type='text/javascript'>";
    echo "alert('修改失敗')";
    echo "</script>";
}
?>