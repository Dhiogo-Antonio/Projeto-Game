<?php



class Geral {

    public function Desafio1($idade) {
        
        if ($idade === "1") {
    $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 60);
} else{
    $_SESSION['pontos'] = ($_SESSION['pontos'] ?? 60) - 10;
}

    }



    public function Desafio2($resposta) {
    if ($resposta === "4") {
        $_SESSION['pontos'] = ($_SESSION['pontos']);
    } else{
    $_SESSION['pontos'] = ($_SESSION['pontos']) - 10;
}
}

             public function Desafio3($resposta3){
        if ($resposta3 === "2") {
            $_SESSION['pontos'] = ($_SESSION['pontos']);
    }else{
    $_SESSION['pontos'] = ($_SESSION['pontos']) - 10;
        }
    } 
        
        public function Desafio4($resposta4){
        if ($resposta4 === "2") {
             $_SESSION['pontos'] = ($_SESSION['pontos']);

    }else{
    $_SESSION['pontos'] = ($_SESSION['pontos']) - 10;
    

}
        }

    public function Desafio5($resposta5){
        if ($resposta5 === "2") {
             $_SESSION['pontos'] = ($_SESSION['pontos']);

    }else{
    $_SESSION['pontos'] = ($_SESSION['pontos']) - 10;
    } 
}

    public function Desafio6($resposta6){
        if ($resposta6 === "3") {
            $_SESSION['pontos'] = ($_SESSION['pontos']);

        
    }else{
    $_SESSION['pontos'] = ($_SESSION['pontos']) - 10;
    
}
    }
}

?>