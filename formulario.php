<?php
if (isset($_POST['submit'])) {
    /*print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);*/

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #2c2c2c, #4d4d4d);
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid white;
        }

        legend {
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            color: black;
        }

        .inputbox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelinput {
            position: absolute;
            top: 0px;
            left: 0%;
            pointer-events: none;
            transition: .5px;
        }

        .inputUser:focus~.labelinput,
        .inputUser:valid~.labelinput {
            top: -20px;
            font-size: 12px;

        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            border-radius: 10px;
            background-color: gray;
            width: 100%;
            padding: 15px;
            color: white;
            font-size: 15px;
            border: none;
            font-size: 15px;
            cursor: pointer;
        }

        #submit:hover {
            background-image: linear-gradient(45deg, #2c2c2c, #4d4d4d);

        }
    </style>
</head>

<body>
    <a href="home.php"><button style="background: black; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 15px;">
            Voltar</button></a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Ano de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>