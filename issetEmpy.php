<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="issetEmpy.php" method="post">
<label for="">username</label>
<input type="text" name="username"><br>
<label for="">password</label>
<input type="password" name="password"><br>
<input type="submit" name="login" value="log in">

    </form>
</body>
</html>



<?php 
//isset()=Returns TRUE if a variable is declared and not null
//empty()=Returns TRUE if a variabl is not declared ,false, null,""
//   $username =null;//1 maens true for false it does
   
//    if(empty($username)){
//     echo"This variable is set";
//    }
//    else{
//     echo"This variable is NOT set";
//    }
foreach($_POST as $key => $value){
    echo"{$key} = {$value} <br>";
 }
 if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username)){
        echo"username is missiing";
    }
    elseif(empty($password)){
        echo"password is missing";
    }
    else{
        echo"Hello {$username}";

    }

 }
?>