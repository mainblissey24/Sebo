<html>

    <head>

    <title>Login System</title>
    <meta charset="utf-8">

    </head>

    <body>

        <h2>Verificando se o usuario já está logado</h2>

    </body>

</html>

<?php

$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
        echo"Bem vindo, $login_cookie <br>";
        echo"logado";
    }else{
        echo"Faça login por favor";
    }

?>