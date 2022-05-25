<?php
$_GET;
$entradadoUsuario = $_GET;
if (isset($entradadoUsuario["$_GET"])){
    echo "Exibindo resultados para: " . $entradadoUsuario;
}
else {
    echo "Por favor, digite algo no campo de pesquisa";
}
?>