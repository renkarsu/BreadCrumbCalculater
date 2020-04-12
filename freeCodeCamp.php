<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            //these functions make a line html code
            //check your browser, check developer tools or source control
            echo("Hello World");//same as echo "Hello World";

            echo "<h1>Renkarsu's Site</h1>";
            echo "<hr>";
            echo "<p>This is my site</p>";

            $characterName = "John";
            $characterAge = 35;
            //   "There once was a man named John <br>";
            echo "There once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            echo "He really liked the name $characterAge <br>";
            echo "But didn't like being $characterAge <br>";
        ?>
    </body>
</html>