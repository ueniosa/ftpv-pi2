<?php
$entradadoUsuario = addslashes($_POST['name']);
if (isset($_POST['name'])){
    echo "Exibindo resultados para: " . $entradadoUsuario;
}
else {
    echo "Por favor, digite algo no campo de pesquisa";
}
?>