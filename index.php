
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
        echo "<p>$year is the year of the $zodiac[$remainder]</p>";
    }
}
    
?>

<?php include("_footer.php"); ?>