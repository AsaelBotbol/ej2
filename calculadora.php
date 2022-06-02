<?php 
function calcularDanio($vida, $ataque, $pocion){
    $danios = array("golpe" => 10, "patada" => 20, "espadazo" => 50);
    $danio = $danios[$ataque];
    if($vida < 50 && $pocion == 2){
        $danio = $danios[$ataque] * 2;
    }
    else if($ataque = "golpe" && $pocion == 0){
        $danio *= 3;
    }
    else if($ataque = "patada" && $pocion == 1){
        $danio *= 3;
    }
    return $danio;
}

function calcularVida($vida, $ataque, $pocion){
    $danio = calcularDanio($vida, $ataque, $pocion);
    $vida -= $danio;
    return $vida;
}

?>