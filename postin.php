<?php
$title=$_POST["title"];
$content=$_POST["content"];
$pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Adity@1154');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if ($pdo!=0){
    $pdo->exec("insert into post (Title,Content) values('$title','$content');");
    include 'mainpage.html.php';
}
?>