<?php

$host =	"localhost";
$user = "root";
$password =	"root";
$db = "task_edusogno";

$connessione = new mysqli ($host,$user,$password,$db);

if($connessione === false){
    die("Errore durante la connessione: " . $connessione->connect_error);

}
$sql_utenti="CREATE TABLE IF NOT EXISTS utenti (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(45),
    cognome varchar(45),
    email varchar(255),
    password varchar(255),
    PRIMARY KEY (id)
    )";
    

 $sql_eventi="CREATE TABLE IF NOT EXISTS eventi (
     id int NOT NULL AUTO_INCREMENT,
     attendees text,
     nome_evento varchar(255),
     data_evento datetime,
     PRIMARY KEY (id)
     )";
     


//  Marco, Rossi, ulysses200915@varen8.com , Edusogno123
// Filippo, D’Amelio, qmonkey14@falixiao.com , Edusogno?123
// Gian Luca, Carta, mavbafpcmq@hitbase.net , EdusognoCiao
// Stella, De Grandis, dgipolga@edume.me , EdusognoGia


//  $sql_insert="INSERT INTO `eventi`(`attendees`, `nome_evento`, `data_evento`) 
//  VALUES ('ulysses200915@varen8.com,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net',
//  'Test Edusogno 1', '2022-10-13 14:00'), ('dgipolga@edume.me,qmonkey14@falixiao.com,mavbafpcmq@hitbase.net',
//  'Test Edusogno 2', '2022-10-15 19:00'), ('dgipolga@edume.me,ulysses200915@varen8.com,mavbafpcmq@hitbase.net',
//  'Test Edusogno 2', '2022-10-15 19:00')";
 
 
 
?>