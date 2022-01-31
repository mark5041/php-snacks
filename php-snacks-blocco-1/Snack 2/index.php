

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <input type="text" name="name" placeholder = "nome">
        <input type="text" name="email" placeholder = "email">
        <input type="text" name="age" placeholder = "età">
        <input type="submit">
    </form>
    

    <?php
        if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"]))
        {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $age = $_GET["age"];
            if(strlen($name) > 3 && strpos($email, '@') == true && strpos($email, '.') == true && is_numeric($age))
            {
                echo "<h1> Accesso riuscito </h1>";
            }
            else
            {
                if(strlen($name) <= 3)
                {
                    echo "<h1> problema nome </h1>";
                }

                if(strpos($email, '@') == false)
                {
                    echo "<h1> problema @ </h1>";
                }

                if(strpos($email, '.') == false)
                {
                    echo "<h1> problema . </h1>";
                }
                
                if(!(is_numeric($age)))
                {
                    echo "<h1> problema età </h1>";
                }
            }
        }
    ?>


</body>
</html>