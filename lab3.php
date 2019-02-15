<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    footer {
        position: relative;
        width: auto;
        bottom: 0;
        padding: 1px;
    }
    </style>
</head>
<body>
    <?php include 'navbar.php';?>
    <?php
        // -----a
        echo "<h1>lab 3-a</h1>";
        $number = rand(0, 100);
        $number2 = rand(0, 100);
        echo $number + $number2 . "<br>";
        echo $number - $number2 . "<br>";
        echo $number * $number2 . "<br>";
        echo $number / $number2 . "<br>";
        // -----b1
        echo "<h1>lab 3-b1</h1>";
        for ($i=1; $i < 11; $i++) { 
            echo "$i x 6 = " . $i * 6 . "<br>";
        }
        // -----b2
        echo "<h1>lab 3-b2</h1>";
        function name($six) {
            for ($i=1; $i < 11; $i++) { 
                echo "$i x 6 = " . $i * $six . "<br>";
            }
        }
        name("6");
        // -----b3
        echo "<h1>lab 3-b3</h1>";
        $numb = ["3", "5", "8", "12"];
        foreach($numb as $numb2){
            for ($i=1; $i < 2; $i++) {
                for ($x=1; $x < 11; $x++) { 
                    echo "$x x $numb2[0] = " . $numb2 * $x . "<br>";
                }
                echo "<br>";
            }
        }
    ?>
    <?php include 'footer.php';?>
</body>
</html>