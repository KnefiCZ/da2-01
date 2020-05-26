<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $randomProducts = file('random_products.txt');
        $randomProductsCount = count($randomProducts);
        var_dump($randomProductsCount);
        $randomDescriptions = file('random_descriptions.txt');
        $randomDescriptionsCount = count($randomDescriptions);
        var_dump($randomDescriptionsCount);
        $randomShortdescriptions = file('random_short_descriptions.txt');
        $randomShortdescriptionsCount = count($randomShortdescriptions);
        var_dump($randomShortdescriptionsCount);

    for ($i=0; $i < $randomProductsCount; $i ++) {
        $name = $randomProducts;
        $price = rand(100,60000) / 100;
        $description = $randomDescriptions;
        $short_description = $randomShortdescriptions;
        $weight = rand(1,50);
        $lenght = rand(20,200);
        $height = rand(5,40);
        $width = rand(20,200);

        $sql = "INSERT INTO `products` (`name`, `price`, `description`, `short_description`, `weight`, `width`, `height`, `lenght`)
        VALUES ('%s', '%f', '%s', '%s', '%f', '%f', '%f', '%f');";

        $query = sprintf($sql,
        $randomProducts[rand(0, $randomProductsCount-1)], $price ,$randomDescriptions[rand(0, $randomDescriptionsCount-1)],  $randomShortdescriptions[rand(0, $randomShortdescriptionsCount-1)], $weight ,$width ,$height ,$lenght
        );

        echo $query . "<br>";
    
    }
    ?>
</body>
</html>