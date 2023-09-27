<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>

.left input[type="text"],
        .left input[type="email"],
        .left input[type="password"] {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }

        .left .dob-label {
            display: block;
            text-align: left;
            margin-top: 15px;
        }

        .left input[type="date"] {
            width: 100%;
        }

        .left .confirm-password-label {
            display: block;
            text-align: left;
            margin-top: 15px;
        }

        .left .left-btns {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left .left-btns .signup-btn,
        .left .left-btns .clear {
            border: none;
            padding: 15px 20px;
            border-radius: 8px;
            background: #583672;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        }

        .left .left-btns .login-link {
            text-align: center;
            margin-top: 15px;
        }
        .login {
            height: 1000px;
            width: 100%;
            background: radial-gradient(#653d84, #332042);
            position: relative;
        }

        .login_box {
            width: 1050px;
            height: 600px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            border-radius: 10px;
            box-shadow: 1px 4px 22px -8px #0004;
            display: flex;
            overflow: hidden;
        }

        .login_box .left {
            width: 41%;
            height: 100%;
            padding: 25px 25px;

        }

        .login_box .right {
            width: 59%;
            height: 100%
        }

        .left .top_link a {
            color: #452A5A;
            font-weight: 400;
        }

        .left .top_link {
            height: 20px
        }

        .left .contact {
            display: flex;
            align-items: center;
            justify-content: center;
            align-self: center;
            height: 100%;
            width: 73%;
            margin: auto;
        }

        .left h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        .left input {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }

        .left {
            background: linear-gradient(-45deg, #dcd7e0, #fff);
        }

        .submit {
            border: none;
            padding: 15px 70px;
            border-radius: 8px;
            display: block;
            margin: auto;
            margin-top: 20px;
            background: #583672;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        }



        .right {
            color: #fff;
            position: relative;
        }

        .right .right-text {
            height: 100%;
            position: relative;
            transform: translate(0%, 45%);
        }

        .right-text h2 {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 500;
        }

        .right-text h5 {
            display: block;
            width: 100%;
            text-align: center;
            font-size: 19px;
            font-weight: 400;
        }

        .right .right-inductor {
            position: absolute;
            width: 70px;
            height: 7px;
            background: #fff0;
            left: 50%;
            bottom: 70px;
            transform: translate(-50%, 0%);
        }

        .top_link img {
            width: 28px;
            padding-right: 7px;
            margin-top: -3px;
        }

        .left input[type="text"],
        .left input[type="email"],
        .left input[type="password"] {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }

        .left .dob-label {
            display: block;
            text-align: left;
            margin-top: 15px;
        }

        .left input[type="date"] {
            width: 100%;
        }

        .left .confirm-password-label {
            display: block;
            text-align: left;
            margin-top: 15px;
        }

        .left .left-btns {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .left .left-btns .signup-btn,
        .left .left-btns .clear {
            border: none;
            padding: 15px 20px;
            border-radius: 8px;
            background: #583672;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
            box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        }

        .left .left-btns .login-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>



<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="top_link"><a href="index.php"><img
                            src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download"
                            alt="">Return home</a></div>
                <div class="contact">
                    <form action="" method="POST">
                        <h3>SIGNUP</h3>
                        <input type="text" placeholder="Full Name" name="name">
                        <input type="email" placeholder="Email Address" name="email">
                        <label class="dob-label">Date of Birth:</label>
                        <input type="date" name="dob">
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Confirm Password" name="confirm_password">
                        <button type="submit" class="submit">SIGNUP</button>
                        <button type="button" class="clear" style="border: none;">Clear</button>
                    </form>
                </div>
            </div>
            <div class="right">
                <img src="./Resourse/loginlogo.jpeg" alt="Image is not visible" width="100%" height="100%">
            </div>
        </div>
    </section>
</body>

</html>

<!-- PHP code starts here -->

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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    // Validate and sanitize user input
    $fullName = mysqli_real_escape_string($conn, $fullName);
    $email = mysqli_real_escape_string($conn, $email);
    $dob = mysqli_real_escape_string($conn, $dob);

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if the passwords match
    if ($password !== $confirmPassword) {
        echo '<script>alert("Password and Confirm Password do not match!");</script>';
    } else {
        // Insert the new user into the database
        $query = "INSERT INTO users (full_name, email, dob, password) VALUES ('$fullName', '$email', '$dob', '$hashedPassword')";

        if ($conn->query($query) === TRUE) {
            echo '<script>alert("Registration successful!");</script>';
        } else {
            echo '<script>alert("Error: ' . $conn->error . '");</script>';
        }
    }

    // Close the database connection
    $conn->close();
}
?>
