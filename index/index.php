<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> exercicio 4.1 e 4.2</title>
        <style type="text/css">
	.estilo1{
	background-color:gray;
	}
        </style>
    </head>
    <body>
<?php
$P1=9;
$M1=8;       
$M2=7;
$Proj1=8;
$Proj2=7;
$Proj3=7;
$Proj4=8;
$TrabF=8;
$Proc=10;
$PF=8;
$MI=(30*$P1 + 10*$M1 + 10*$M2 + 5*$Proj1 + 5*$Proj2 + 5*$Proj3 +5*$Proj4 +10*$TrabF + 20*$Proc)/100;
$MF=0;
if ($MI >=7.5){

	$MF == $MI;
	echo "Aprovado sem Prova Final,Parabens!!! Boas ferias";
}

else {

	$MF=($PF + $MI)/2;

if ($MF >=5.0){

	echo "Aprovado com Prova Final, Agora já pode descansar tranquilo.";
 
}

else { 

	echo " Reprovado,não foi dessa vez. Ano que vem tem mais TWII";

	echo " <p> Media Intermediaria: $MI, Media Final: $MF </p>";
	
	}
}
        
        ?>
        
        <?php 

echo "<table width='0' border='1'> 
   <tr>
    <td><b>ID</td>   
    <td><b>NOME</td> 
    <td><b>DESC</td>
  </tr>";
                    
  for($i = 1; $i<7; $i = $i + 1){ 
    echo "
     <tr> 
       <td>id</td>   
       <td>nome</td> 
       <td>desc</td> 
    </tr> 
      "; 
    }
    
   ?>
    </body>
</html>