<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Calculator</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" name="value1">
            <input type="text" name="value2">
            <select name="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <input type="submit" name="submit" value="Calculate now">
        </form> 
        <?php
        if(isset($_POST["submit"])){
       $value1 = $_POST["value1"];
$value2 = $_POST["value2"];
$action = $_POST["action"];
$result;
            switch ($action) {
                case "+":
                    $result = $value1 + $value2;
                    break;
                case "-":
                    $result = $value1 - $value2;
                    break;
                case "*":
                    $result = $value1*$value2;
                    break;
                case "/":
                    if($value2 != 0){
                        $result = $value1 / $value2;
                        break;
                    }
                default:
                    break;
            }
            echo "<b>Your Answer is:</b><br>";
            var_dump($result);
        }
        ?>
        <p><?php echo $result; ?></p>
    </body>
</html>
