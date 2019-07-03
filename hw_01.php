<h1>HW02：質數判斷</h1>
<hr >
<h3>說明:</h3>
製作一個表格，內含數字1~1000，每列10格，共100行。
將所有質數以黃底標出。
<hr>
<table border='1' width='100%'>
<?php
$c='';
for ( $k = 0 ; $k < 100 ; $k++ ){
    echo '<tr>';
    for ( $i = 1 ; $i <= 10 ; $i++ ){
        $j = $k *10 + $i ;
            for ( $l = 2 ; $l < $j ; $l ++ ){
                if ( $j % $l == 0 ){
                    $c = 'white';
                    break;
                }else{
                    $c = 'yellow';
                }
            }
            if ($j == 2 ) $c = 'yellow';
        echo "<td bgcolor={$c}> {$j} </td>";
    }
    echo '</tr>';
}  
?>


</table>
