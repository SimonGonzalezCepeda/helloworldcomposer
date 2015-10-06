<?php
require __DIR__ . "/vendor/autoload.php";

class Hello
{

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function say_hello()
    {
        echo "Hola " . $this->faker->name . "!\n";
    }

}