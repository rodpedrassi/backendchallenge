<?php include_once"conexao.php"; //inicia uma conexão com o banco?>
<html>
<body>
<?php 

//pega o que foi digitado no formulário e faz alguns tratamentos(não deixa digitar caracteres que o mysql n entende, 
//remove espaços, md6 criptografa a senha)
$email = mysqli_real_escape_string($conexao, trim($_POST['cademail']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['cadsenha'])));

//cria uma conexao com o meu banco de dados webchallenge
mysqli_select_db($conexao,'$DB');
//cria uma variavel que armazena a querry necessária pro insert
$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', md5('$senha'))";

//checa com booleano se o valor foi salvo ele emite uma msg, senão exibe um erro simples.
if (mysqli_query($conexao, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'index.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conexao);
}
//fecha conexão
mysqli_close($conexao);
?>
</body>
</html>