<?php
    //função de data e hora 
    echo date ("d/m/y") . "<br>"; 
    echo date ("d/m/Y") . "<br>"; 
    echo date ("h:i:s") . "<br>"; 

    //funções para servidor Globais

    echo $_SERVER['PHP_SELF'] . "<BR>";    //Arquivo
    echo $_SERVER['SERVER_NAME'] . "<BR>"; //Localhost
    echo $_SERVER['REMOTE_ADDR'] . "<BR>"; //Status
    echo $_SERVER['REMOTE_HOST'] . "<BR>"; //Domínio
?>