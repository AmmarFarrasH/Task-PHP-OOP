<?php
    require_once "Animal.php";
    class Ape extends Animal
    {
        public function getApeName()
        {
            echo "<br/><br/>Name : Kera Sakti";
        }

        public function getApeLegs()
        {
            echo "<br/>Legs : 2";
        }

        public function getApeBlood()
        {
            echo "<br/>Cold Blooded : no";
        }

        public function getApeYell()
        {
            echo "<br/>Yell : Auoooo..";
        }
    }

?>