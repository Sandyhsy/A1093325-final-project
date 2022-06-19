<?php
ob_start();
session_start();

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'sandystudioacc');

    $mail=$_POST["gmail"];
    $password=$_POST["password"];

    $SQL="SELECT * FROM accvip WHERE mail='$mail' AND password='$password'";
    $result=mysqli_query($link,$SQL);
    $sql="SELECT * FROM accuser WHERE email='$mail' AND password='$password'";
    $user=mysqli_query($link,$sql);

    $row=mysqli_fetch_assoc($result);
    // $name=$row['name'];
    if($mail!=null && $password!=null)
    {
        if(mysqli_num_rows($result)==1)
        {
            $_SESSION["mail"]=$mail;
            $_SESSION["name"]=$row['name'];
            echo"<meta http-equiv='Refresh' content='0; url=2home1.php'>";
        }else if(mysqli_num_rows($user)==1)
        {
            echo"<meta http-equiv='Refresh' content='0; url=back2.php'>";
        }else{
            echo "<script>alert('帳號或密碼輸入錯誤!')</script>";
            echo"<meta http-equiv='Refresh' content='0; url=5login.php'>";
        }  
    }else{
        echo "您尚未輸入帳號或密碼";
    }
    ob_flush();
        
 ?>