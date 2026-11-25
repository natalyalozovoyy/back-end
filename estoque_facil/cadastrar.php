<?php

include 'config/conexao.php';

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$qtd = $_POST['quantidade'];
$nomeimagem= null;

if(isset($_FILES['imagem'])&& $_FILES['imagem']['error'] == 0){
    $extensaoPermitidas = [".jpg", ".jpeg", ".png", ".webp"];
    $extensao= strtolower(pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION));

    if(in_array($extensao, $extensaoPermitidas)){
       die("Tipo de arquivo não permitido!");
        }
    }
    if($_FILES['imagem']['size'] > 20*1024*1024){
        die("Arquivo muito grande! Max: 2MB");
    }
$nomeimagem = uniqid("produto_").".".$extensao;
move_uploaded_file($_FILES['imagem']['tmp_name'], "uploads/".$nomeimagem);

$sql = "INSERT INTO produtos (nome, categoria, preco, quantidade, imagem) 
    VALUES ('$nome', '$categoria', '$preco', '$qtd', '$nomeimagem')";

if($conexao->query($sql)){
    echo "Produto cadastrado com sucesso!";
}
else{
    echo "Erro ao cadastrar produto: ";
}