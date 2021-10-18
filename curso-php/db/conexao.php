<?php
/**
 * @param string $banco
 * @return mysqli responsavel por faz a conexao
 */

//cria um banco de dados direto do php
function navaConexao($banco = 'test'){

    $serve = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    /**
     * parametro da conexao sevidor usuario e senha esa conexao e o banco usa mysqlik
     */
    $conexao =  new mysqli($serve,$usuario,$senha,$banco);
    /**
     * verifica se a conexao foi feita com suavesso
     */
    if ($conexao->connect_error){
        // duas opçãod e erros 1 die
        die("error : ".$conexao->connect_error);
    }

    // se nao deu orror ele chegou na linha 21 e retorna a conexao
    return $conexao;
}