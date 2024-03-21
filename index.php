<html>
<head>
        <meta charset="utf-8">
        <title> Formulario de Acceso </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <!-- Link hacia el archivo de estilos css -->
        <!-- <link rel="stylesheet" href="login.css"> -->
        <script type="text/javascript">
        </script>
        <style>
        body{
            background-color: #f8efb2;
        }
        #loginContainer {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            background-color: white;
        }
    </style>
    </head>
    <body>
    <br><br><br><br>
    <div id="loginContainer">
        <h2 class="text-center">Hola, bienvenido</h2>
        <hr>
        <div id="contenedorcentrado">
            <div id="login">
                <form id="loginform" method="post" action="login.php">
                    <label for="usuario">Usuario</label>
                    <input id="usuario" type="text" class="form-control" name="usuario" required><br>
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required><br>
                    <a href="#">¿Perdiste tu contraseña?</a><br><br>
                    <a href="#">¿No tienes Cuenta? Registrate</a><br><br>
                    <button type="submit" title="Ingresar" name="Ingresar" class="btn btn-primary" >Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
