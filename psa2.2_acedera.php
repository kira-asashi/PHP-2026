<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking Program</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
        .box {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        input, button {
            padding: 10px;
            margin: 10px;
            width: 80%;
        }
        .result {
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Grade Ranking</h2>

    <form method="post">
        <input type="number" name="grade" placeholder="Enter grade" required>
        <br>
        <button type="submit">Check</button>
    </form>

    <div class="result">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST["grade"];
        $rank = "";

        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
        } elseif ($grade >= 90) {
            $rank = "A-";
        } elseif ($grade >= 87) {
            $rank = "B+";
        } elseif ($grade >= 83) {
            $rank = "B";
        } elseif ($grade >= 80) {
            $rank = "B-";
        } elseif ($grade >= 77) {
            $rank = "C+";
        } elseif ($grade >= 73) {
            $rank = "C";
        } elseif ($grade >= 70) {
            $rank = "C-";
        } elseif ($grade >= 67) {
            $rank = "D+";
        } elseif ($grade >= 63) {
            $rank = "D";
        } elseif ($grade >= 60) {
            $rank = "D-";
        } else {
            $rank = "F";
        }

        echo "Your Grade: $grade <br> Rank: $rank";
    }
    ?>
    </div>
</div>

</body>
</html>