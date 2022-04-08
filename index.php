<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Compute Algorithm Lemma Euchide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stile/stile.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>Algoritm Lemme Euchide</b></h1>
  <p>Welcome to the section of <span class="w3-tag">Compute Lemma Euclide of Coprime</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    
    <div class="w3-container">
      <h3><b>Compute</b></h3>
      
    </div>

    <div class="w3-container">
      <p>Dedicated section of the Noir Solutions website for the calculation of Euclid's lemma. Enter the two parameters you want to evaluate 
	  if they are Coprime  or not and the system will calculate for you the result.</p>
	  
	  <p><h2> Euclide Lemma </h2></p>
	  
	  <p>
	  
	  Euclid's lemma is a generalization of Proposition 30 of Book VII of Euclid's Elements. The lemma states that

If a number n, a positive integer, divides the product of two numbers a and b, positive integers, and is coprime with one of them (e.g., a), then it is divisor of the other (e.g., b).
Using the usual mathematical notations, this can be written as follows: </p>

<p>If n|ab and MCD(n, a) = 1 then n|b. </p>

<p><strong> Proposition 30</strong>, also known as Euclid's first theorem, states:</p>

<p>If a prime number divides the product of two positive integers, then the prime number divides at least one of the two positive integers.
This can be written as:</p>


<p>
If p|ab then p|a or p|b.
Of course, this result can be deduced immediately from Euclid's lemma, since a prime number is coprime with an integer if and only if it does not divide it.
</p>


<p>
Proposition 30 is often called Euclid's lemma in place of the above generalization. A very common application of Euclid's lemma in mathematics textbooks is the proof of the fundamental theorem of arithmetic, which, moreover, can be proved without making use of it.

</p>

<div class="example">
<script>
var myRequest = null;

function CreateXmlHttpReq2(handler) {
  var xmlhttp = null;
  try {
    xmlhttp = new XMLHttpRequest();
  } catch(e) {
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch(e) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
  }
  xmlhttp.onreadystatechange = handler;
  return xmlhttp;
}

function myHandler2() {
    if (myRequest.readyState == 4 && myRequest.status == 200) {
        e = document.getElementById("ex4result");
        e.innerHTML = myRequest.responseText;
    }
}

function esempio4() {
    var numa = document.f1.numero1.value;
	var numb = document.f1.numero2.value;
    var r = Math.random();
    myRequest = CreateXmlHttpReq2(myHandler2);
    myRequest.open("GET","secondo.php?numa="+escape(numa)+"&numb="+escape(numb)+"&rand="+escape(r));
    myRequest.send(null);
}
</script>
<form name="f1">
Insert Number 1: <input type="input" name="numero1">
Inser Number 2: <input type="input" name="numero2">


<input type="button" onClick="esempio4()" value="Compute Coprime" /><br />
Result: <div id="ex4result"></div>
</form>
</div>





</p>
      
    </div>
 
  

  
</div>

<!-- Introduction menu -->

  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Link Utility</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="img/Wordpress.jpg" alt="Wordpress Lesson" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/wordpress-tutorial-lezioni/">Wordpress Tutorial Lesson</a>
        
      </li>
      <li class="w3-padding-16">
        <img src="img/PHP.jpg" alt="PHP" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/la-rete-world-wide-web-funzionamento-definizioni/">Lesson PHP </a>
        
      </li>
	  <li class="w3-padding-16">
        <img src="img/MetodiMatematici.jpg" alt="Metodi Matematici" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/metodi-matematici-ingegneria/">Math for Engegnering</a>        
      </li>
	  
	  
	   <li class="w3-padding-16">
        <img src="img/Elettrotecnica.jpg" alt="Elettronic" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/lezioni-di-elettrotecnica/">Lesson of Elettronic </a>        
      </li>
	  <li class="w3-padding-16">
        <img src="img/SicurezzaInformatica.jpg" alt="Lesson Cyber Security" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/tutorial-sicurezza-informatica/">Lesson Cyber Security</a>        
      </li>
	  
	  
	  <li class="w3-padding-16">
        <img src="img/Fisica.jpg" alt="physics" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/materialedidattico/fisica/lezioni/">Physics</a>        
      </li>
	  
	  
	   <li class="w3-padding-16">
        <img src="img/RetiTelecomunicazioni.jpg" alt="Telecomunication System" class="w3-left w3-margin-right" style="width:50px">
        <a href="https://www.noirsolutions.net/la-rete-world-wide-web-funzionamento-definizioni/">Telecomunication System</a>        
      </li>
	  
	  
	  
	 
    </ul>
  </div>
  
  
  <hr> 
 
 
  
<!-- END Introduction Menu -->




<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <p>Powered by <a href="https://www.noirsolutions.net" target="_blank">Noir Solutions</a></p>
</footer>

</body>
</html>