<!--圖形驗證碼 -->

<h1>請輸入驗證碼：</h1>
<hr >
<?php
//$random預設為10，更改此數值可以改變亂數的位數----(程式範例-PHP教學)
$random=2;
$randoma='';
//FOR回圈以$random為判斷執行次數
for ($i=1;$i<=$random;$i=$i+1){
//亂數$c設定三種亂數資料格式大寫、小寫、數字，隨機產生
    $c=rand(1,3);
    //在$c==1的情況下，設定$a亂數取值為97-122之間，並用chr()將數值轉變為對應英文，儲存在$b
    if($c==1){$a=rand(97,122);$b=chr($a);}
    //在$c==2的情況下，設定$a亂數取值為65-90之間，並用chr()將數值轉變為對應英文，儲存在$b
    if($c==2){$a=rand(65,90);$b=chr($a);}
    //在$c==3的情況下，設定$b亂數取值為0-9之間的數字
    if($c==3){$b=rand(0,9);}
    //使用$randoma連接$b
    $randoma=$randoma.$b;
}
//輸出$randoma每次更新網頁你會發現，亂數重新產生了
echo $randoma.'<br>';
?>


<form action='<?php "ehco hw_04.php?rand={$randoma}" ?>' enctype="multipart/form-data">
<input type='text' name='code'>
<input type='submit' value='確定'>
</form>



<hr >
<?php

if (isset($_GET['code'])){
    $code = $_GET['code'];
    $$rand = $_GET['rand'];
    echo '$code = '. $code .'<br>';
    echo '$rand = '. $rand .'<br>';
    if ($code == $rand ){
        echo 'OK';
    }else{
        echo 'XX';
    }
} 



// $code = 1;
// if ($code == $randoma){
//     echo 'OK';
// }else{
//     echo 'XX';
// } 
?>




