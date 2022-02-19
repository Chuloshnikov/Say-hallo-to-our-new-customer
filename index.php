<?php

function timeInterval($name) {
    $time_is = explode(":",date( "H:i" ));
    if ($time_is[0] > 22 && $time_is[0] < 06) {
        print("Добрый ночи мистер $name");
    } else if ($time_is[0] > 07 && $time_is[0] < 16) {
        print("Добрый день мистер $name");
    } elseif ($time_is[0] > 17 && $time_is[0] < 21) {
        print("Добрый вечер мистер {$name}");
    }
}

timeInterval('Макс');

?>