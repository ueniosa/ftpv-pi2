<html>
<head>
    <title>Resultados</title>
</head>


<body>

    <?php
        require "banco.php";
        echo "Exibindo resultados para: " . $_POST["pesquisa"];
       
        if (total > 0) {
            do { 

        $entradadoUsuario = $_POST["pesquisa"];

        echo $resultado;

    ?>

</body>

</html>