<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php';?>

    <?php 
        // -----1
        echo("<h1>Hello World!</h1>");
        // -----2
        define("HELLO", "<h1>Hello World!</h1>", true);
        echo hello;
        // -----3
        $x = "<h1>Learning PHP</h1>";
        echo $x;
        // -----4
        $h = "<h1>Hello ";
        $w = "World!</h1>";
        echo $h . $w;
        // -----5
        $array = ["<h1>Hello ", "World!</h1>"];
        echo $array[0] . $array[1];
    ?>
    
    <?php include 'footer.php';?>
</body>
</html>