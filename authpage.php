<?php
/*
*Filename:authpage.php
*/ 
session_start(); 
//srand((double)microtime()*1000000); 
$authnum=$_SESSION['authnum']; 
//驗證使用者輸入是否和驗證碼一致 
if(isset($_POST['authinput'])) 
{ 
if(strcmp($_POST['authinput'],$_SESSION['authnum'])==0) 
echo"驗證成功！"; 
else 
echo"驗證失敗！"; 
} 
//生成新的四位整數驗證碼 
//while(($authnum=rand()%10000)<1000); 
?> 
<form action=authpage.php method=post> 
<table> 
請輸入驗證碼：<input type=text name=authinput style="width:80px"><br> 
<input type=submit name="驗證" value="提交驗證碼"> 
<input type=hidden name=authnum value=<?php echo $authnum;?>> 
<img src="authimg.php?authnum='<?php echo $authnum;?>'"> 
</table> 
</form> 

