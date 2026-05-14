<?php
// --- PERSONAL INFO ---
$name = "Kruschev Acedera";
$program = "Bachelor of Science in Computer Science";
$univ = "FEU Institute of Technology";

// --- CONTACT ---
$contact = [
    "email" => "kbacedera@email.com",
    "phone" => "+63 905 123 4567"
];

// --- Profile ---
$profile = "I am a 2nd Year student of FEU Institute of Technology, 
currently taking Bachelor of Science in Computer Science with specialization in Artificial Intelligence.";
// --- SKILLS ---
$skills = ["PHP", "JAVA", "C++", "Git"];

// --- ACHIEVEMENTS / EXTRACURRICULARS ---
$achievements = [
    "Completion of Cisco Networking 1",
    "Completion of Cisco DevNet",
    "Completion of Linux Essentials"
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>
    <meta charset="UTF-8">
</head>
<body>

<h1><?php echo $name; ?></h1>
<h2><?php echo $program; ?> — <?php echo $univ; ?></h2>

<hr>

<h3>Contact</h3>
<p>Email: <?php echo $contact["email"]; ?></p>
<p>Phone: <?php echo $contact["phone"]; ?></p>

<hr>

<h3>Profile</h3>
<p> <?php echo $profile ?> </p>

<hr>

<h3>Technical Skills</h3>
<ul>
<?php foreach ($skills as $skill): ?>
    <li><?php echo $skill; ?></li>
<?php endforeach; ?>
</ul>

<hr>

<h3>Certifications</h3>
<ul>
<?php foreach ($achievements as $ach): ?>
    <li><?php echo $ach; ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>