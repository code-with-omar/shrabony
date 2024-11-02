<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Name Form</title>
</head>

<body>
    <h2>Enter Your Name</h2>
    <form action="" method="POST">
        <label for="username">User Name:</label>
        <input type="text" id="username" name="username" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        echo "<h3>Hello, $username!</h3>";
    }
    ?>
</body>

</html>