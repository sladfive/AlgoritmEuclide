<?php

include 'divisor.php';

include 'check_prime.php';


function MCD(int $a,int $b) {



$flag_val = check_prime($a);
if ($flag_val == 1) {
	
	
   echo "<br> $a is a prime number";
    
   
   
}
   
else
	
	{ 
	
	
   echo "<br> $a It is a non-prime number";

    divisor($a);

	}

$flag_val = check_prime($b);
if ($flag_val == 1)
   echo "<br> $b It is a prime number";
else
   { 
	
	
   echo "<br> $b It is a non-prime number";

    divisor($b);

	}




if ($b == 0) {

return $a;

} else 

{
	
$r= $a % $b;


$r1 =$a / $b;
$r1= (int) $r1;

//echo "<br>------------0-----------------";
$rr = "quotient $r1 and
remainder division "."$r";
echo "<br><br><br><strong>Iterazion Number 1</strong><br> a :".$a." <br> b :". $b." <br> r= a / b = $rr <br>";



$ii=1;

$bb[0]= $b;
$aa[0]= $a;


while ($r != 0) {

    
    $aus= $ii+1;
echo "<br><strong>Iteration Number $aus</strong><br><br>";


$a = $b;
$b= $r;
$r =$a % $b;


$aa[$ii]= $b;
$bb[$ii]=$r;
$resto[$ii]=$r;



$r1 =$a / $b;
$r1= (int) $r1;


$rr = "quotient $r1 and 
remainder division "."$r"; 
echo "<br>a :".$a." <br> b :". $b." <br> r= a / b = $rr <br>";

if ($r==0){
    
    if ($resto[$ii-1] ==1){
        
        echo "<br>Result: MCD(".$aa[0].",".$bb[0].") = 1 the two numbers are coprime<br>";
    }
    
    if ($resto[$ii-1] !=1){
        
        echo  "<br>Result: MCD(".$aa[0].",".$bb[0].") = ".$bb[$ii-1]." the two numbers are NOT coprime<br>";
    }
    
    
    
    
    
}



$ii++;
}


}


}


?>