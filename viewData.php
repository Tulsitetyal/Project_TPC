<?php
// Replace these credentials with your MySQL database details
$host = "localhost";      // MySQL host
$username = "root";       // MySQL username
$password = "";           // MySQL password
$database = "tpc_db";     // MySQL database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data from the 'students' table
$query = "SELECT * FROM students";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS stylesheet for styling -->
    <title>Data Read</title>
</head>
<body>
    <h2>Data Read</h2>
    <table>
        <thead>
            <tr>
                <th>UID</th>
                <th>Name</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["uid"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["marks"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Button to go back to the dashboard -->
    <button onclick="window.location.href = 'dashboard.php';">Back to Dashboard</button>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
