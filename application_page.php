<?php
include('config/db.php');

// Initialize the message variable
$message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data and store in the database
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $academicAchievements = $_POST['academicAchievements'];
    $employeeID = $_POST['employeeID'];

    // Insert data into the database
    $sql = "INSERT INTO hrm.applicants (FirstName, LastName, Email, Phone, Address, AcademicAchievements, employeeID) 
    VALUES ('$firstname', '$lastname', '$email', '$phone', '$address',  '$academicAchievements', '$employeeID')";

    if ($conn->query($sql) === TRUE) {
        $message = "Application submitted successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Application</title>
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
            min-height: 100vh; /* Ensure the body takes at least the full height of the viewport */
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 36px; /* Increased font size */
            margin-bottom: 20px; /* Added margin */
            font-family:  Georgia, serif; /* Different font */
        }

        p {
            color: #555;
            margin-bottom: 20px;
            text-align: center;
        }

        main {
            width: 100%;
            max-width: 800px; /* Adjust the max-width to your preference */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #333;
            font-size: 20px;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            margin: 0 auto; /* This centers the button horizontally */
            margin-top: 15px; /* Added margin-top */
        }

        button:hover {
            background-color: #45a049;
        }

        .message {
            color: green;
            margin-top: 10px;
            text-align: center;
            font-size: 30px;
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
    <main>
        <h1>Scholarship Application</h1>
        <p>Fill out the form below to apply for the scholarship:</p>

        <form method="post" action="">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="academicAchievements">Academic Achievements:</label>
            <textarea name="academicAchievements" rows="4" required></textarea>

            <label for="employeeID">Employee ID:</label>
            <input type="text" name="employeeID" required>

            <button type="submit">Submit Application</button>
        </form>

        <a href="dashboard.php"><button>Back to Dashboard</button></a>

        <div class="message"><?php echo $message; ?></div>
    </main>
</body>

</html>
