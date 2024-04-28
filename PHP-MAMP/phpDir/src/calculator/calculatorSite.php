<?php
class Calculator
{
    public $num1;
    public $num2;

    public function __construct(float $num1, float $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function add(): float
    {
        return $this->num1 + $this->num2;
    }

    public function subtract(): float
    {
        return  $this->num1 - $this->num2;
    }

    public function multiply(): float
    {
        return $this->num1 * $this->num2;
    }

    public function divide(): float
    {
        if ($this->num2 == 0) {
            return INF;
        } else {
            return $this->num1 / $this->num2;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];


    $calculator = new Calculator($num1, $num2);


    switch ($operation) {
        case "add":
            $result = $calculator->add();
            break;
        case "subtract":
            $result = $calculator->subtract();
            break;
        case "multiply":
            $result = $calculator->multiply();
            break;
        case "divide":
            $result = $calculator->divide();
            break;
        default:
            $result = "Invalid operation";
    }


    // echo "Result: $result";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <form action="calculatorSite.php" method="post">
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1" required><br>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2" required><br>
            <button type="submit" name="operation" value="add">Add</button>
            <button type="submit" name="operation" value="subtract">Subtract</button>
            <button type="submit" name="operation" value="multiply">Multiply</button>
            <button type="submit" name="operation" value="divide">Divide</button>
            <?php if (isset($result)) { ?>
                <h4> The result is: <?= $result ?></h4>
            <?php }; ?>

        </form>
    </div>


</body>

</html>