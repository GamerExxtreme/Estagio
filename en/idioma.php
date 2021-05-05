<html>
    <head>
        <title>Layout</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <aside>
            <ul class="asideList">
                <li><a href="index.php" class="asideAnchor">Start</a></li>
                <li><a href="idioma.php" class="asideAnchor">Language</a></li>
                <li><a href="info.php" class="asideAnchor">Informations</a></li>
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
                    <p>Select your language:</p>
                    <a href="../pt/idioma.php" onclick="alert('Language changed to: Portuguese!')"><img src="../imagens/bandeiras/pt.png"></a>
                    <a href="idioma.php" onclick="alert('The language is already English!')"><img src="../imagens/bandeiras/en.png"></a>
                </div>
            </div>
        </section>
        <a href="https://codepen.io/tonkec" class="ua" target="_blank"><i class="fa fa-user"></i></a>
      </body>   
</html>