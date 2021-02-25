<?php
//Aqui onde a gente armazena os dados do banco, onde ele esta hospedado, seu usuario, e senha, e o nome do banco que vamos usar 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'webchallenge');

//variavel usada sempre que precisamos mexer com os dados do banco
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');