<div class="titulo">Interface</div>

<?php
    interface Animal{
        function respirar();
    }

    interface Canino extends Animal, Mamifero{
        function latir(): string;
    }

    interface Mamifero{
        function mamar();
    }

    interface Felino{
        function correr();
    }

    class Cachorro implements Canino{
        function respirar(){
            return "Irei usar oxigênio!!";
        }

        function latir(): string{
            return 'au au au';
        }

        function mamar(){
            return 'irei usar leite';
        }

        function correr(){
            return 'vrunnnnnnn';
        }
    }

    $animal1 = new Cachorro();
    echo $animal1 -> respirar(), '<br>';
    echo $animal1 -> latir(), '<br>';
    echo $animal1 -> mamar(), '<br>';
    echo $animal1 -> correr(), '<br>';
    echo 'Fim!!';
    
    echo'<br>';
    echo'<br>';
    
    var_dump($animal1);
    echo'<br>';
    var_dump($animal1 instanceof Cachorro);
    echo'<br>';
    var_dump($animal1 instanceof Canino);
    echo'<br>';
    var_dump($animal1 instanceof Mamifero);
    echo'<br>';
    var_dump($animal1 instanceof Animal);
    echo'<br>';
    var_dump($animal1 instanceof Felino);
?>