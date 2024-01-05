<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Program Enrollment</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #98f898;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    include('config/db.php');

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process form data and store in the database
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $selectedProgram = $_POST['program'];

        // Insert data into the database
        $sql = "INSERT INTO program_enrollments (name, email, phone, program) VALUES ('$name', '$email', '$phone', '$selectedProgram')";

        if ($conn->query($sql) === TRUE) {
            echo "Enrollment submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <h1>Career Program Enrollment</h1>
    <p>Fill out the form below to enroll in a career development program:</p>
    
    <form method="post" action="">
        <label for="name">Full Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>

        <label for="program">Select a Program:</label>
        <select name="program" required>
            <option value="leadership">Leadership Development Program</option>
            <option value="internship">Internship Program</option>
            <!-- Add more program options as needed -->
        </select>

        <button type="submit">Submit Enrollment</button>
    </form>
    <br>
        <a href="dashboard.php"><button>Back to Dashboard</button></a>
</body>
    

</html>
