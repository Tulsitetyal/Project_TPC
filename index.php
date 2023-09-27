<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Your Project - Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('./Resourse/lpu1.jpg'); /* Replace 'background.jpg' with your image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        header {
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background for header */
            padding: 20px;
            color: #fff;
        }

        .hero {
            text-align: center;
            padding: 75px 0;
            color: #fff;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
        }

        .cta-button {
            margin: 0 20px;
            padding: 10px 20px;
            background-color: #007bff; /* Customize the button color */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        .cta-button:hover {
            background-color: #0056b3; /* Change the color on hover */
        }

        .project-description {
            background-color: #fff;
            padding: 40px;
            text-align: center;
        }

       

    </style>
</head>
<body>
    

    <main>
        <section class="hero">
            <h1>Welcome to Your Project</h1>
            <p>About Your Project - A brief and engaging description goes here.</p>
            <br>
            <div class="cta-buttons">
                <a href="login.php" class="cta-button">Login</a>
                <a href="signup.php" class="cta-button">Signup</a>
                
            </div>
            <br>
        </section>
        <br><br><br>
        
        <div style="
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100%;"> 
            <a href="team.php" class="cta-button">Our Developer Team</a>
        </div>
        <section class="project-description">
            <h2>About Our Project</h2>
            <p>
                Provide detailed information about your project here. Explain its purpose, features, and benefits. You can use this space to engage and inform your visitors.
            </p>
        </section>

    </main>

</body>
</html>
