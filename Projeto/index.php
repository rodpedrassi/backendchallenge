<?php//apennas um formulário simples de cadastro ?>
<html>
<body>
<h4>Cadastro</h4>
    <form action="cadastrar.php" method="POST">
    Email: <input type="email" name="cademail"><br>
    Senha: <input type="password" name="cadsenha"><br>
    <input type="submit" name="enviar">
    </form>
    <h5>Ou clique <a href="login.php">aqui</a> para logar</h5>
</body>
</html>