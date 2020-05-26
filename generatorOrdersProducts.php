<?php

for ($i=0; $i < 50; $i ++) {
         $id_order = rand(1,50); 
         $id_product = rand(1,50); 
      /*   $id_costumer = rand(1,50); */
       
        $sql = "INSERT INTO `orders_products` (`id_order`, `id_product`)
        VALUES ('%d', '%d');";
    
        $query = sprintf($sql,
        $id_order, $id_product
    );
    echo $query . "<br>";
    
    }
    
    /* JOIN V ADMINERU */
    /* 
        SELECT p.id_product AS "ID produktu", p.name AS "Název produktu", o.id_order AS "ID objednávky", o.description "Popisek objednávky"
        FROM orders_products o_p
        JOIN orders ON o.id_order = o_p.id_order
        JOIN products p ON p.id_product = o_p.id_product
    */

    
    ?>

