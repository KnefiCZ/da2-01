<?php 

require 'vendor/autoload.php';

use RandomStringGenerator\RandomStringGenerator;

$generator = new RandomStringGenerator();

for ($i=0; $i < 50; $i ++) {
    $firstname = $generator->generate('Llllllllll');
    $lastname = $generator->generate('Llllllllll');
    $email = $generator->generate('llllllllll') . "@" . $generator->generate('llllllllll') . ".cz";
    $password = $generator->generate('LllllllLLLp');

    $sql = "INSERT INTO `customers` (`firstname`, `lastname`, `email`, `password`)
    VALUES ('%s', '%s', '%s', '%s');";

    $query = sprintf($sql,
    $firstname, $lastname, $email, $password
);
echo $query . "<br>";

}
