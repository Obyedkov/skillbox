<?php
class Cat{
    public $name = [" Муска"," Мурка"];
}
class Dog{
    public $name = [" Барсик"," Плутон"];
}
class Fish{
    public $name = " Немо";
}

$catName = new Cat();
$catName1 = new Cat();

$dogName = new Dog();
$dogName1 = new Dog();

$fishName = new Fish();

echo $catName1->name[0];
echo $catName->name[1];

echo $dogName1->name[0];
echo $dogName1->name[1];
echo $fishName->name;


