<?php
use Com\Iesebre\Dam2\simongonzalez\hellowoldcomposer\Hello;
require __DIR__ . "/src/Hello.php";


$greetings = new Hello();

$greetings->say_hello();