<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HRM PROJECT</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #98FB98;
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
        }

        form {
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            color: #98F898;
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
    <h1>Login</h1>

    <?php
    include('includes/header.php');
    include('config/db.php');
    session_start();

    // Check if the user is already logged in
    if(isset($_SESSION['user_id'])) {
        header("Location: dashboard.php");
        exit();
    }

    // Check login credentials
    if(isset($_POST['submit'])) {
        // Check if the form fields are set before using them
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("SELECT idregistration FROM registration WHERE username=? AND password=?");
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $stmt->store_result();

            if ($stmt->num_rows == 1) {
                $stmt->bind_result($user_id);
                $stmt->fetch();

                $_SESSION['user_id'] = $user_id;
                header("Location: dashboard.php");
                exit();
            } else {
                echo "Invalid username or password. Please try again.";
            }
        } else {
            echo "Error executing the query.";
        }

        $stmt->close();
    }
    ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="submit" value="Login">
    </form>

    <a href="index.php"><button>Back to Home</button></a>
</body>

</html>
