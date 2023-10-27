<?php
// Cuando deseamos que una funcion tenga un tipa en especifico
// esto quiere decir que el usuario no pueda mandar valores de
// diferente tipo de dato al que nosotros deseemos se hace de
// las siguientes maneras

// Los tipos de dato que uno puede especificar son los siguientes:
// int, float, bool, string, array, object, null

//-------------------------------------------------------------
// Funcion que suma dos parametros sin ningun tipado
function suma($numero1, $numero2){
    return $numero1 + $numero2;
}
//-------------------------------------------------------------

// Funcion que suma dos parametro asignandole un tipo de dato
// especifico a los dos parametros que resive
function suma2(int $numero1, int $numero2){
    return $numero1 + $numero2;
}
// Esta forma de tipar las parametros es una buena forma pero no
// es la mejor ya que en este caso estamos diciendole que escriba
// un tipo de dato entero pero PHP tambien puede resivir flotantes
// asi no lo estamos pidiendo

//-------------------------------------------------------------

// Funcion que suma dos parametros asignandole un tipo de dato
// especifico y unico a los dos parametros que resive

// Declare hace referencia a que el programa solo resivira los tipos
// de dato que se le pasen y no resivira ningun otro

// declare (strict_types= 1);
function suma3(int $numero1, int $numero2){
    return $numero1 + $numero2;
}
// En este momento la funncion resivira solo parametros de tipo de dato
// entero, si intenta ingresar otro tipo de dato generara error

//-------------------------------------------------------------

// Retornar un tipo de dato en especifico
function suma4(int $numero1, int $numero2): int{
    return $numero1 + $numero2;
}
// Cuando queremos que la funcion retorne solo un tipo de dato en
// especial podremos darselo a saber despues de los parametros de la
// funcion con dos puntos (:) seguido del tipo de dato que se desea
// que se retorne

//-------------------------------------------------------------

// Retornar un tipo de datos o mas
function suma5(int $numero1, int $numero2): int | float {
    return $numero1 + $numero2;
}
// En este momento la funcion podra retornar dos tipos de dato segun
// la operacion que haga, podra retornar un tipo de dato entero o un
// tipo de dato flotante. Si la funcion retorna un tipo de dato diferente
// a estos dos generara un error

?>