
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Semana da Arte Moderna</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <style>
        .teclado{
            width: 35px;
            height: 35px;
            border: 3px solid red;
            border-radius: 10%;
            text-align: center;
            margin: 5px;
        }
    </style>
</head>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                        <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                        <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                    </svg></span><span>Semana de 22</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
		<li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
		<li class="nav-item"><a class="nav-link active" href="jogo.php">Jogo</a></li>
		</ul><a class="btn btn-primary shadow" role="button" href="signup.html">JOGAR</a>
            </div>
        </div>
    </nav>
    <header class="bg-dark pt-5"></header>
    <section class="py-5"></section>
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Semana da Arte Moderna</p>
                    <h3 class="fw-bold">JOGO DA FORCA</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;"></div>
                <?php

    /*
        Funções necessárias:

        1- Incia o jogo -> Selecionar uma palavra (se o jogo não tiver começado ainda), colocar os traços correspondentes a cada letra;

        2- Verifcar o palpite -> Se acertar, vai colocar a letra na sua posição correspondente, se errar, vai colocar nos palpites errados e descontar uma tentativa;

        3- Da as dicas -> Caso o jogador solicite dicas, ela exibe dependendo do número de tentativas;

        4- Teclado virtual;
    */

        //ALUNOS: EDUARDO OZORIO (GU302685X), LUCA DE ANDRADE (GU3027813)
        //TURMA A - ADSD2
        //DATA 03 DE SETEMBRO DE 2O22


        $palavras = array( //Array usado para armazenar as palavras
            "arte",
            "tarsila-do-amaral",
            "oswald-de-andrade",
            "anita-malfatti",
            "manuel-bandeira",
            "graca-aranha",

            "abaporu",
            "os-operarios",
            "a-boba",
            
            "pau-brasil",
            "verde-amarelo",
            "antropofagico",
            "futurismo",
            "cubismo",
            "dadaismo",
            "surrealismo",
            "expressionismo",
            "modernismo",
            "parnasianismo",
        );

        

        init_jogo($palavras);


        function dicas($np, $tp){
            $dicas = array( //Array usado para dar dicas as respectivas palavras acima
                "Produção cultural",
                "Artista",
                "Artista",
                "Artista",
                "Artista",
                "Artista",
    
                "Nome de produção",
                "Nome de produção",
                "Nome de produção",
    
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
                "Movimento Cultural",
            );
            $detalhes = array( //Array usado para dar dicas mais detalhadas referentes as palavras
                "Foco do Movimento",
                "Grande destaque",
                "Poeta",
                "Representou o Exprecionismo",
                "Poeta",
                "Aracnideo",
    
                "Pé Grande",
                "Trabalho",
                "Fuji",
    
                "Nome de Arvore",
                "Cores da Bandeira",
                "Rito de Canibalismo",
                "Lembra o Futuro",
                "Formas Geométricas",
                "Caráter Ilógico",
                "Doidera",
                "Representa Sentimentos",
                "Minimalismo",
                "Perfeccionistas",
    
            );
            if($tp == 1){
                return $dicas[$np];
            }else if($tp == 2){
                return $detalhes[$np];
            }
        }
        

        function init_jogo($palavras = array()){
            session_start();
            if($_SESSION['run'] == false){
                $palpite = ""; //Definindo variáveis para esse corno filho da puta

                //$palavras = file_get_contents("substantivos.txt");
                $seletor = rand(0,18); //Variável que receberá um valor aleatório de rand para selecionar a palavra respectiva
                $_SESSION['seletor'] = $seletor;
                $palavra = $palavras[$seletor]; //Utiliza a variável "seletor" para definir a palavra do jogo
                $_SESSION['palavra'] = $palavra;
                $_SESSION['run'] = true;
                for($i = 0; $i < strlen($palavra); $i++){
                    $palpite[$i] = "_";
                }
                $_SESSION['palpite'] = $palpite;
                verifica();
            }
            
            else{
                verifica();
            }
            
        }
        function verifica(){
            $letras = array('q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'ç', 'z', 'x', 'c', 'v', 'b', 'n', 'm');

            $letra = $_POST['letra'];
            $palpite = $_SESSION['palpite'];
            $palavra = $_SESSION['palavra'];
            echo $palavra;

            $cont = 0;
            $erro = $_SESSION['erro'];
            $tem = false;
       

            for($i = 0; $i < strlen($palavra); $i++){
                if($palavra[$i] == $letra){
                    $palpite[$i] = $letra;
                    $cont++;
                    $tem = true;
                }
            }

            if($tem == false){
                $erro = $erro+1;
            }
   
            $_SESSION['erro'] = $erro;

            $_SESSION['palpite'] = $palpite;
            $_SESSION['palavra'] = $palavra;

            echo "<h1 id='teclado' style=\"text_align:center\">Jogo da forca - Semana da Arte Moderna</h1>";

            if($erro == 3){
                echo "<h2>Dica simples: ".dicas($_SESSION['seletor'], 1)."</h2>";
            }else if($erro == 5){
                echo "<h2>Dica detalhada: ".dicas($_SESSION['seletor'], 2)."</h2>";
            }
            echo "<br><br>Letra escolhida: $letra<br>";
            echo "<br>Palavra escolhida:<br>";
            echo "<br><br>".$palpite."<br><br>";
            foreach ($letras as $l) {
                if($l == 'p' || $l == 'ç'){
                    echo "<form method='POST' action='#teclado'><button style='float:left' class='teclado' name ='letra' value='$l'>$l</button></form>";
                    echo "<br><br>";
                }else{
                    echo "<form method='POST' action='#teclado'><button style='float:left' class='teclado' name ='letra' value='$l'>$l</button></form>";
                }
            }
            echo "<br><br>Tentativas erradas:".$erro." <br>";

            if(strcmp($palpite, $palavra) == 0){
                $_SESSION['run'] = false;
                $_SESSION['erro'] = -1;

                echo "<h1 style='color:green'>Parabéns, você ganhou!!!!</h1>";
                echo "<br><br><form action=\"#\" method=\"POST\">
                <input type=\"text\" name=\"n1\" placeholder=\"Insira uma letra\"/>
                <button type=\"submit\" value=\"jogada\">REINICIAR</button>
                </form>";
            }else if($erro >= 6){
                $_SESSION['erro'] = -1;
                $_SESSION['run'] = false;
                echo "<h1 style='color:red'>Você perdeu!!!!</h1>";
                echo "<br><br><form action=\"#\" method=\"POST\">
                <input type=\"text\" name=\"n1\" placeholder=\"Insira uma letra\"/>
                <button type=\"submit\" value=\"jogada\">REINICIAR</button>";
            }else if($_POST['reset'] == 6){
                echo "<h1 style='color:blue'>Reiniciando...!!!!</h1>";
                echo "<a href='#'>Voltar</a>";
            }else{
                echo "<br><br><form action=\"#\" method=\"POST\">
                <input type=\"text\" name=\"n1\" placeholder=\"Insira uma letra\"/>
                <button class=\"btn btn-primary shadow\" type=\"submit\" value=\"Fazer jogo\" style=\"margin-right: 10px;\">JOGAR</button>
                <button class=\"btn btn-primary shadow\" type=\"submit\" value=\"Reset\" style=\"margin-left: 0px;background: var(--bs-red);border-color: var(--bs-red);\">RESET</button>

            </form>";
            }

        }
    ?>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center"></div>
        </div>
    </section>
    <footer class="bg-dark">
        <div class="container py-4 py-lg-5">
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
            <p class="mb-0">Projeto do jogo PHP - Eduardo Ozório (GU302685X), Luca Andrade (GU3027813)</p>
            <a href="https://github.com/eduM42/projeto-jogo">Código-fonte no GitHub</a>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>
