<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$body=$_POST['body'];
$pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Adity@1154');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if ($pdo!=0){
    $pdo->exec("insert into form (Name,Email,Subject,Message) values('$name','$email','$subject','$body');");
    include 'mainpage.html.php';
}
?>