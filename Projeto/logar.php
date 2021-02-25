<?php 
//cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via POST, ou passado via cookie
session_start();
//chama o php conexao ja que vamos trabalhar com dados do banco
include('conexao.php');

//verifica se os campos email ou senha estão vazios. Se tiverem, nesse caso, ele volta pra página login
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}

//recebe o que foi escrito no fomulário e armazena em variaveis, tomando cuidado pra n receber caracteres que o mysql n entende
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//faz a busca no banco dos dados digitados
$query = "select id, email, senha from usuarios where email = '{$email}' and senha = md5('{$senha}')";
//executa o select
$result = mysqli_query($conexao, $query);
//armazena em row um um bool 0 ou 1
$row = mysqli_num_rows($result);
//se for 1 quer dizer que o usuario existe, no caso criei uma pagina de pós login onde o usuário é redirecionado
if($row == 1){
    //aqui eu disse que durante essa session o meu usuario é o que foi digitado em email, 
    //podendo utilizar em outras paginas, como foi usado em pós login
    $_SESSION['email'] = $email;
    echo "<script>alert('Oxicoco'); window.location = 'index.php';</script>";
    header('Location: poslogin.php');
    exit();
}
//se n existir ele volta pra tela de login
else {

    header('Location: login.php');
}
?>


