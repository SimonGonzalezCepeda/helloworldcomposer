<?php

namespace Com\Iesebre\Dam2\simongonzalez\hellowoldcomposer;
use Faker\Factory;

class Hello
{

    /**
     * Hello constructor.
     */
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function say_hello()
    {
        echo "Hello " . $this->faker->name . "!\n";
    }

}