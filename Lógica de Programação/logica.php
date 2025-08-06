<?php
// Atividade 1
function positivoOuNegativo($num) {
    if ($num > 0) {
        return "O número $num é positivo.";
    } elseif ($num < 0) {
        return "O número $num é negativo.";
    } else {
        return "O número é zero.";
    }
}

// Atividade 2
function maiorValor($a, $b) {
    if ($a > $b) {
        return "O maior número é $a.";
    } elseif ($b > $a) {
        return "O maior número é $b.";
    } else {
        return "Os dois números são iguais.";
    }
}

// Atividade 3
function tabuadaDoSete() {
    $resultado = "Tabuada do 7:<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado .= "7 x $i = " . (7 * $i) . "<br>";
    }
    return $resultado;
}

// Atividade 4
function numerosParesDe1a100() {
    $resultado = "";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $resultado .= "$i é par<br>";
        }
    }
    return $resultado;
}

// Atividade 5
function mediaNotas($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    $mediaFormatada = number_format($media, 2);
    if ($media >= 7) {
        return "Média: $mediaFormatada. Você está aprovado!";
    } else {
        return "Média: $mediaFormatada. Você está reprovado.";
    }
}