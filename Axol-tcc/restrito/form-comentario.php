<?php 
    session_start();
   
    include_once("valida-permanencia.php");

?>

<?php
require_once("../model/Comentario.php");


try {
  $comentario = new Comentario();


  $listacomentario = $comentario->listar();

} catch (Exception $e) {
  echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

    <script src="../js/forms.js" defer></script>
    <title>Cadastrar-Comentário</title>

    <script type="text/javascript">
            function ajax() {
            var req = new XMLHttpRequest();
            req.onreadystatechange = function() {
                if (req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET', 'chat.php', true);
            req.send();
        }

        setInterval(function() { ajax(); }, 1000);        
</script>

</head>
<body>
    <main>
        <div class="login-container" id="login-container">
            <div class="form-container">
            <form class="form form-login" action="cadastra-comentario.php" enctype="multipart/form-data" method="post">

                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">Inserir Comentário!</p>
                    <div class="form-input-container">
                    <textarea type="text" class="form-input" id="mensagem" name="mensagem" cols="5" rows="5" maxlength="250" placeholder="Escreva um comentário" required></textarea>

                   
</div>
                    <a href="#" class="form-link">Cadastre-se aqui!</a>
                    <input  type="submit" class="form-button" value="Enviar">
                    <a href="./feed.php"  type="submit" class="form-button" value="Continuar">Voltar</a>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Olá Usúario!</h2>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>