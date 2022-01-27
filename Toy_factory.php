<?php

class Toy_factory
{

}

class Toy
{
    public function createToy($name)
    {
        $names = [
            "Книга",
            "Кукла",
            "Мяч",
            "Кубик",
            "Конструктор",
        ];
        shuffle($names);
        foreach ($names as $name) {
            echo  " - " . $name . "<br>";
        }
        for ($i = 1; $i < rand(5, 20); $i++) {
        }
    }
}

$name = new Toy();

$name->createToy(' ');
