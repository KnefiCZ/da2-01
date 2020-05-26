<?php
    require 'vendor/autoload.php';

    use Carbon\Carbon;
    use RandomStringGenerator\RandomStringGenerator; 

    $generator = new RandomStringGenerator();

    define('CUSTOMERS_COUNT', 50);

    for ($i=0; $i < 50; $i ++) {
        $date_created = Carbon::create(2020, rand(1,12), rand(1,30), rand(1,59), rand(1,59), rand(1,59));
        $id_customer = rand(1,50); 
        $description = $generator->generate('Llllllllll');
       
        $sql = "INSERT INTO `orders` (`date_created`, `id_customer`, `description`)
        VALUES ('%s', '%d', '%s');";
    
        $query = sprintf($sql,
        $date_created, $id_customer, $description
    );
    echo $query . "<br>";
    
    }