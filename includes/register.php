<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href = "/css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div>    
                    <a href="" > Inicio</a>
                    <a href="">Quien somos?</a>
                    <a href=""> Templates</a>
                    <a href="/web/login.html">Login</a>
                    <a href="">Registro</a>
                </div>
            </nav>
        </header>
        <section>
            <?php
                function register()
                {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    $connfirmation  = $_POST["confirmation"];
                    if ($password == $connfirmation)
                    {
                        echo "<a href = '/index.php'>volver</a>";
                    }
                    else
                    {
                        echo "Su contraseña es incorrecta";
                    }
            ?>          
                
                    
        </section>
        <footer>

        </footer>
    </body>
</html>
