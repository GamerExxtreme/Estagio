<html>
    <head>
        <title>Layout</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <aside>
            <ul class="asideList">
                <li><a href="index.php" class="asideAnchor">Início</a></li>
                <li><a href="idioma.php" class="asideAnchor">Idioma</a></li>
                <li><a href="info.php" class="asideAnchor">Informações</a></li>
            </ul>
        </aside>
        <section>
            <input type="checkbox" id="myInput">
            <label for="myInput">
                <span class="bar top"></span>
                <span class="bar middle"></span>
                <span class="bar bottom"></span>
            </label>
            <div class="content">
                <a href="http://www.inem.pt"><img class="logo" src="imagens/inem.png"></a>
                <!--idioma--> 

                <div class="bandeiras">
                    <p>Selecione o seu idioma:</p>
                    <a href="idioma.php" onclick="alert('O idioma já é português!')"><img src="../imagens/bandeiras/pt.png"></a>
                    <a href="../en/idioma.php" onclick="alert('Idioma alterado para: Inglês!')"><img src="../imagens/bandeiras/en.png"></a>
                </div>
            </div>
        </section>
        <a href="https://codepen.io/tonkec" class="ua" target="_blank"><i class="fa fa-user"></i></a>
      </body>   
</html>