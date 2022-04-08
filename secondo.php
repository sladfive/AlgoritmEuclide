<?php 




if (isset($_GET['numa'])) {
if (isset($_GET['numa'])) {
 
 

$numero1=intval($_GET['numa']); 
$numero2=intval($_GET['numb']);


//echo "<br>valore numero 1 $numero1<br>";
//echo "<br>valore numero 2 $numero2<br>";


$flag1=false;
$flag2=false;












}
}


if ($numero1 >0) $flag1=true;
	

if ($numero2 >0) $flag2=true;


$flag =false;

if (($flag1 == true ) and ($flag2 == true)) {
	
	$flag= true;
	
	//echo "<br>valore finale di flag è true ";
	
}else echo "<br>Insert number wrong , try again";


if ($flag==true) {
    
 //echo "<br>entrato in MCD";
 
 include 'mcdeuclide.php';
    echo MCD($numero1, $numero2);
    
}



?>