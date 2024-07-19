<?php
$Email=$_POST['Email'];
$password=$_POST['password'];
$username=$_POST['username'];

$flag=0;
$Erorrs=[];
if(isset($username)){
    if(empty($username)){ ++$flag; $Erorrs['un-empty']="empty username"; }
    if(strlen($username)<=3){  ++$flag;  $Erorrs['un-length']="username length 4 or above";  }
    if(!preg_match("/se$/",$username)){  ++$flag;  $Erorrs['un-match']='username doesnt end with se'; }
    } 

    if(isset($password)){
        if(empty($password)){ ++$flag; $Erorrs['pw-empty']="empty password"; }
        if(strlen($password)<=3){  ++$flag;  $Erorrs['pw-length']="password length be 4 or above";  }
        if(!preg_match("/se$/",$password)){  ++$flag;  $Erorrs['pw-match']='pasemailesnt end with se'; }
}
if(isset($Email)){
    if(empty($Email)){ ++$flag; $Erorrs['em-empty']="empty email"; }
    if(strlen($Email)<=3){  ++$flag;  $Erorrs['em-length']="email length be 4 or above";  }
    if(!preg_match("/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/",$Email)|| !preg_match("/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/",$Email)){
         ++$flag;  $Erorrs['em-match']='email doesnt end with @yahoo.com or @gmail'; }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 8</title>
</head>
<body>
    
    <form action="" method="post">
    <input type="text" name="username" >
    <input type="password" name="password">
    <input type="text" name="Email" >
    <input type="submit">
    </form>
    <?php if($flag==0):  ?>
        <h2><?= "$username , $password and $Email" ?></h2>
        <?php else:?>
       <?php foreach($Erorrs as $er):?>
        <?= $er ?>
        <?php endforeach; ?>
    <?php endif;?>

</body>
</html>