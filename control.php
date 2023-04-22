<?php
$user=$_POST["user"];
$pwd= $_POST["password"];
try{
    $pdo= new PDO('mysql: host=192.168.1.4;dbname=login;port=3306','root','Adity@1154');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if ($pdo!=0){
    // $stmt="insert into details.login('Name','Email','Password') values(:name,:email,:pass);";
    // echo $stmt;
    // $query=$pdo->prepare($stmt);
    // $query->bindParam(':name',$name,PDO::PARAM_STR);
    // $query->bindParam(':email',$email,PDO::PARAM_STR);
    // $query->bindParam(':pass',$pass,PDO::PARAM_STR);
    $pdo->exec("insert into details (User,Password) values('$user','$pwd');");
    include "mywebsite.html";
    }
    // $stmt="insert into details values('ABC','abc@gmail.com','1234567');";
    
    
    
}
catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' .$e->getMessage() . ' in ' .$e->getFile() . ':' . $e->getLine();
}

//  include 'index.html.php';          
?>