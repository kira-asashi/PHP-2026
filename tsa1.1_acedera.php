<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            border: 1px solid #000;
            padding: 25px;
            border-radius: 8px;
            background-color: #fff;
        }

        h2 {
            text-align: right;
            margin-bottom: 20px;
        }

        fieldset {
            border: 1px solid #000;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        legend {
            border: 1px solid #000;
            padding: 3px 10px;
            font-weight: bold;
            background-color: #fff;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            padding: 5px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-left: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #000;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

    <form method="POST">
        <fieldset>
        <i>For school use</i><b> - Permission to Register: </b>
        <input type="text" name="fullname" required><br>

        <b>Date: </b><input type="date" name="date" required><br>

        <input type="checkbox" name="subscribe">ESL
        <input type="checkbox" name="subscribe">SPED
        <input type="checkbox" name="subscribe">IPRC
        <input type="checkbox" name="subscribe">ISA<br>

        Student Number: <input type="number" name="username" required><br>
        Entry Date: <input type="date" name="entrydate" required><br>
        Entry Type: <input type="text" name="entrytype" required><br>
        Grade: <input type="number" name="grade" required><br>
        OEN: <input type="text" name="oen" required><br>
        Class/Homeform: <input type="text" name="class" required>
        </fieldset>

        <fieldset>
        Is this student currently expelled from any school or school board?
        <input type="radio" name="expelled">YES
        <input type="radio" name="expelled">NO
        </fieldset>

        <fieldset><legend>Student Information</legend>
        Full Legal Name: <input type="text" name="legalname" required><br>
        Preferred Name<sub>(if different)</sub>: <input type="text" name="preferredname"><br>
        Gender:
        <input type="radio" name="gender">MALE
        <input type="radio" name="gender">FEMALE
        Date of Birth: <input type="date" name="dob" required><br>
        If the student has other siblings in this school, please list them:
        <input type="text" name="siblings">
        </fieldset>
       
        <fieldset><legend>Previous School Information</legend>
        Name of Previous School Board / Municipality: <input type="text" name="prevschoolboard" required><br>
        Last date attended: <input type="date" name="ldate" required><br>
        Name of Previous School: <input type="text" name="prevschool" required><br>
        Grade at Previous School: <input type="number   " name="prevschoolgrade" required><br>
        Language of Instruction:
        <input type="radio" name="lang">English
        <input type="radio" name="lang">French
        <input type="radio" name="lang">Other<br>
        Reason of Transfer: <input type="text" name="transfer" required><br>

        <b>Did the student ever attend a Waterloo Region District School Board school in the past?</b><br>
        <input type="radio" name="waterloo">YES
        <input type="radio" name="waterloo">NO<br>

        If yes, name school(s):
        <input type="text" name="schoolnames">
        </fieldset>

        <fieldset><legend>Health Information</legend>
        Medical Conditions:
        <input type="text" name="medical">

        <fieldset>
            <b>For School Use</b><br>
            Immunization Record provided:
            <input type="radio" name="immunization">YES
            <input type="radio" name="immunization">NO
        </fieldset>

        Does student require an epi-pen:
        <input type="radio" name="epipen">YES
        <input type="radio" name="epipen">NO
        </fieldset>
       
        <fieldset><legend>Citizenship Information</legend>
        Birth Country: <input type="text" name="birthcountry" required><br>
        If Canada, Province of Birth: <input type="text" name="province"><br><br>
        Country of Citizenship:
        <input type="text" name="citizenship" required><br><br>
        If student not born in Canada, provide date student entered Canada:
        <input type="date" name="entercanada" required>
        </fieldset>

        <input type="submit" value="Submit">
    </form>
</div>

<div class="box">
    <?php
    $output = $_POST;
    foreach ($output as $key => $value){
        if (is_array($value)){
            echo "<b>$key:</b> ".implode(",",$value)."<br>";
        } else {
            echo "<b>$key:</b> $value<br>";
        }
    }
    ?>
</div>    
</body>
</html>