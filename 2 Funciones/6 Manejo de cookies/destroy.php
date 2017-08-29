<?php
//Lo que hacemos en esencia es cargar en el momento un valor null para la cookie, o en otras palabras borrar el contenido dentro de ella
setcookie('count', null, time() - 1);

echo'cookie destruida';