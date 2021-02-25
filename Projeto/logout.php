<?php
//Quando o usuario clicar pra deslogar, esse php entre em ação. aqui ele resume a sessão e destroi e manda de volta pra tela de login
session_start();
session_destroy();
header('Location: login.php');
exit();