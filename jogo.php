<?php
    $palavras = array(
        "arte",
        "tarsila",
        "abaporu",
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

    $seletor = rand(0,12);
    $palavra = $palavras[$seletor];
    $letra = $_GET["n1"];


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

