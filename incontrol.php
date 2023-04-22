<?php
$message="";
$username=$_POST["user"];
$pass=$_POST["pass"];
$pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Adity@1154');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$result= $pdo->query("Select * from details");
    while ($row = $result->fetch()) {
        $user[] = $row['User'];
        $pwd[]=$row['Password'];
        }
        for ($i=0;$i<=(count($user)-1); $i++)
    {    
            if ($username==$user[$i]) {
                if($pass==$pwd[$i]){
                    include 'mainpage.html.php';
                    break; 
                }
                }
            if ($i==(count($user)-1)){
                include 'mywebsite.html';
            }   
    }

?>