<?php
echo "<form method='post'>";
echo "Enter elements (comma separated formats):<br>";
echo "<input type='text' name='elements' size='80' value='{name1,image,age1,bday1,09156723143},{name2,image,age2,bday2,09156723143}'><br><br>";

echo "Choose sorting method (by Name column):<br>";
echo "<select name='method'>
        <option value='sort'>Ascending (sort)</option>
        <option value='rsort'>Descending (rsort)</option>
      </select><br><br>";

echo "<input type='submit' name='submit' value='Create Table'>";
echo "</form>";

if (isset($_POST['submit'])) {
    $input = $_POST['elements'];
    $method = $_POST['method'];
    
    $cleaned = trim($input, '{}');
    $blocks = explode('},{', $cleaned);
    $original_result = [];
    
    foreach ($blocks as $block) {
        $original_result[] = explode(',', $block);
    }
    
    $sorted_result = $original_result;
    
    usort($sorted_result, function($a, $b) use ($method) {
        if ($method === 'rsort') {
            return strcmp($b[0], $a[0]); // Descending order
        }
        return strcmp($a[0], $b[0]); // Ascending order
    });
    
    echo "<h3>Sorting Results:</h3>";
    echo "<h4>Original Array Structure:</h4>";
    echo "<pre>" . print_r($original_result, true) . "</pre>";
    
    echo "<h4>Sorted Array Structure (using $method):</h4>";
    echo "<pre>" . print_r($sorted_result, true) . "</pre>";
    
    echo "<h4>Final Formatted Table:</h4>";
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: left;'>";
    echo "<tr style='background-color: #f2f2f2;'>
            <th>Name</th>
            <th>Image File</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
          </tr>";
        foreach ($sorted_result as $row) {
        $name  = isset($row[0]) ? htmlspecialchars($row[0]) : '';
        $image = isset($row[1]) ? htmlspecialchars($row[1]) : '';
        $age   = isset($row[2]) ? htmlspecialchars($row[2]) : '';
        $bday  = isset($row[3]) ? htmlspecialchars($row[3]) : '';
        $phone = isset($row[4]) ? htmlspecialchars($row[4]) : '';
        
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$image</td>";
        echo "<td>$age</td>";
        echo "<td>$bday</td>";
        echo "<td>$phone</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
