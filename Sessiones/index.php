<?php

//Para utilizar sessiones en php  debemos llamar a:
session_start();
//Esto nos permite inicializar una session, una vez que hacemos eso, nosotros tenemos acceso a sub variables superglobales

$_SESSION['count'] = 0;


echo'<p>Session</p>';