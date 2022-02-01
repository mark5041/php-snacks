<?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php

        foreach ($db as $key => $role)
        {
            foreach ($role as $person)
            {
                if($key == 'teachers')
                {
                    echo '<span class= "gray">' . $person['name'] . ' ' . $person['lastname'] . '</span>';
                }
                    elseif ($key == 'pm') 
                    {
                        echo '<span class= "green">' . $person['name'] . ' ' . $person['lastname'] . '</span>';
                    }
                    else
                    {
                        echo '<h1> Soggetto non identificato </h1>';
                    }
            }
            echo '</ul>';
        }

    ?>

</body>
</html>