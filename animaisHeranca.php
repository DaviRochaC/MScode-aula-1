<?php

try {
    require_once('./classes/gato.php');
    require_once('./classes/cachorro.php');
    // require_once('./classes/animal.php');

    $animais = [
        new Gato('Klaus'),
        new Cachorro('Bidu'),
        // new Animal('asdasd')
    ];

    foreach ($animais as $animal){
        $animal->apresentar();
        echo ' - ';
        $animal->fazerSom();
        echo '<br>';
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
