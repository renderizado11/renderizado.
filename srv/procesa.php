<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

// $saludo = recuperaTexto("saludo");
$nombre = recuperaTexto("nombre");
switch ($nombre) {
    case "esp":
        $resultado = "Me encantan los mensajes de voz.\nYo los detesto.\nSí, esos también estan chidos.";
        break;
    case "flo":
        $resultado = "¿Qué hace un mudo bailando? Una mudanza.";
        break;
    case "och":
        $resultado = "Qué le dice una impresora a otra? Esta hoja es tuya o es impresión mía.";
        break;
    case "ner":
        $resultado = "Buenas, quería una camiseta de un personaje inspirador.\n¿Ghandi?.\nNo, mediani.";
        break;
    case "vil":
        $resultado = "¿Por qué la computadora fue a terapia? Tenía muchos bugs";
        break;
    case "bar":
        $resultado = "¿Qué hace una cebolla en una cita? Llora de emoción.";
        break;
    case "gut":
        $resultado = "¿Por qué el gato se sentó en la computadora? Para ver el mouse";
        break;    
    case "eds":
        $resultado = "Mamá, mamá... ¿Por qué en la escuela me dicen fin de semana?\nYa cállate Domingo";
        break;   
    default:
        $resultado = "Hola $nombre, no tengo un chiste para ti.";
        break;                        
}

devuelveJson($resultado);
