<?php
//Variable 'Nombre', Operador de asignacion,Tipo de variabele (string),  Valor de la variable
$Nombre = (string) "Elefante";
$Edad = (int) 8;
$Altura = (double) 4;
$Animal = (bool) true;
$Lista = (array) ["Canada", "Colombia", 1, true];
print_r($Lista);
echo $Nombre;
var_dump($Nombre);
print_r($Nombre);

$parrafo = (string) <<<TXT
     <h1>"H0L4"</h1>
     <p> bienvenidos </p>
TXT;

     $parrafo2 = (string) 'hola \'como\' "estas" ';

     print_r($parrafo);

     //OPERADORES ARITMÉTICOS
     
    //Suma entre variables (Operador de suma)
    $num1 = (int) 2;
    $num2 = (int) 5; 
    $res = (int) ($num1+$num2);
    print_r($res); 

    // Resta entre variables (Operador de Resta)
     $num1 = (int) 10;
     $num2 = (int) 3;
     $res = (int) $num1 - $num2;
     print_r($res);

    // Multiplicación entre variables (Operador de Multiplicación)
     $num1 = (int) 5;
     $num2 = (int) 5;
     $res = (int) $num1 * $num2;
     print_r($res); 

    // Divición entre variables (Operador de Divición)
     $num1 = (int) 5;
     $num2 = (int) 5;
     $res = (int) $num1 / $num2;
     print_r($res);

    // Resto(Modulo) entre variables (Operador de Resto(Modulo))
    $num1 = (int) 49;
    $num2 = (int) 5;
    $res = (int) $num1 % $num2;
    print_r($res); 

   //Abreviado
    $num1 = (int) 20;
    $num2 = (int) 3; 
    $num1 -= $num2;
    print_r($num1);  

    // Pos_Incremento entre variables (Operador de Pos_Incremento)
     $num1 =(int) 0;
     $num2 = (int) $num1++;
     print_r( $num2);

    // Pre_Incremento entre variables (Operador de Pre_Incremento)
    $num1 =(int) 0;
    $num2 = (int) ++$num1;
    print_r( $num2);
    
    // Pos_Decremento entre variables (Operador de Pos_Decremento)
     $num1 = (int) 10;
     $res = $num1--;
     $res = $num1--;
     $res = $num1--;
     $res = $num1--;
     print_r($res); 

    //Pre_Decremento entre variables (Operador de Pre_Decremento)
     $num1 = (int) 10;
     $res = --$num1;
     $res = --$num1;
     $res = --$num1;
     $res = --$num1;
     print_r($res); 



// OPERADORES DE COMPARACIÓN

// Negacion(Diferente) entre variables (Operador de Negacion(Diferente)
$num1 = (int) 10;
$num2 = (int) 5; 
$res = (int) $num1!=$num2;
var_dump($res); 

///////////////////////////////////

$num1 = (int) 5;
$num2 = (string) '5';

//Operador de comparacion (igualdad)
// var_dump($num1==$num2);
//Operador de comparacion (identico)
// var_dump($num1===$num2);
//Operador de comparacion (diferente)
// var_dump($num1!=$num2);
// var_dump($num1<>$num2);

//Operador de comparacion (no identico)
//var_dump($num1!==$num2);


    //Operador de comparacion (mayor que)
    // var_dump($num1>$num2);
    //Operador de comparacion (mayor o igual que)
    // var_dump($num1>=$num2);


    //Operador de comparacion (menor que)
    // var_dump($num1<$num2);
    //Operador de comparacion (menor o igual que)
    // var_dump($num1<$num2);



?>