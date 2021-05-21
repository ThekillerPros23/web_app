<?php
    function register()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $connfirmation  = $_POST["confirmation"];
        if ($password == $connfirmation)
        {
            echo "<a href = '/index.html'>volver</a>";
        }
        else
        {
            echo "Su contraseña es incorrecta";
        }
    }
?>          
