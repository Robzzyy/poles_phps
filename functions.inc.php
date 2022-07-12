<?php

function ecrire($texte){
    echo "$texte<br>";
}

function debug($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function operation($chiffre1, $chiffre2,$operator) {
   
    switch ($operator) {
        case '+':
            $operator = $chiffre1 + $chiffre2;
            break;
        case '-':
            $operator = $chiffre1 - $chiffre2 ;
             break;  
        case '/':
            $operator = $chiffre1 / $chiffre2 ;
             break;  
        case '*':
             $operator = $chiffre1 * $chiffre2 ;
             break;  
           
    }
    return $operator;
} 



$aujourdhui = "lundi";