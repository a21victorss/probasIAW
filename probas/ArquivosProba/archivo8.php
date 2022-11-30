<?php
$color6 = 'amarelo';

function foo()
{
    global $color;
    include 'archivo08_vars.php';
    echo "Una $fruta $color";
}

/* vars.php está no ámbito de foo() asi que $fruta NON está disponible por fóra deste ámbito. $color SI está disponible porque está declarado como global */

foo();
echo "Una $fruta $color";
?>