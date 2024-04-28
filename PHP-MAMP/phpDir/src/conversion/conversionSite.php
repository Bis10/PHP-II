<?php
class Conversion
{
    public $unit;


    public function __construct(float $unit)
    {
        $this->unit = $unit;
    }
    public function celciusToFahrenheit(): float
    {
        return ($this->unit * 9 / 5) + 32;
    }
    public function celciusToKelvin(): float
    {
        return $this->unit + 273.15;
    }
    public function kmPerHrToMPerSec(): float
    {
        if ($this->unit <= 0) {
            return 0;
        } else {
            return ($this->unit * 5) / 18;
        }
    }
    public function kmPerHrToKnots(): float
    {
        if ($this->unit <= 0) {
            return 0;
        } else {
            return $this->unit * 0.539957;
        }
    }
    public function kgToGrams(): float
    {
        if ($this->unit <= 0) {
            return 0;
        } else {
            return $this->unit * 1000;
        }
    }
    public function gramsToKg(): float
    {
        if ($this->unit <= 0) {
            return 0;
        } else {
            return $this->unit / 1000;
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unit = $_POST["unit"];
    $operation = $_POST["operation"];

    $conversion = new Conversion($unit);
    switch ($operation) {
        case "celciusToFahreinheit":
            $result = $conversion->celciusToFahrenheit();
            break;
        case "celciustoKelvin":
            $result = $conversion->celciusToKelvin();
            break;
        case "kmPerHrToMPerSec":
            $result = $conversion->kmPerHrToMPerSec();
            break;
        case "kmPerHrToKnots":
            $result = $conversion->kmPerHrToKnots();
            break;
        case "kgToGrams":
            $result = $conversion->kgToGrams();
            break;
        case "gramsToKg":
            $result = $conversion->gramsToKg();
            break;
        default:
            $result = "Invalid operation";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measurement Conversion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form action="conversionSite.php" method="post">


            <label for="unit">Unit:</label>
            <input type="number" id="unit" name="unit" required><br>
            <button type="submit" name="operation" value="celciusToFahreinheit">Celcius To Fahreinheit</button>
            <button type="submit" name="operation" value="celciustoKelvin">Celcius To Kelvin</button>
            <button type="submit" name="operation" value="kmPerHrToMPerSec">Km/Hr To M/S</button>
            <button type="submit" name="operation" value="kmPerHrToKnots">Km/Hr To Knots</button>
            <button type="submit" name="operation" value="kgToGrams">Kg To Grams</button>
            <button type="submit" name="operation" value="gramsToKg">Grams To Kg</button>
            <?php if (isset($result)) { ?>
                <h4> The result is: <?= $result ?></h4>
            <?php }; ?>
        </form>
    </div>
</body>

</html>