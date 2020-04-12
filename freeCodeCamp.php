<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        /*writing HTML*/
            //these functions make a line html code
            //check your browser, check developer tools or source control
            echo("Hello World");//same as echo "Hello World";

            echo "<h1>Renkarsu's Site</h1>";
            echo "<hr>";
            echo "<p>This is my site</p>";

        /*Variable*/
            $characterName = "John";
            $characterAge = 35;
            //   "There once was a man named John <br>";
            echo "There once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            //$characterName = "Mike";
            echo "He really liked the name $characterAge <br>";
            echo "But didn't like being $characterAge <br>";

        /*Data types*/
            $phrase = "To be or not to be";//string, plane text
            $age = 30;//integers
            $gpa = 32.98743;//floating number, decimal number
            $isMale = false;//boolean
            //null means no value
            echo 4.57;//show 4.57
            echp $phrase;

        ?>
    </body>
</html>