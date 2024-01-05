<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM Scholarship Page</title>
    <style>
         body {
            background-color: #98f898;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
        }

        .scholarship-container {
            text-align: center;
            max-width: 600px;
        }
        
        .scholarship {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
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
    $scholarships = [
        [
            'title' => 'Merit Scholarship',
            'description' => 'This scholarship is awarded based on academic performance and achievements.',
            'image' => '1.jpg',
        ],
        [
            'title' => 'Need-Based Scholarship',
            'description' => 'This scholarship is awarded based on financial need.',
            'image' => 'need_based_scholarship.jpg',
        ],
        [
            'title' => 'Excellence Scholarship',
            'description' => 'This scholarship is awarded for excellence in leadership and community service.',
            'image' => 'sample.jpg',
        ],
    ];
    ?>

    <h1>HRM Scholarship Page</h1>
    <p>Explore the various scholarships offered in HRM:</p>

    <?php foreach ($scholarships as $scholarship) : ?>
        <div class="scholarship">
            <h2><?php echo $scholarship['title']; ?></h2>
            <p><?php echo $scholarship['description']; ?></p>
            <img src="images/<?php echo $scholarship['image']; ?>" alt="<?php echo $scholarship['title']; ?>" width="300">
        </div>
    <?php endforeach; ?>

    <a href="dashboard.php">Back to Dashboard</a>
</body>

</html>
