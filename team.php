<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        h3,
        p {
            margin: 0;
            padding: 0;
        }

        /* Style the header */
        header {
            background-color: #0074D9;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Style each team member section */
        .team-members,
        .mentors {
            text-align: center;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        /* Style team member images */
        .team-member img {
            border-radius: 50%;
            max-width: 100%;
        }

        /* Style team member names and positions */
        .team-member h3 {
            margin: 10px 0;
        }

        .team-member p {
            color: #555;
            font-size: 14px;
        }

        /* Flexbox for horizontal layout */
        .team-member-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        /* Each team member takes equal space */
        .team-member {
            flex: 1;
            margin: 10px;
        }
       
    </style>
</head>

<body>
    <header>
        <h1>Our Amazing Team</h1>
    </header>

    <div class="container-fluid">

    <!-- mentor -->
    
    <section class="mentors">
        <h2>Mentors</h2>
        <div class="team-member">
            <img src="mentor1.jpg" alt="Mentor 1">
            <h3>Mr. Sarabjit Kumar</h3>
            <p>Lead Mentor</p>
            <p>Head of TPC</p>
        </div>
        
    </section>

    <!-- team member -->
    <section class="team-members">
        <h2>Team Members</h2>
        <div class="team-member-container">
            <div class="team-member">
                <img src="" alt="Team Member 1">
                <h3>Aman Singh</h3>
                <p>MCA Student</p>
                <p>Batch 2024</p>
            </div>
            
            <div class="team-member">
                <img src="./Resourse/team/yogesh.png" alt="Team Member 1">
                <h3>Yogesh</h3>
                <p>MCA Student</p>
                <p>Batch 2024</p>
            </div>
            
            <div class="team-member">
                <img src="./Resourse/team/tulsi.jpeg" alt="Team Member 1" height="150px" width="120px">
                <h3>Tulsi Tetyal</h3>
                <p>MCA Student</p>
                <p>Batch 2024</p>
            </div>
        </div>
    </section>
</div>

</body>

</html>
