<div class="titulo">Consultar PDO</div>
<?php 
require_once 'conexao_pdo.php';

$conexao = novaConexao();

$sql = "SELECT * FROM cadastro";
// PDO::FETCH_ASSOC) array associativo
// PDO::FETCH_NUM arr de numero
//(PDO::FETCH_CLASS NO FORMWTO DE CLASSE
//echo "<pre>";
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);//fech 1 registro -- fetchAll pega varios registros

//print_r($resultado);

echo "<hr>";
// LIMIT para limitar paginação  OFFSET para busca no banco ate xxx linha
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

$cmd =$conexao->prepare($sql);
$cmd->bindValue(":qtde", 2 , PDO:: PARAM_INT);
$cmd->bindValue(":inicio", 3 , PDO:: PARAM_INT);
// se o valor for verdadeiro
if($cmd->execute()){ 
    $resultado = $cmd->fetchAll();
    print_r($resultado);
}else{
    echo "Codigo do error:". $cmd->errorCode();
    print_r($cmd->errorInfo());

}
echo "<hr>";
echo "<pre>";
$sql = "SELECT * FROM cadastro WHERE id = ?";
$cmd = $conexao->prepare($sql);
$cmd->bindValue(":d", 2);
if($cmd->execute()){
    echo "<pre>";
    $conexao = $cmd->fetch();
    print_r($resultado);
    echo "<hr>";
}else{
    echo "Codigo :". $cmd->errorCode();
}


//$conexao->close();
?>