<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            animation: slideIn 1s ease; /* Use the slideIn animation */
        }

        a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
            display: inline-block; /* Make the buttons inline */
            width: 200px; /* Set a fixed width for uniformity */
            text-align: center; /* Center the text within the button */
            padding: 10px; /* Adjust padding for spacing */
        }

        a:hover {
            text-decoration: underline;
        }

        a, a:visited {
            border: 2px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #333;
            color: white;
        }

        /* Define the keyframe animation */
        @keyframes slideIn {
            from {
                transform: translateY(-50px); /* Start position above */
                opacity: 0;
            }
            to {
                transform: translateY(0); /* End position */
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <h1>Welcome to Scholarship and Career Development!</h1>

    <a href="login.php">Login</a>

    <a href="register.php">Register</a>
</body>

</html>
