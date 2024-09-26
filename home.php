<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #2c2c2c, #4d4d4d);
            color: white;
            text-align: center;
        } 
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        } 
        a{
            text-decoration: none;
            color: white;
            border: 3px solid white;
            border-radius: 10px;
            padding: 10px;
        } 
        a:hover{
            background-color: darkgrey;
        }
    </style>
</head>
<body>
    
    <h1>Bem Vindo ao site!</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>