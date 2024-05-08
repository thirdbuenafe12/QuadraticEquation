<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Discriminant Calculator - Result</title>
</head>
<body>

    <div id="discriminantResult">
        <?php
        if(isset($_POST['submit'])){
            $a = isset($_POST['a']) ? $_POST['a'] : '';
            $b = isset($_POST['b']) ? $_POST['b'] : '';
            $c = isset($_POST['c']) ? $_POST['c'] : '';
            
            if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
                // Calculate the discriminant
                $discriminant = $b * $b - 4 * $a * $c;
                
                echo "<h2>The discriminant of the quadratic equation is: $discriminant</h2>";
            } else {
                // Display error message if any input is invalid
                echo "<h2>Error: Please provide valid numeric coefficients for a, b, and c.</h2>";
            }
        }
        ?>
    </div>

</body>
</html>
