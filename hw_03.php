<?php
for ($i = 1 ; $i <= 52 ; $i++){
    $poker[$i] = $i;
}
// foreach ($poker as $k => $v){
//     echo "{$k} => {$v} <br>";
// } 
//echo '<hr>';
for ( $i = 1 ; $i <= 52 ; $i++ ){
    $j = rand(1,52);
    // $a = $poker[$i];
    // $b = $poker[$j];
    //echo "{$a}:{$b} <br>";
    $poker[$i] = $poker[$i] + $poker[$j];
    $poker[$j] = $poker[$i] - $poker[$j];
    $poker[$i] = $poker[$i] - $poker[$j];
    //echo "{$a}:{$b} <br>";
    // $poker[$i] = $a;
    // $poker[$j] = $b;
    //echo '<hr >';
} 
foreach ($poker as $k => $v){
    echo "{$k} => {$v} <br>";
}

echo '<hr>';
$players = [[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}
foreach($players[0] as $card){
    echo $card . '<br>';
}

?>
<table border="1" width="100%">
    <!-- 雙層 foreach 印出所有玩家的牌 -->
    <?php
    foreach($players as $player){
    
        echo '<tr>';
        foreach($player as $card){
            echo  "<td> {$card}  </td>";
        }
        echo '<tr>';
    }
    ?>



</table>

<table border="1" width="100%">
    <!-- 雙層 foreach 印出所有玩家的牌 -->
    <!--加上花色-->

    <?php
    $suits = array("&spades;","<font color='red'>&hearts;</font>","<font color='red'>&diams;</font>","&clubs;");
    $values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach($players as $player){
        //使用sort function 排序
        @sort($player);
        echo '<tr>';
        foreach($player as $card){
            echo  "<td> {$suits[(int)($card/13)]} {$values[$card%13]} </td>";
        }
        echo '<tr>';
    }
    ?>



</table>


