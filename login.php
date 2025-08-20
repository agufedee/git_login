<?php 
session_start();
$usuario = 'admin';
$pass = 'admin1';

$userPost = $_POST['username'] ?? '';
$passPost = $_POST['password'] ?? '';

$hasheado = password_hash($pass, PASSWORD_DEFAULT);

if ($userPost === $usuario && $passPost === $pass) {
    $_SESSION['username'] = $userPost;
    echo $hasheado;
    //header('Location: bienvenido.php');
}
else {
    echo 'Usuarios o contraseña incorrectos';
    echo '<a href="index.html">Volver a Inicio</a>';
}

?>
