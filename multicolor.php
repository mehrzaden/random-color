<?php

function generate(){
    echo '<table style="width:100%; height: 100%;">' .PHP_EOL;
            for ($i = 0; $i <=2 ; $i++) {
                echo '<tr>' .PHP_EOL;
                for ($j = 0; $j<= 2 ; $j++) {
                    echo "<td style='background-color: rgb(".rand(0,255).", ".rand(0,255).", ".rand(0,255).")'> </td>" .PHP_EOL; 

                }
                echo "</tr>" .PHP_EOL;
            }
            echo "</table>" .PHP_EOL;

            echo "test";


 



}

generate();
 header("Refresh: 0; url=multicolor.php");

 
 