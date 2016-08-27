
<?php
// Determinar si un número es negativo.
$numero=9;
if($numero<0){ 
  echo "Numero negativo"; 
} elseif($numero > 0){ 
  echo "Numero positivo"; 
} else { 
  echo "Numero: 0"; 
}

?>

<?php
//Imprimir verdadero o falso de acuerdo al contenido de una variable

$a=3;
if($a==3){
	echo"Verdadero";
}
	elseif(numero!=3){
		echo"Falso";
	}
?>

<?php
 //Determinar si un número es primo
 
 $n = 5;
 $primo=0;
 
    for($b = 1;$b < $n; $b++){
        if($n % $b == 0){
           $primo++;
        }
    }
    if($primo >= 2 ){
        echo "No es primo";
    } else {
        echo "Es primo";
    }
?>

<?php
 //Determinar si un número es mayor que 35
 $a=37;
 $b=35;
if($a<'b'){
	echo"Numero menor a 35";
}
	elseif($a>'b'){
		echo"Numero mayor a 35";
	}
?>

<?php
//Determinar si un número es positivo y menor que 100


