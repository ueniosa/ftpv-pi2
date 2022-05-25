<?php
$entradadoUsuario = addslashes($_POST);
if (isset($entradadoUsuario)){
    echo "Exibindo resultados para: " . $entradadoUsuario;
}
else {
    echo $_POST;
    ## echo "Por favor, digite algo no campo de pesquisa";
}
?>