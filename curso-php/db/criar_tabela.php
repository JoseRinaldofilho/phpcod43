<div class="titulo">Criar Tabela</div>
<?php
require_once 'conexao.php';
/**
 * DDL - data Definitions lang.
 */

$sql = "CREATE TABLE IF NOT  EXISTS cadastro(
    id int(6) unsigned auto_increment primary key,
    nome varchar(100) NOT NULL,
    nascimento Date,
    email varchar(100) NOT NULL,
    sites varchar(100) NOT NULL,
    filhos int(10), 
    salario float
)";

$conexao = navaConexao();
$resultado = $conexao->query($sql);

if ($resultado){
    echo "Sucesso: ";
}else{
    echo "Erro: ". $conexao->error;
}

$conexao->close();