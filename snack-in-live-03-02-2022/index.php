
<?php

    $products = [
        [
            'cod_product' => 1,
            'title' => 'Libro 1',
            'price' => 9.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => 'Libri e Intrattenimento',
        ],
        [
            'cod_product' => 2,
            'title' => 'Mouse',
            'price' => 59.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => ' Informatica',
        ],
        [
            'cod_product' => 3,
            'title' => 'Bilanciere',
            'price' => 19.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => 'Sport',
        ],
        [
            'cod_product' => 4,
            'title' => 'Manubri 2 X 20',
            'price' =>  49.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => 'Sport',
        ],
        [
            'cod_product' => 5,
            'title' => 'Tastiera',
            'price' => 89.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => 'Informatica',
        ],
        [
            'cod_product' => 6,
            'title' => 'Libro 2',
            'price' => 19.99,
            'img' => 'https://picsum.photos/id/684/600/400',
            'type' => 'Libri e Intrattenimento',
        ],
    ];


    $filteredProducts = [];
    $categories = [];
    $prices = [];


    foreach ($products as $product) 
    {
        if (!in_array($product['type'], $categories)) 
        {
            $categories[] = $product['type'];
        }
    };


    if (isset($_GET['category'])) 
    {
        $filter = $_GET['category'];
        if ($filter === 'all') 
        {
            $filteredProducts = $products;
        } 
        else 
        {
            foreach ($products as $product) 
            {
                if ($product['type'] == $filter) 
                {
                    $filteredProducts[] = $product;
                }

            };
        }
    }
    else
    {
        $filteredProducts = $products;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="GET">
            <select name="category" id="category">
                <option value="all">All</option>
                <?php 

                    foreach ($categories as $category) : 
                        echo '<option value="'.$category.'">'.$category.'</option>';
                    endforeach 

                ?>
            </select>
            <button>Cerca</button>
        </form>
        <?php 
            foreach ($filteredProducts as $product) :
                
                echo    '<div class="card">
                            <img src="'.$product['img'].'" alt="'.$product['title'].'">
                            <h1>Nome: '.$product['title'] .'</h1>
                            <h2>Tipologia: '. $product['type'] .'</h2>
                            <h3>Prezzo: '.$product['price'] .'€</h3>
                        </div>';

            endforeach 
        ?>
    </div>
</body>

</html>