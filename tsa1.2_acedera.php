<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 40px;
            height: 40px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .even {
            background-color: #eeff00;
        }
        .odd {
            background-color: #ff0000;
            color: white;
        }
    </style>
</head>
<body>

<table border="1">
<?php
for ($row = 0; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= 10; $col++) {
        $value = $row * $col;
        if (($row + $col) % 2 == 0) {
            $class = "even";
        } else {
            $class = "odd";
        }

        echo "<td class='$class'>$value</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
