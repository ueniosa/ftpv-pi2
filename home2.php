<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="home.css">
        <title>Início</title>
    </head>

    <body>
<!--A primeira section é o cabecalho da página, onde fica o campo de pesquisa;-->
        <section>
            <div>
                <form>
                    <fieldset>
                        <legend>O que você procura?</legend>
                        <input type="search">
                        <input	type="submit" value="Pesquisar"/>
                    </fieldset>
                </form>
                <?php
                    $entradadoUsuario = $_GET;
                    if (isset($entradadoUsuario)){
                        echo "Exibindo resultados para: " . $entradadoUsuario;
                    }
                    else {
                        echo "Por favor, digite algo no campo de pesquisa";
                    }
                ?>
            </div>
 <!--           <div class="selectionfilters">Filtros<input type="search"></div>   -->
        </section>
<!--A segunda apresentará os resultados;-->        
        <section>
            <div>
                <p> </p>
            </div>
            <div>
                <p> </p>
            </div>
            <div>
                <p> </p>
            </div>
        </section>
    </body>

</html>