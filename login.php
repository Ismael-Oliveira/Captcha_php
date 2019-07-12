<?php

    session_start();

    if(isset($_POST['email']) && !empty($_POST['email'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $captcha = $_POST['captcha'];

        if($captcha != $_SESSION['captcha'] ){
            echo "ERRRO CAPTCHA";            
        }else{
            echo "Verificar login e mudar para o index";
        }
    }

    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;   
    // echo "Captcha n inicio".$n."<br>";

?>

<form action="#" method="post">

    <label>Email</label><br>
    <input type="email" name="email" id="email"><br><br>

    <label>Senha</label><br>
    <input type="password" name="senha" id="senha"><br><br>

    <img src="imagem.php" width="110" height="60"><br><br>
    <input type="text" name="captcha" id="captcha"><br><br>

    <button type="submit">Enviar</button>
</form>



