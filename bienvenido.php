<?php
session_start();
// Verifica si hay una sesión activa
if (!isset($_SESSION['username'])) {
// Si no hay sesión, redirige al login
header("Location: login.html");
exit();
}
?>
<div class="container">
<h2>Bienvenido, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<a href="logout.php">Cerrar sesión</a>
</div>