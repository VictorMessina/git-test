<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> exercicio 4.1, 4.2 e 5.1</title>
        <style type="text/css">
	.estilo1{
	background-color:gray;
	}
        </style>
    </head>
    <body>
<?php
// Mostrar se um aluno foi aprovado ou não.
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

echo " <br>
            <br>
            <br>"
        
        ?>
        
        <?php
        // Tabela.
echo "<table width='0' border='1'> 
   <tr>
    <td><b>ID</td>   
    <td><b>NOME</td> 
    <td><b>DESC</td>
  </tr>";
                    
  for($i = 1; $i<7; $i = $i + 1){ 
      $estilo = "estilo1";
      if ($i%2==0){
          
    echo "
     <tr> 
       <td class = $estilo>id</td>   
       <td class = $estilo>nome</td> 
       <td desc class = $estilo>desc</td> 
    </tr> 
      ";
    }
    
    else {
        echo "
     <tr> 
       <td>id</td>   
       <td>nome</td> 
       <td>desc</td> 
    </tr> 
      ";
    }
  }
   ?>
        
     <?php
        // Mostrar se um numero é primo ou não.
        $Numero=7;
        $Quantidade=0;
        for ($i=1; $i<=$Numero; $i++){
            
            if ($Numero%$i==0){
                $Quantidade++;
            }
        }
                if ($Quantidade>2){
                    echo " nao é primo";   
            }
            
            else {
                echo "É primo";
            }
         
        echo " <br>
            <br>"
    ?>
        
        <?php
        // Sequencia Fibonacci
        $x=0; 
        $y=1;
    for ($z=0; $z<9; $z++){
      $y=$y+$x;
      $x=$y-$x;
   
      echo $x.",";
    }
    
    echo " <br>
            <br>"
        ?>
        
        <?php
        
        
        echo "<br><br><br><br>";
        // tabela com arrays
            $Turma[0] = "02K01";
            $Turma[1] = "02J01";
            $Turma[2] = "02K01";

            $Disiplina[0] = "Tec Web";
            $Disiplina[1]= "Linguagem de Programação I";
            $Disiplina[2] = "Linguagem de Programação I";

            $Semana [0] = "Seguenda";
            $Semana [1] = "Terça";
            $Semana [2] = "Quarta";

            $Professor [0] = "Charles";
            $Professor [1] = "João";
            $Professor [2] = "Charles";

            echo "<table width='0' border='1'> 
               <tr>
                <td><b>Turma</td>   
                <td><b>disiplina</td> 
                <td><b>Semana</td>
                <td><b>Professor</td>
              </tr>";

              for($i = 0; $i<3; $i++){ 

                echo "
                 <tr> 
                   <td>$Turma[$i] </td>   
                   <td>$Disiplina[$i]</td> 
                   <td>$Semana[$i]</td>
                   <td> $Professor[$i]</td>
                </tr> 
                  ";
                }
                        echo "<br><br><br><br>";


        ?>
    </body>
</html>