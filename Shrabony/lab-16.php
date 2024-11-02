<?php
$birthday = '2025-02-06';
$today = new DateTime();
$nextBirthday = new DateTime($birthday);
$nextBirthday->setDate($today->format('Y'), $nextBirthday->format('m'), $nextBirthday->format('d'));

if ($today > $nextBirthday) {
    $nextBirthday->modify('+1 year');
}

$interval = $today->diff($nextBirthday);
$daysRemaining = $interval->days;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Countdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .countdown {
            font-size: 2em;
            color: #007bff;
        }
    </style>
</head>
<body>

<h1>Birthday Countdown</h1>
<p class="countdown"><?php echo $daysRemaining; ?> days until your birthday!</p>

</body>
</html>
