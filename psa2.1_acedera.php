<!-- sample1.php -->
<!DOCTYPE html>
<html>
<head>
    <title>MEASURE CONVERSION CHART - LENGTHS (UK)</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .container { border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 5px; }
        .result { background-color: #f0f0f0; padding: 10px; margin-top: 10px; }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th { background-color: #d0f52b; }
    </style>
<!DOCTYPE html>
<body>

<h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

<?php
// Base values
$cm = $dm = $m = $km = 1;
$mm = 1;

$ft = $yd = $ch = $fur = $mi = 1;
$in = 1;
?>

<table style="width:100%">
    <tr><th colspan="6">METRIC CONVERSION</th></tr>
    <tr>
        <td>1 centimetre</td><td>=</td>
        <td><?php echo $cm * 10; ?> millimetres</td>
        <td>1 cm</td><td>=</td>
        <td><?php echo $cm * 10; ?> mm</td>
    </tr>
    <tr>
        <td>1 decimetre</td><td>=</td>
        <td><?php echo $dm * 10; ?> centimetres</td>
        <td>1 dm</td><td>=</td>
        <td><?php echo $dm * 10; ?> cm</td>
    </tr>
    <tr>
        <td>1 metre</td><td>=</td>
        <td><?php echo $m * 100; ?> centimetres</td>
        <td>1 m</td><td>=</td>
        <td><?php echo $m * 100; ?> cm</td>
    </tr>
    <tr>
        <td>1 kilometre</td><td>=</td>
        <td><?php echo $km * 1000; ?> metres</td>
        <td>1 km</td><td>=</td>
        <td><?php echo $km * 1000; ?> m</td>
    </tr>
</table>

<br>

<table style="width:100%">
    <tr><th colspan="6">IMPERIAL CONVERSION</th></tr>
    <tr>
        <td>1 foot</td><td>=</td>
        <td><?php echo $ft * 12; ?> inches</td>
        <td>1 ft</td><td>=</td>
        <td><?php echo $ft * 12; ?> in</td>
    </tr>
    <tr>
        <td>1 yard</td><td>=</td>
        <td><?php echo $yd * 3; ?> feet</td>
        <td>1 yd</td><td>=</td>
        <td><?php echo $yd * 3; ?> ft</td>
    </tr>
    <tr>
        <td>1 chain</td><td>=</td>
        <td><?php echo $ch * 22; ?> yards</td>
        <td>1 ch</td><td>=</td>
        <td><?php echo $ch * 22; ?> yd</td>
    </tr>
    <tr>
        <td>1 furlong</td><td>=</td>
        <td><?php echo $fur * 220; ?> yards</td>
        <td>1 fur</td><td>=</td>
        <td><?php echo $fur * 220; ?> yd</td>
    </tr>
    <tr>
        <td>1 mile</td><td>=</td>
        <td><?php echo $mi * 1760; ?> yards</td>
        <td>1 mi</td><td>=</td>
        <td><?php echo $mi * 1760; ?> yd</td>
    </tr>
</table>

<br>

<table style="width:100%">
    <tr><th colspan="6">METRIC → IMPERIAL CONVERSION</th></tr>
    <tr>
        <td>1 millimetre</td><td>=</td>
        <td><?php echo $mm * 0.03937; ?> inches</td>
        <td>1 mm</td><td>=</td>
        <td><?php echo $mm * 0.03937; ?> in</td>
    </tr>
    <tr>
        <td>1 centimetre</td><td>=</td>
        <td><?php echo $cm * 0.39370; ?> inches</td>
        <td>1 cm</td><td>=</td>
        <td><?php echo $cm * 0.39370; ?> in</td>
    </tr>
    <tr>
        <td>1 metre</td><td>=</td>
        <td><?php echo $m * 39.37008; ?> inches</td>
        <td>1 m</td><td>=</td>
        <td><?php echo $m * 39.37008; ?> in</td>
    </tr>
    <tr>
        <td>1 metre</td><td>=</td>
        <td><?php echo $m * 1.09361; ?> yards</td>
        <td>1 m</td><td>=</td>
        <td><?php echo $m * 1.09361; ?> yd</td>
    </tr>
    <tr>
        <td>1 kilometre</td><td>=</td>
        <td><?php echo $km * 0.62137; ?> miles</td>
        <td>1 km</td><td>=</td>
        <td><?php echo $km * 0.62137; ?> mi</td>
    </tr>
</table>

<br>

<table style="width:100%">
    <tr><th colspan="6">IMPERIAL → METRIC CONVERSION</th></tr>
    <tr>
        <td>1 inch</td><td>=</td>
        <td><?php echo $in * 2.54; ?> cm</td>
        <td>1 in</td><td>=</td>
        <td><?php echo $in * 2.54; ?> cm</td>
    </tr>
    <tr>
        <td>1 foot</td><td>=</td>
        <td><?php echo $ft * 30.48; ?> cm</td>
        <td>1 ft</td><td>=</td>
        <td><?php echo $ft * 30.48; ?> cm</td>
    </tr>
    <tr>
        <td>1 yard</td><td>=</td>
        <td><?php echo $yd * 0.9144; ?> m</td>
        <td>1 yd</td><td>=</td>
        <td><?php echo $yd * 0.9144; ?> m</td>
    </tr>
    <tr>
        <td>1 mile</td><td>=</td>
        <td><?php echo $mi * 1.609344; ?> km</td>
        <td>1 mi</td><td>=</td>
        <td><?php echo $mi * 1.609344; ?> km</td>
    </tr>
</table>

</body>
</html>