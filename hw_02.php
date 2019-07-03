<table border='1' width='100%'>
<?php 
//define 常數
define("ROWS",4);
define("FROM",1);
define("TO",4);
$c = '';


    for ($k = 0 ; $k < ROWS;$k++){
    echo "<tr>";
        for ( $j = FROM ; $j <= TO; $j++){
            if (($k +$j)%2 == 1){
                $c = 'pink';
            }else{
                $c = 'yellow';
            }
        echo "<td bgcolor=$c>";
        $newj = $j + $k*(TO - FROM +1);
            for ($i=1; $i<=9; $i++){
                $r = $newj*$i;
                echo "$newj x $i = $r <br>";
            }
        echo "</td>";
        }
    echo "</tr>";
    }
?>
</table>