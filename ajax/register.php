<?php

$loginReg = htmlspecialchars($_POST['loginReg']);
$email=htmlspecialchars($_POST['email']);
session_start();
if(empty($loginReg))
{
	echo "Простите, но Имя не должно быть пустым<br>";
}

elseif(empty($email))
	{  
    echo "Простите, но Email не должнен быть пустым";
    }
else
{
    $link = new mysqli("127.0.0.1", "root", "", "Lending", 3306);
$query ="INSERT INTO `users`(`name`, `Email`) VALUES ('$loginReg','$email')";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
    echo "Спасибо ваша заявка доставлена"; 
$to ="fcapital.ua@gmail.com";
$subject ="Новый резидент для FirstCapital";
$message ="Новый пользователь с Именем".$loginReg." и email ".$email."";
mail( $to , $subject , $message);
}
?>