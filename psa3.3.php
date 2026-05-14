<?php
echo "<form method='post'>";
echo "Enter exactly 3 numbers (comma separated): <input type='text' name='elements' value='10,5,2'><br><br>";
echo "<input type='submit' name='submit' value='Calculate'>";
echo "</form>";


function math($num1, $num2, $num3) {
    $sum  = $num1 + $num2 + $num3;
    $diff = $num1 - $num2 - $num3;
    $mul  = $num1 * $num2 * $num3;
    
    if ($num2 != 0 && $num3 != 0) {
        $quo = $num1 / $num2 / $num3;
    } else {
        $quo = "Undefined (division by zero)";
    }

    // Build the output table
    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>OPERATION</th><th>RESULT</th></tr>";
    
    echo "<tr><td>ADDITION</td><td>$sum</td></tr>";
    echo "<tr><td>DIFFERENCE</td><td>$diff</td></tr>";
    echo "<tr><td>MULTIPLICATION</td><td>$mul</td></tr>";
    echo "<tr><td>QUOTIENT</td><td>$quo</td></tr>";
    
    echo "</table>";    
}

// Form submission handler
if (isset($_POST['submit'])) {
    $input = $_POST['elements'];
    
    $array = explode(',', $input);
    

    $array = array_map('trim', $array);
    $array = array_map('floatval', $array);


    if (count($array) === 3) {
        math($array[0], $array[1], $array[2]);
    } else {
        echo "<p style='color:red;'>Error: Please enter exactly three numbers separated by commas.</p>";
    }
}
?>
