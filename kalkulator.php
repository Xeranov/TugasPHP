<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #000;
        }

        .calculator {
            text-align: center;
            border: 2px solid #000;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #00F5D0;
        }

        input, select, button {
            margin: 10px;
            padding: 8px;
        }

        .output {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="text" name="input1" placeholder="Input 1" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="text" name="input2" placeholder="Input 2" required>
            <button type="submit">Hitung</button>
        </form>
        <div class="output">
            Hasil: 
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['input1']) && isset($_POST['input2'])) {
                    $input1 = $_POST['input1'];
                    $input2 = $_POST['input2'];
                    $operator = $_POST['operator'];

                    switch ($operator) {
                        case 'add':
                            $result = $input1 + $input2;
                            break;
                        case 'subtract':
                            $result = $input1 - $input2;
                            break;
                        case 'multiply':
                            $result = $input1 * $input2;
                            break;
                        case 'divide':
                            $result = $input1 / $input2;
                            break;
                        default:
                            $result = "Invalid operator";
                            break;
                    }

                    echo $result;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
