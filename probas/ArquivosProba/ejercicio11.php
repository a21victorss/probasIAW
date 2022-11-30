<?php
    echo "nombre de servidor:". $_SERVER["SERVER_NAME"]."<br/>";
    echo "direccion IP del servidor:". $_SERVER["SERVER_ADDR"]."<br/>";
    echo "directorio raiz:". $_SERVER["DOCUMENT_ROOT"]."<br/>";
    echo "puerto maquina servidor:" .$_SERVER["SERVER_PORT"]."<br/>";
    echo "ruta script actual:" .$_SERVER["SCRIPT_NAME"]."<br/>";
    echo "direccion ip desde la que está viendo la pagina actual al usuario:" .$_SERVER["REMOTE_ADDR"]."<br/>";
    echo "puerto host desde el que está viendo la pagina al usuario:" .$_SERVER["REMOTE_PORT"]."<br/>";
?>