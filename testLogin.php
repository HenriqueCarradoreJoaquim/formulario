<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha ='$senha'";

    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {

        echo "<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos');
                window.location.href='Login.php';
              </script>";
    } else {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
} else {
    header('Location: login.php');
}
?>
