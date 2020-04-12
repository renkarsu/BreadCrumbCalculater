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
            echo "4.57<br>";//show 4.57
            echo "$phrase<br>";

        /*Working With Strings*/
            $phrase = "Giraffe Academy";
            echo "$phrase<br>";//represent any plane text

            echo strtolower($phrase);echo "<br>";
            echo strtoupper($phrase);echo "<br>";//In parameter, "dog" is also OK
            echo strlen($phrase);echo "<br>";

            echo "$phrase[0]<br>";//first character in string
            echo "$phrase[2]<br>";//third character in string
            //echo "Mike"[0];

            $phrase[0] = "B";
            echo "$phrase<br>";

            echo str_replace("Giraffe", "Panda", $phrase);echo"<br>";

            $phrase = "Giraffe Academy";
            echo substr($phrase, 8);//get from 8th character to the end
            echo substr($phrase, 8, 3);//get 3 character from 8th character

        /*Working With Number*/
            echo "-40.847<br>";//[echo -40] is also OK, but don't make a new line
            
        ?>
    </body>
</html>