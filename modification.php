<?php
if (isset($_POST['send'])){
    /*
    Simple process to connect the script with MySQL via MySQLi
    Without showing error messages when there are.
    Processus simple pour connecter le script à MySQL via MySQLi
    Sans afficher les messages d'erreur lorsqu'il y en a.
    */
    require_once("help.php");
    $playerName= $_POST['username'];
    $newPassword= $_POST['newPassword'];
    $confirmPassword= $_POST['confirmPassword'];
 


    //Declare login info to MySQL via phpMyAdmin
    //Déclarer les infos de connexions à MySQL via phpMyAdmin
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $verif= false;
    //1-Connect to the DBMS MySQL
    //1-Se connecter au SGBD MySQL
    $connection = new mysqli($hostname, $username, $password);
    //2-Create the DB customer if it doesn't exist yet

    //3-Connect to the DB customer
    //3-Se connecter à la BD customer
    mysqli_select_db($connection, 'kidsGames');

    $connection->query("DESC player;");
    $result = $connection->query("SELECT * FROM player");

    $countRow= $result->num_rows;
    for($i=0; $i<$countRow; $i++){
        $eachRow = $result->fetch_array(MYSQLI_ASSOC);
        if($playerName== $eachRow['userName']){
            $registOrder= $eachRow['registrationOrder'];
            $verif= true;
        }
    }
    if($verif){
        
        if( $newPassword== $confirmPassword){

            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            echo"  $newPassword </br>";
            echo" $passwordHashed </br>";
            $connection->query("UPDATE authenticator
            SET passCode= '$passwordHashed' WHERE registrationOrder= $registOrder ");
            echo"update success </br>";
            
        }
        else{
            session_start();
            $_SESSION['userName']= trim($playerName);
            $_SESSION['password']= trim($newPassword);
            $_SESSION['message']= "new password and confirm password are different </br>";
            
            
            header('Location: pageModification.php');
        }
    }
    else{
        session_start();
        $_SESSION['message']= "userName is incorrect </br>";
        header('Location: pageModification.php');
        
    }
    
}