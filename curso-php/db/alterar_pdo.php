<div class="titulo">Altera PDO </div>
<?php 
require_once 'conexao_pdo.php';

$conexao = novaConexao();

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, sites = ?, filhos= ?, salario = ? WHERE id = ?";

$cmd = $conexao->prepare($sql);
// como e grande ele recebe um ARRAY DE PARAMETRO
$resultado = $cmd->execute([
    "jose",
    '1980-12-12',
    'jeeeee@jose',
    'jeeeeeose@jose.com2',
    3,
    3900.35,
    11   //esse a id selecionado
]);
// testa se deu certo 
if ($resultado) {
    echo "Sucesso :)";
}else {
    echo "Error : :";
    print_r($cmd->errorInfo());

}

?>