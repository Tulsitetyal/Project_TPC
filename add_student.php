<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
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
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        input[type="file"] {
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
    <h1>Add Student</h1>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="u_id">UID:</label>
            <input type="text" id="u_id" name="u_id" required>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
            <label for="enrollment_date">Enrollment Date:</label>
            <input type="date" id="enrollment_date" name="enrollment_date" required>
            <label for="program">Program:</label>
            <input type="text" id="program" name="program" required>
            <button type="submit" name="add">Add Student</button>
        </form>
    </div>
</body>

</html>



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

if (isset($_POST["add"])) {
    $u_id = $_POST["u_id"];
    $name = $_POST["name"];
    $date_of_birth = $_POST["date_of_birth"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $enrollment_date = $_POST["enrollment_date"];
    $program = $_POST["program"];

    // Sanitize user input to prevent SQL injection (you can use prepared statements for better security)
    $u_id = mysqli_real_escape_string($conn, $u_id);
    $name = mysqli_real_escape_string($conn, $name);
    $date_of_birth = mysqli_real_escape_string($conn, $date_of_birth);
    $address = mysqli_real_escape_string($conn, $address);
    $email = mysqli_real_escape_string($conn, $email);
    $phone_number = mysqli_real_escape_string($conn, $phone_number);
    $enrollment_date = mysqli_real_escape_string($conn, $enrollment_date);
    $program = mysqli_real_escape_string($conn, $program);

    // File upload handling
    $targetDir = "./Resourse/students/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["add"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (adjust the size limit as needed)
    if ($_FILES["photo"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (you can add more if needed)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            // Insert the student's information into the database
            $insert_query = "INSERT INTO student_details (u_id, name, photo, date_of_birth, address, email, phone_number, enrollment_date, program) VALUES ('$u_id', '$name', '$targetFile', '$date_of_birth', '$address', '$email', '$phone_number', '$enrollment_date', '$program')";
            
            if ($conn->query($insert_query) === TRUE) {
                echo "Student added successfully!";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close the database connection
$conn->close();
?>
