<?php
$temperatura = rand(9,35);

        if ($temperatura < 10)
        {
            echo "Frio";
        }
        else
        {
            if ($temperatura > 10 && $temperatura <= 20)
            {
                echo "Nublado";
            }
            else
            {
                if ($temperatura >= 21 && $temperatura <= 30)
                {
                    echo "Calor";
                }
                else
                {
                    if ($temperatura > 30)
                    {
                       echo "Tropical";
                    }
                }
            }
        }

?>