<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Registrazione</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="general-style.css">
</head>
<body>

    <header class="conteiner">
        <img src="./img/edusogno.svg" alt="">

    </header>

    <main>
        <section class="form-section">
                <div class="section-title">
                    <h1 class="title-registration">Crea il tuo account</h1>
                </div>
        
                <!-- pagina register.html -->
                <form action="./php/register.php" method="POST">
                   
                    <label for="nome">Inserisci il nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Mario" required>
            
                    <label for="cognome">Inserisci il cognome</label>
                    <input type="text" name="cognome" id="cognome" placeholder="Rossi" required>
            
                    <label for="email">Inserisci l'email</label>
                    <input type="emai" name="email" id="email" placeholder="name@example.com" required>
                    <div class="input-password">
                        <label for="password">Inserisci la password</label>
                        <input type="password" name="password" id="pwd" placeholder="Scrivi qui"  required>
                        <i id="eye-psw" class="fa-solid fa-eye" onclick="showPwd()"></i>
                    </div>
                    <input type="submit" class="btn frorm-btn" value="Registrati">
                    <a class="link-form" href="login.html">Hai già un account? <strong>Accedi</strong></a>
                </form>
        </section>
    </main>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>