
    <?php
        function llenarArray($numElem)
        {
            $array=[];
            for($i=0;$i<$numElem;$i++){
                $array[$i]=rand(1,10);
            }
            return $array;
        }
        
        function contarApar($array,$valor){
            $cont=0;
            foreach($array as $num){
                if($num == $valor){
                    $cont++;
                }
            }
            return $cont;
        }
        $array=llenarArray(10);
        print_r($array);
        $valorB=4;
        echo"O numero de aparaciones de $valorB é " . contarApar($array,$valorB);

    ?>