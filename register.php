<?php
session_start();

$link = mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'sandystudioacc');

$name=$_POST["name"];
$birth=$_POST["birth"];
$tel=$_POST["tel"];
$address=$_POST["address"];
$mail=$_POST["gmail"];
$password=$_POST["password"];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    //檢查帳號是否重複
    $check="SELECT * FROM accvip WHERE name='".$name."'";
    if(mysqli_num_rows(mysqli_query($link,$check))==0){
        $SQL="INSERT INTO accvip (name,birth,tel,address,mail,password)
            VALUES('$name','$birth',$tel,'$address','$mail','$password')";
        
        if(mysqli_query($link, $SQL)){
            echo "<script>alert('會員註冊成功!')</script>";
            echo"<meta http-equiv='Refresh' content='0; url=5login.php'>";
            exit;
        }else{
            echo "Error creating table: " . mysqli_error($link);
        }
    }
    else{
        echo "<script>alert('該帳號已有人使用!')</script>";
        echo"<meta http-equiv='Refresh' content='0; url=5login.php'>";
        exit;
    }
}


mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    
    return false;
} 


?>