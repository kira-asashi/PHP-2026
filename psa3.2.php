<?php
// Program that lets users build an array and inspect it with print_r and var_dump
echo "<h2>Array Builder and Inspector</h2>";
echo "<form method='post'>";
echo "Enter elements (comma separated): <input type='text' name='elements' value='1,2,3'>";
echo "<input type='submit' name='submit' value='submit'>";
echo "</form>";

if (isset($_POST['submit'])) {
    // Get user input and create array
    $input = $_POST['elements'];
    $array = explode(',', $input);
    
    // Trim whitespace from each element
    $array = array_map('trim', $array);
    
    echo "<h3>Your Array:</h3>";
       
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: left;'>";
    echo "<tr><th>";
    echo "Array list: </th>";
    echo "<td>";
    foreach ($array as $index => $value) {
        echo "$value"," ";
    }
    echo "</td>";
    echo "</tr>";

    $sum = 0.0;
    foreach ($array as $index => $value) {
        $sum += $value;
    }

    echo "<tr>";
    echo "<th>ADDITION</th>";
    echo "<td>$sum</td>";
    echo "</tr>";

    $diff = 0.0;
    foreach ($array as $index => $value) {
        $diff -= $value;
    }

    echo "<tr>";
    echo "<th>DIFFERENCE</th>";
    echo "<td>$diff</td>";
    echo "</tr>";


    $mul = 1.0;
    foreach ($array as $index => $value) {
        $mul *= $value;
    }

    echo "<tr>";
    echo "<th>MULTIPLICATION</th>";
    echo "<td>$mul</td>";
    echo "</tr>";

    $quo = 1.0;
    foreach ($array as $index => $value) {
        $quo /= $value;
    }

    echo "<tr>";
    echo "<th>QUOTIENT</th>";
    echo "<td>$quo</td>";
    echo "</tr>";
    echo "</table>";    
}
?>