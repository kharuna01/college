<?php
    class Animal {
        public $cry = "meow!";
        function bow() {
            echo $this -> cry . PHP_EOL;
        }
    }
    $animal_01 = new Animal();
    $animal_01 -> bow();
    
    class Dog extends Animal {
        public $cry = "わんわん";
    }
    class Cat extends Animal {
        public $cry = "にゃんにゃん";
    }
    $animal_02 = new Dog();
    $animal_02 -> bow();
    $animal_02 = new Cat();
    $animal_02 -> bow();
?>