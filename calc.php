<!--
    do php tutorial from 1:22:13 to 
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <form action = "calc.php" method = "get">

        expression: <input type = "text" name = "expression">

        <input type = "submit">
    </form>

    <?php
        $num1 = NULL;
        $num2 = NULL;
        $offset = NULL;
        if(isset($_GET["expression"]))
        {
            $expression = $_GET["expression"];
            echo "expression is $expression";

            $exprsize = strlen($expression);
            $numa = array();

            $ope_position;
            for ($i=$exprsize; $i > 0; $i--)
            {
                if($expression[$i] == "+")
                {
                    $ope_position = $i;
                }
                elseif ($expression[$i] == "-") {
                    $ope_position = $i;
                }
                elseif ($expression[$i] == "*") {
                    $ope_position = $i;
                }
                elseif ($expression[$i] == "/") {
                    $ope_position = $i;
                }
            }

            for ($i=$ope_position+1; $i < $exprsize; $i++) { 
                1+1;
            }

            for ($i=0; $i < $exprsize-$offset; $i++) { 
                if($expression[$i] == "+") {//echo "a";
                    $num1 += $num2;
                    $num2 = NULL;
                }
                elseif ($expression[$i] == "-") {//echo "b";
                    $num1 -= $num2;
                    $num2 = NULL;
                }
                elseif ($expression[$i] == "*") {//echo "c";
                    $num1 *= $num2;
                    $num2 = NULL;
                }
                elseif ($expression[$i] == "/") {//echo "d";
                    $num1 /= $num2;
                    $num2 = NULL;
                }
                else 
                {//echo "e";
                    if($ope_position1-1 != $i)
                    {
                        if(is_null($num1))
                        {
                            $num1 = (float)$expression[$i];echo $num1;
                        }
                        if(is_null($num2))
                        {
                            $num2 = (float)$expression[$i+2];
                        }
                    }
                    else{
                    break;
                    }
                }
            }
        }
        echo "<br>";
        echo $num1;
        echo "<br>";
    ?>

    </body>
</html>