<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario php</div>
<h2>Cadastro</h2>
<?php

$erros = [];

/**
 * validacao no nome string */
if (!filter_var($_POST['nome'],FILTER_SANITIZE_FULL_SPECIAL_CHARS)) {
    $erros['nome'] =  'Nome InValido';
}
// valida data filter IMPUT
if (filter_input(INPUT_POST, "nascimento")) {
    $datas = DateTime::createFromFormat('d/m/y',$_POST['nascimento']);
    if ($datas) {
        $erros['nascimento'] = "Data deve esta no padrao dd/mm/aaaa <br>";
    }
}
    // se o email tiver vazio ou entrou formato mostra menssagem de error
    if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $erros['email'] ="Email Invalido <br>";
    }
    // valida o site
    if (!filter_var($_POST['site'],FILTER_VALIDATE_URL)) {
        $erros['site'] ="Site Invalido <br>";
    }
     //valida filhos number
    $filhosConfig = ["options"=>["min_range"=>0,"max_range"=>20]];
    if (!filter_var($_POST['filhos'],FILTER_VALIDATE_INT, $filhosConfig) and $_POST['filhos'] !=0) {
        $erros['filhos'] ="Quantidade de filhos invalida";
    }
    $salarioConfig = ["options"=>['decimal'=>',']];
    if (!filter_var($_POST['salario'],FILTER_VALIDATE_INT,$salarioConfig)) {
        $erros['salario'] = "Salario Invalido";
    }
        
?>
<?php foreach ($erros as $errao):  ?>
<!--    <div class="alert alert-danger" role="alert">-->
<!--       --><?//= $errao ?>
<!--    </div>-->
<?php endforeach; ?>
<form action="#" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" name="nome" <?= $erros['nome']? 'is-invalid':''; ?>class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome"
        value="<?= $_POST['nome'] ?>">
        <div class="invalid-feedback">
            <?php $erros['nome'] ?>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nascimento</label>
        <input type="number" class="form-control" id="nascimento" name="nascimento" placeholder="Nascimento"  value="<?= $_POST['nascimento'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">E-mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail"
               value="<?= $_POST['email'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">site</label>
        <input type="text" class="form-control" id="site" name="site" placeholder="Site expemplo h t t p s : //seusite"  value="<?= $_POST['site'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">QTD. filhos</label>
        <input type="number" class="form-control" id="filhos" name="filhos" placeholder="filhos"  value="<?= $_POST['filhos'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">salario</label>
        <input type="number" class="form-control" id="salario" name="salario" placeholder="salario"  value="<?= $_POST['salario'] ?>">
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
</form>