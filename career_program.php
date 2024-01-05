<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM Career Programs</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #98f898;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: #555;
            margin-bottom: 20px;
            text-align: center;
        }

        .career-program {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
            height: 200px; /* Set a fixed height for uniformity */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 15px; /* Adjusted margin for better spacing */
            color: #555;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    // Sample career program data (you can fetch this from a database)
    $careerPrograms = [
        [
            'title' => 'Internship Program',
            'description' => 'Gain practical experience through our internship program.',
            'image' => 'internship_program.jpg',
        ],
        [
            'title' => 'Leadership Development Program',
            'description' => 'Develop leadership skills and advance your career.',
            'image' => 'leadership_program.jpg',
        ],
        [
            'title' => 'Technical Training Program',
            'description' => 'Enhance your technical skills with our specialized training program.',
            'image' => 'technical_training.jpg',
        ],
        [
            'title' => 'Project Management Certification',
            'description' => 'Earn a certification in project management and boost your project handling capabilities.',
            'image' => 'project_management_certification.jpg',
        ],
        // Add more career program entries as needed
    ];
    ?>

    <h1>HRM Career Programs</h1>
    <p>Explore the various career development programs offered in HRM:</p>

    <?php foreach ($careerPrograms as $program) : ?>
        <div class="career-program">
            <h2><?php echo $program['title']; ?></h2>
            <p><?php echo $program['description']; ?></p>
            <img src="images/<?php echo $program['image']; ?>" alt="<?php echo $program['title']; ?>" width="200">
        </div>
    <?php endforeach; ?>

    <a href="dashboard.php">Back to Dashboard</a>

</body>

</html>
