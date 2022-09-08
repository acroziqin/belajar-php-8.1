<?php

class Person
{

    public function __construct(public string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}

$person = new Person("Roziqin");

$reference = $person->sayHello(...);

var_dump($reference("Budi"));

//$reference2 = str_contains(...);
