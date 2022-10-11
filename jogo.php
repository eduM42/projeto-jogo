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
    
    $seletor = rand(0,18); //Variável que receberá um valor aleatório de rand para selecionar a palavra respectiva
    $palavra = $palavras[$seletor]; //Utiliza a variável "seletor" para definir a palavra do jogo
    $letra = $_GET["n1"]; //Puxa a resposta do usuário


    echo "<h1 style=\"text_align:center\">Jogo da forca - Semana da Arte Moderna</h1>";
    echo "<h3>Este código é apenas um protótipo, não exibe as posições das letras acertadas ou mantém a palavra em múltiplas sessões</h3>";
    echo "<br><br>Letra escolhida: $letra<br>";
    echo "<br>Palavra escolhida:<br>";
    
    for($i = 0; $i < strlen($palavra); $i++){
	echo "_ ";
        if($palavra[$i] == $letra){
            $cont++;
	}
    }

    echo "<br><br><form action=\"jogo.php\">
            <input type=\"text\" name=\"n1\" placeholder=\"Insira uma letra\"/>
            <button type=\"submit\" value=\"jogada\">JOGAR</button>
        </form>";
   
    if($cont > 0){
	echo "Esta letra aparece $cont vezes na palavra";
	echo "<br>A palavra em questão era $palavra";
    }
    else{$erro++;}

    echo "<br><br>Tentativas erradas:$erro <br>";

?>
