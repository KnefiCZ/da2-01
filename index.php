<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $data = array(
            0 => array(
                'name' => 'zlatý prsten Rytmuse',
                'description' => 'Dara Rollins si ho moc přála.',
                'short_description' => 'Bohužel ho nedostala.'
            ),
            1 => array(
                'name' => 'Becherovka Miloše Zemana',
                'description' => 'Flaška má 1 litr, zelenou barvu a originální víčko.',
                'short_description' => 'Precizné ožužlaná flaška becherovky.'
            ),
        );

        $randomProducts = file('radnom_products.txt');
        $randomProductsCound = count($randomProducts);

    for ($i=0; $i < 500; $i ++) {
        $price = rand(100,60000) / 100;
        $weight = rand(1,50);
        $lenght = rand(20,200);
        $height = rand(5,40);
        $width = rand(20,200);

        $sql = "INSERT INTO `products` (`name`, `price`, `description`, `short_description`, `weight`, `width`, `height`, `lenght`)
        VALUES ('%s', '%f', '%s', '%s', '%f', '%f', '%f', '%f');";

        $query = sprintf($sql,
        $randomProducts[rand(0, $randomProductCount-1)], $product['name'], $price ,"" ,"" ,$weight ,$width ,$height ,$lenght
        );

        echo $query . "<br>";
    
    }

        
    ?>
</body>
</html>