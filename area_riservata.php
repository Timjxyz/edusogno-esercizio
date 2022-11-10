<?php
session_start();

if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){
    header("location: login.html"); 
    exit;
}
// importo il file config
require_once ('./php/config.php');
$sql="SELECT * FROM eventi";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Area Riservata Utenti Registrati</title>
    <link rel="stylesheet" href="assets/styles/general-style.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header class="conteiner">
        <img src="./img/edusogno.svg" alt="">
        <a href="login.html"><i class="fa-solid fa-right-from-bracket"></i></a>
    </header>

    <?php
        echo ' <main>
            <div class="section-title">
                <h1 class="title-registration">Ciao ' . $_SESSION['nome'].' ecco i tuoi eventi</h1>
            </div>
            <section class="">';
            if($result = $connessione->query($sql)){
                if($result->num_rows > 0){
                    echo'<div class="row ">';
                    while($row=$result->fetch_array()){
                        echo'<div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">'. $row['nome_evento'].'</h3>
                                    <p class="card-text">'. $row['data_evento'].'</p>
                                    <a href="#" class="btn btn-primary">JOIN</a>
                                </div>
                            </div>
                        </div>';
                    };
                    echo '</div>';
                };
            };
            echo '</section>
        </main>';
    
    ?>

</body>
</html>