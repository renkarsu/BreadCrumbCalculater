<!--
    do php tutorial from 0:00:00 to 1:16:00
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        /*writing HTML*/
        echo "<h2>Writing HTML</h2>";
            //these functions make a line html code
            //check your browser, check developer tools or source control
            echo("Hello World");//same as echo "Hello World";

            echo "<h1>Renkarsu's Site</h1>";
            echo "<hr>";
            echo "<p>This is my site</p>";

        /*Variable*/
        echo "<h2>Variable</h2>";
            $characterName = "John";
            $characterAge = 35;
            //   "There once was a man named John <br>";
            echo "There once was a man named $characterName <br>";
            echo "He was $characterAge years old <br>";
            //$characterName = "Mike";
            echo "He really liked the name $characterAge <br>";
            echo "But didn't like being $characterAge <br>";

        /*Data types*/
        echo "<h2>Data Types</h2>";
            $phrase = "To be or not to be";//string, plane text
            $age = 30;//integers
            $gpa = 32.98743;//floating number, decimal number
            $isMale = false;//boolean
            //null means no value
            echo "4.57<br>";//show 4.57
            echo "$phrase<br>";

        /*Working With Strings*/
        echo "<h2>Woriking With Strings</h2>";
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
            echo "<br>";
            echo substr($phrase, 8, 3);//get 3 character from 8th character
            echo "<br>";

            //echo substr($phrase, 8)"<br>"; is error
            //echo "substr($phrase, 8)<br>"; shows "substr() "ln

        /*Working With Numbers*/
        echo "<h2>Woriking With Numbers</h2>";
            echo "-40.847<br>";//[echo -40.847] is also OK, but don't make a new line

            echo "5+9<br>";//operates {+,-,*,/,%}

            $num = 10;
            $num++;
            $num += 25;
            echo "$num<br>";//same as echo $num; echo <br>;

            echo abs(-100);echo "<br>";
            echo pow(2,10);echo "<br>";
            echo sqrt(2);echo "<br>";
            echo max(2, 10);echo "<br>";//two arg
            echo round(3.2);echo "<br>";//sisyagonyu
            echo ceil(3.2);echo "<br>";
            echo floor(3.9);echo "<br>";

        ?>

        <?php
        /*Getting User Input*/
        echo "<h2>Getting User Input</h2>";
        ?>

        <form action = "freeCodeCamp.php" method = "get">
            Name: <input type = "text" name = "username"><br>
            <!--
                The <input> element is displayed in several ways, depending on the type attribute
                input type = "text" : Defines a single-line text input field
                name = Each input field must have a name attribute to be submitted
                cf. https://www.w3schools.com/html/html_forms.asp
            -->
            Age: <input type="number" name="age"><br>
            <input type = "submit">
        </form>
        Your name is <?php echo $_GET["username"]?>
        <br>
        Your age is <?php echo $_GET["age"]?>
        <br>

        <form action = "freeCodeCamp.php" method = "get">
            from: <input type = "text" name = "from"><br>
            university: <input type="text" name="university"><br>
            <input type = "submit">
        </form>
        <?php 
        //echo "You are from $_GET["from"]<br>"; 
        //echo "Your university is $_GET["university"]<br>";
        if(isset($_GET["from"]) && isset($_GET["university"]))
        {
            $from = $_GET["from"];
            $university = $_GET["university"];
            echo "You are from $from<br>";
            echo "Your university is $university<br>";
        }
        ?>


    </body>
</html>