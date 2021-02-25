<?php
session_start();
//Aqui é uma tela pós login, só de teste
?>

<?php//Aqui a gente pega o que foi armazenado em sessão e exibe o email em uma msg ?>
<h2>Login efetuado com sucesso, olá <?php echo $_SESSION['email'];?></h2>
<h2><a href="logout.php">Sair</a></h2>

