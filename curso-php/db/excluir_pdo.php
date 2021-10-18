<div class="titulo">EXcluir PDO</div>
<?php 
require_once 'conexao_pdo.php';

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = :id";

$cmd = $conexao->prepare($sql);
$id = 10;
$cmd->bindValue(':id',$id);
//$cmd->execute();
/**
 * opiçao checando se existe
 */
if ($cmd->execute()) {
    echo "Sucesso !!";
}else {
    echo "Erro: ";
    print_r($cmd->errorInfo);
}
?>