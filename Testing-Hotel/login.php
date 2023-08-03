<?php
session_start();

// Cek apakah pengguna sudah login atau belum
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php'); // Redirect ke halaman dashboard jika sudah login
    exit();
}

// Cek apakah form login sudah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek validasi login
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirect ke halaman dashboard jika login sukses
        exit();
    } else {
        $error = 'Username atau password salah.';
    }
} else {
    // Jika form login belum disubmit, kosongkan inputan username dan password
    $username = '';
    $password = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            margin-top: 150px;
        }

        .login-form {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333333;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
            font-weight: bold;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333333;
        }

        .form-input:focus {
            outline: none;
            border-color: #4d90fe;
        }

        .submit-button {
            width: 100%;
            padding: 12px;
            background-color: #4d90fe;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-button:hover {
            background-color: #357ae8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" required class="form-input" value="<?php echo $username; ?>">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" required class="form-input" value="<?php echo $password; ?>">
                </div>

                <input type="submit" value="Login" class="submit-button">
            </form>
        </div>
    </div>
</body>
</html>
