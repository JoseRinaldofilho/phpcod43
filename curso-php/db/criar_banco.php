<div class="titulo">Criar Banco</div>
<?php

require_once 'conexao.php';

$conexao = navaConexao();
/**
 * cria um banco de dados
 */
$sql = 'CREATE DATABASE curso_php';
/**
 * chama a conexao
 */
$conexao->query($sql);
/**
 * fecha conexao
 */
$conexao->close();
