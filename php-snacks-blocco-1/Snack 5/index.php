
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $phrase = "Lorem ipsum dolor sit amet. Consectetur adipisicing elit. Cum voluptate. Nesciunt beatae inventore totam possimus molestiae. Necessitatibus eligendi rerum consequuntur obcaecati illo atque assumenda saepe. Distinctio dignissimos sequi eius repellat?";
        $phrase = explode(". ", $phrase);
        echo '<ul>';
        foreach ($phrase as $string)
        {
            echo '<li>' . $string . '</li>';
        }
        echo '</ul>';
    ?>

</body>
</html>