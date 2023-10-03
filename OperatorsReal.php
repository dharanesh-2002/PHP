<?php

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            border: 10cap solid black;
            border-radius: 25px;
        }

        div {
            border: 100 solid black;
            border-radius: 25px;
        }

        h2 {
            text-align: center;
            color: blueviolet;
        }
    </style>
</head>

<body>
    <div>
        <h2>OPERATORS</h2>
        <form action="OperatorsReal.php" method="post">
            <label for="Input1">Input1</label>
            <input type="number" name="Input1" required><br><br>
            <label for="Input2">Input2</label>
            <input type="number" name="Input2" required><br><br>
            <label for="Value">Operator</label>
            <select name="Value" id="Value" required>
                <option value=" ">Select</option>
                <option value="Addition">Addition</option>
                <option value="Subration">Subration</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Division">Division</option>
                <option value="Modulo">Modulo</option>
                <option value="And">Bitwise AND</option>
                <option value="Or">Bitwise OR</option>
                <option value="Xor">Bitwise XOR</option>
                <option value="Spaceship">Spaceship</option>
            </select><br><br>
            <button>Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Input1 = $_POST["Input1"];
            $Input2 = $_POST["Input2"];
            $Operator = $_POST["Value"];
            global $result;
            switch ($Operator) {
                case "Addition":
                    $result = $Input1 + $Input2;
                    break;
                case "Subration":
                    $result = $Input1 - $Input2;
                    ;
                    break;
                case "Multiplication":
                    $result = $Input1 * $Input2;
                    break;
                case "Division":
                    $result = $Input1 / $Input2;
                    break;
                case "Modulo":
                    $result = $Input1 % $Input2;
                    break;
                case "And":
                    $result = $Input1 & $Input2;
                    break;
                case "Or":
                    $result = $Input1 | $Input2;
                    break;
                case "Xor":
                    $result = $Input1 ^ $Input2;
                    break;
                case "Spaceship":
                    $result = $Input1 <=> $Input2;
                    break;
            }
        }
        ?>
        <p>Result :
            <?php
            $format = '%1$2d = %1$04b';
            printf($format, $result);
            ?>
         </p>
    </div><br>
</body>
</html>