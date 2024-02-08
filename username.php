<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="username.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        age: <br>
        <input type="text" name="age"><br>
        email: <br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
//   if(isset($_POST["username"])){
//     $username =filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
//     echo "Hello {$username}";
//     $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
//     echo"you are {$age} years old";
//     $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
//     echo"your email is {$email}";
//   }
  if(isset($_POST["login"])){
    $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    
    if(empty($email)){
       echo"you did not entered a valid email";
    }
      
      else{
       echo"the email you entereed is {$email}"; 
    }
 
  }
    
  

?>