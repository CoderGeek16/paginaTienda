<?php
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  if ($usuario === 'hdelapuente' && $contrasena === '1234') {
    header('Location: temporada.html');
    exit();

  }else if ( $usuario === 'vendedor' && $contrasena === '1234') {
  header('Location: vendedor.html');
  exit();

    } else {
    echo 'Usuario o contraseña incorrectos.';
    }
?>