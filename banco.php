<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'aplicacao';
$bdSenha = '1833asdf';
$bdBanco = 'ftpv';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if	(mysqli_connect_errno($conexao))	{
    echo "Problemas	para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
    }


$pesquisa_servicos = buscar_profissionais($conexao);


function buscar_profissionais($conexao)
{
    $buscaBanco = 'SELECT * FROM ftpv';
    $consultaDB = mysqli_query($conexao, $buscaBanco);
    
    $resultado = [];
    
    while ($consulta = mysqli_fetch_assoc($consultaDB)) {
        $resultado[] = $consulta;
    }
    
    return $resultado;
    
}

?>
