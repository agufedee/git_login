<?php
session_start();
// Elimina todos los datos de la sesión
session_unset();
session_destroy();
echo "Sesión cerrada. <a href='index.html'>Volver al login</a>";