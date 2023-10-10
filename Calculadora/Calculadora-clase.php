<?php

$numero_1_post  = $_POST["numero-1"];
$numero_2_post  = $_POST["numero-2"];
$operacion_post = $_POST["operaciones"];

class Calculadora {

    private int $numero_1;
    private int $numero_2;

    public function __construct ($numero_1, $numero_2){
        $this -> numero_1 = $numero_1;
        $this -> numero_2 = $numero_2;
    }

    public function set_numero1 ($numero_1){
        if (!empty($numero_1) && is_numeric($numero_1)) {
            $this -> numero_1 = $numero_1;
        }
    }

    public function set_numero2 ($numero_2){
        if (!empty($numero_2) && is_numeric($numero_2)) {
            $this -> numero_2 = $numero_2;
        }
    }

    public function get_suma (){
        return "La suma es: " . $this -> numero_1 + $this -> numero_2;
    }

    public function get_resta (){
        return "La resta es: " . $this -> numero_1 - $this -> numero_2;
    }

    public function get_multiplicacion (){
        return "La multiplicacion es: " . $this -> numero_1 * $this -> numero_2;
    }

    public function get_division (){
        return "La division es: " . $this -> numero_1 / $this -> numero_2;
    }
}

$obj = new Calculadora ($numero_1_post, $numero_2_post);

if ($operacion_post == "suma"){
    echo $obj -> get_suma();
}

elseif ($operacion_post == "resta"){
    echo $obj -> get_resta();
}

elseif ($operacion_post == "multiplicacion"){
    echo $obj -> get_multiplicacion();
}

elseif ($operacion_post == "division"){
    echo $obj -> get_division();
}

?>