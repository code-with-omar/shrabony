<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Values in Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>String Values in Table</h2>
    <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>String Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $strings = ["Apple", "Banana", "Cherry", "Date", "Elderberry", "Fig", "Grape"];

            foreach ($strings as $index => $value) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>"; // Display index (1-based)
                echo "<td>" . htmlspecialchars($value) . "</td>"; // Display string value
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
