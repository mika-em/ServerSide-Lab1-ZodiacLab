<?php $title = "Index"; ?>
<?php include("_header.php"); ?>
<h6> Mika Manaligod</h6>

<?php include("zodiac.php"); ?>
<?php include("form.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    if ($year == "" || $year < 1900 || $year > 2023) {
        echo "<p>Invalid year</p>";
    } else {
        $year = $_POST["year"];
        $remainder = $year % 12;
        $zodiac[$remainder];
        $zodiac = $zodiac[$remainder];
        echo "$zodiac</p>";
    }
}

if ($zodiac== "Monkey") {
    echo "<img src='images/monkey.png' alt='Monkey'>";
} else if ($zodiac == "Rooster") {
    echo "<img src='images/rooster.png' alt='Rooster'>";
} else if ($zodiac == "Dog") {
    echo "<img src='images/dog.png' alt='Dog'>";
} else if ($zodiac == "Pig") {
    echo "<img src='images/pig.png' alt='Pig'>";
} else if ($zodiac == "Rat") {
    echo "<img src='images/rat.png' alt='Rat'>";
} else if ($zodiac == "Ox") {
    echo "<img src='images/ox.png' alt='Ox'>";
} else if ($zodiac== "Tiger") {
    echo "<img src='images/tiger.png' alt='Tiger'>";
} else if ($zodiac == "Rabbit") {
    echo "<img src='images/rabbit.png' alt='Rabbit'>";
} else if ($zodiac == "Dragon") {
    echo "<img src='images/dragon.png' alt='Dragon'>";
} else if ($zodiac == "Snake") {
    echo "<img src='images/snake.png' alt='Snake'>";
} else if ($zodiac == "Horse") {
    echo "<img src='images/horse.png' alt='Horse'>";
} else if ($zodiac== "Goat") {
    echo "<img src='images/goat.png' alt='Goat'>";
}

?>

<?php include("_footer.php"); ?>