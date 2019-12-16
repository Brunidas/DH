<?php
    setcookie('usuarioCorreo', null, time() -1  );
    setcookie("contrasenna",null, time() -1 );

    header("Location: 005login.php");
    exit;
?>