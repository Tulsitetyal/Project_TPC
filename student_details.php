<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Query</title>
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

        h2 {
            text-align: center;
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

        input[type="text"] {
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

        .result {
            margin-top: 20px;
        }

        img {
            display: block; /* Make the image a block-level element */
            margin: 0 auto; /* Center the image horizontally */
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>View Student Details</h1>
    <div class="container">
        <form action="" method="post">
            <label for="uid">Enter UID:</label>
            <input type="text" id="uid" name="uid" required>
            <button type="submit" name="search">Search</button>
        </form>

        <div class="result">
            <!-- PHP code will display results here -->



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

            if (isset($_POST["search"])) {
                $u_id = $_POST["uid"];

                // Sanitize user input to prevent SQL injection (you can use prepared statements for better security)
                $u_id = mysqli_real_escape_string($conn, $u_id);

                // Query the database to retrieve all details of the student with the specified UID
                $query = "SELECT * FROM student_details WHERE u_id = '$u_id' LIMIT 1";
                $result = $conn->query($query);

                if ($result && $result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $u_id = $row["u_id"];
                    $name = $row["name"];
                    $photo = $row["photo"];
                    $date_of_birth = $row["date_of_birth"];
                    $address = $row["address"];
                    $email = $row["email"];
                    $phone_number = $row["phone_number"];
                    $enrollment_date = $row["enrollment_date"];
                    $program = $row["program"];

                    // Display all the details
                    echo "<h2>UID: $u_id</h2>";
                    echo "<h2>Name: $name</h2>";
                    echo "<img src='$photo' alt='ID Holder Photo' height='150px' width='120px'>";
                    echo "<h2>Date of Birth: $date_of_birth</h2>";
                    echo "<h2>Address: $address</h2>";
                    echo "<h2>Email: $email</h2>";
                    echo "<h2>Phone Number: $phone_number</h2>";
                    echo "<h2>Enrollment Date: $enrollment_date</h2>";
                    echo "<h2>Program: $program</h2>";
                } else {
                    echo "ID not found.";
                }
            }

            // Close the database connection
            $conn->close();
            ?>

        </div>
    </div>
</body>

</html>