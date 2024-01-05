<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM Project Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #98f898;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            font-size: 36px; /* Increased font size */
            margin-bottom: 20px; /* Added margin */
            font-family:  Georgia, serif; /* Different font */
        }

        h3 {
            color: #333;
            margin-bottom: 20px; /* Added margin */
            font-family:  Georgia, serif; /* Different font */
        }

        .dashboard-box {
            border: 2px solid #333;
            border-radius: 8px;
            padding: 40px; /* Increased padding */
            margin-top: 40px; /* Increased margin */
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px; /* Increased padding */
            margin: 10px; /* Increased margin */
            cursor: pointer;
            border-radius: 8px;
            width: 300px; /* Increased width */
            font-size: 16px; /* Increased font size */
        }

        button:hover {
            background-color: #45a049;
        }

        a.logout-link {
            text-decoration: none;
            color: #333;
            margin-top: 20px;
            font-size: 18px; /* Increased font size */
            padding: 10px 20px; /* Added padding */
            border: 2px solid #333; /* Added border */
            border-radius: 8px; /* Added border radius */
        }

        a.logout-link:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <?php
    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    ?>

    <h1>Scholarship and Career Development Dashboard</h1>
    <h3>Welcome, User!</h3>

    <!-- Bordered box for the dashboard content -->
    <div class="dashboard-box">
        <!-- Container for buttons -->
        <div class="button-container">
            <!-- Add buttons for scholarship page, career program page, and application page -->
            <button onclick="window.location.href='scholarship.php'">SCHOLARSHIP</button>
            <button onclick="window.location.href='career_program.php'">CAREER PROGRAMS</button>
            <button onclick="window.location.href='application_page.php'">SCHOLARSHIP APPLICATION</button>
            <button onclick="window.location.href='enroll_program.php'">PROGRAM ENROLLMENT</button>
        </div>
    </div>

    <!-- Logout link -->
    <a href="logout.php" class="logout-link">Logout</a>
</body>

</html>
