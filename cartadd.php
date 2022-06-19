<?php
session_start();
$num=$_POST['buy'];
$name=$_POST['product'];
$user=$_POST['name'];
$sell=$_POST['price'];
// $user=$_SESSION['name'];
require 'productpage.php';

$sql="SELECT * FROM accorder WHERE product='$name' AND state='0'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);

if($count > 0)
{
    $sql3="SELECT * FROM accorder WHERE product='$name' AND state='0'";
    $result4=mysqli_query($link,$sql3);
    $row3=mysqli_fetch_assoc($result4);
    $username=$row3['name'];
    $usernum=$row3['many'];
    echo $num."<br>";
    echo $usernum;
    $userprice=$row3['total_price'];
    $allprice=$num*$sell;

    $newnum=$usernum+$num;
    echo $newnum;
    $newprice=$userprice+$allprice;
    echo $newprice;
    $SQL1="UPDATE accorder SET many='$newnum', total_price='$newprice' WHERE name='$username' AND state='0' AND product='$name'";
    // $result1=mysqli_query($link,$SQL1);
    if(mysqli_query($link,$SQL1))
    {
    echo "<script type='text/javascript'>";
    echo "alert('更新成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=2home1.php'>";
    }
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('更新失敗')";
    echo "</script>";
    }
}
else
{
    $price=$num*$sell;
    echo $price;
    $SQL2="INSERT INTO accorder (name,product,many,total_price,state) VALUES ('$user','$name','$num','$price','0')";
    if(mysqli_query($link,$SQL2))
    {
    echo "<script type='text/javascript'>";
    echo "alert('新增成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=2home1.php'>";
    }
    else
    {
    echo "<script type='text/javascript'>";
    echo "alert('新增失敗')";
    echo "</script>";
    }
}
?>