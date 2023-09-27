<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walk-in Query</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #583672;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 60%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 97%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #583672;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: grey;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Walk-in Query</h1>
    <div class="container">
    <form action="" method="post">
            <label for="uid">UID:</label>
            <input type="text" id="uid" name="uid" required>
            <label for="datetime">Date and Time:</label>
            <input type="datetime-local" id="datetime" name="datetime" value="<?php echo date('Y-m-d\TH:i'); ?>" required>
            <label for="query">Query:</label>
            <textarea id="query" name="query" rows="4" required></textarea>
            <button type="submit" name="submit">Submit Query</button>
        </form>
    </div>
</body>


<?php
// Replace these credentials with your MySQL database details
$host = "localhost";
$username = "root";
$password = "";
$database = "tpc_db";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $uid = $_POST["uid"];
    $datetime = $_POST["datetime"];
    $queryText = $_POST["query"];

    // Sanitize user input to prevent SQL injection
    $uid = mysqli_real_escape_string($conn, $uid);
    $datetime = mysqli_real_escape_string($conn, $datetime);
    $queryText = mysqli_real_escape_string($conn, $queryText);

    // Insert data into the database
    $insertQuery = "INSERT INTO walk_in_queries (u_id, date_time, query) VALUES ('$uid', '$datetime', '$queryText')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Query submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


</html>
