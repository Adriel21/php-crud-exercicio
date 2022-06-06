<?php 
    require_once "./src/funcoes.php";
    $listaDeAlunos = lerAlunos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
</head>
<style>
    

    .border{
        padding: 15px;
    }

   tr, th, td {
       text-align: center;
   }

</style>

<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

    <table class="border">
        <thead>
            <tr class="border">
                <th class="border">ID</th>
                <th class="border">Nome</th>
                <th class="border">Primeira nota</th>
                <th class="border">Segunda nota</th>
                <th class="border">Média</th>
                <th class="border">Situação</th>
                <th class="border">Operação</th>
            </tr>
        </thead>
        <tbody class="border">
            <?php foreach($listaDeAlunos as $alunos) { ?>
                <tr>
                    <td class="border"><?=$alunos['id']?></td>
                    <td class="border"><?=$alunos['nome']?></td>
                    <td class="border"><?=$alunos['primeira']?></td>
                    <td class="border"><?=$alunos['segunda']?></td>
                    <td id="media" class="border"><?=$alunos['media']?></td>
                    <?php if ($alunos['media'] >= 7) { ?> 
                    <td id="sit" class="border bg-primary text-light"><?=$alunos['situacao']?></td>
                    <?php } else { ?>
                        <td id="sit" class="border bg-danger text-light"><?=$alunos['situacao']?></td>
                        <?php } ?>
                    <td><a href="./atualizar.php?id=<?=$alunos['id']?>" class="btn btn-success p-2">Atualizar</td>
                    <td><a href="excluir.php?id=<?=$alunos['id']?>" class="excluir btn btn-danger p-2">Excluir</a></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="/exercicio-php-crud-main/index.php" class="btn btn-primary mt-3">Voltar ao início</a></p>
</div>

<script src="js/confirme.js"></script>
<script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>