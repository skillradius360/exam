<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <h2>Age Calculator</h2>
    <form action=" " method="post">
        <label for="birthdate">Enter your birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate Age</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get birthdate from form input
    $birthdate = $_POST["birthdate"];
    
    // Calculate age
    $birthdateTimestamp = strtotime($birthdate);
    $currentDate = time();
    
    $ageSeconds = $currentDate - $birthdateTimestamp;
    $ageYears = floor($ageSeconds / (365 * 24 * 60 * 60));
    $ageMonths = floor(($ageSeconds - ($ageYears * 365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
    $ageDays = floor(($ageSeconds - ($ageYears * 365 * 24 * 60 * 60) - ($ageMonths * 30 * 24 * 60 * 60)) / (24 * 60 * 60));
    
    // Display age
    echo "You are $ageYears years, $ageMonths months, and $ageDays days old.";
}
?>

</body>

</html>