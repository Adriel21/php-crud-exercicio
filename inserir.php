<?php 

// var_dump($conexao);
if( isset($_POST['inserir'])) {
	// echo 'Alo';
	require_once './src/funcoes.php';
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$primeira = filter_input(INPUT_POST, 'primeira', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$segunda = filter_input(INPUT_POST, 'segunda', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$media = ($primeira+$segunda)/2;
	$situacao = $media>=7?"Aprovado":"Reprovado";
	inserirAluno($conexao, $nome, $primeira, $segunda, $media, $situacao);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="" method="post">
	    <p><label for="nome">Nome:</label>
	    <input type="text" id="nome" name="nome" required></p>
        
      <p><label for="primeira">Primeira nota:</label>
	    <input type="number" id="primeira" name="primeira" step="0.1" min="0.0" max="10" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input type="number" id="segunda" name="segunda"  step="0.1" min="0.0" max="10" required></p>
	    
      <button type="submit" name="inserir">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a href="./index.php">Voltar ao início</a></p>
</div>

</body>
</html>