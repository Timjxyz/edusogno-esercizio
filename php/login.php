<?php

// importo il file config
require_once ('config.php');

$nome = $connessione->real_escape_string ($_POST['nome']);
$cognome = $connessione->real_escape_string ($_POST['cognome']);
$email = $connessione->real_escape_string ($_POST['email']);
$password = $connessione->real_escape_string ($_POST['password']);

if($_SERVER ["REQUEST_METHOD"] === "POST"){

    $sql_utenti = "SELECT * FROM utenti WHERE email = '$email'";
    $sql_eventi="SELECT * FROM eventi";

    if($result_utenti = $connessione->query($sql_utenti)){
        if($result_utenti->num_rows == 1){
            $row = $result_utenti->fetch_array(MYSQLI_ASSOC);
            if(password_verify($password,$row['password'])){
                session_start();

                $_SESSION['loggato'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cognome'] = $row['cognome'];
                $_SESSION['email'] = $row['email'];

                header("location: ../area_riservata.php");
            }else{
                echo "la password inserita non è corretta";
            }
        }else{
            echo "non esistono account con lo nome inserito";
        }
    }else{
        echo "errore in fase di login";
    }

    $connessione->close();
}