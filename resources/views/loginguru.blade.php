<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Guru - Akalink</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Gaya global */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 90vh;
            background-image: url('/images/smanda.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 350px;
            padding: 30px;
            text-align: center;
            z-index: 1;
        }

        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #2b8deb;
        }

        p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-input:focus {
            border-color: #2b8deb;
            outline: none;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .form-input {
            padding-right: 40px;
        }

        .password-wrapper .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #555;
        }

        .toggle-password:hover {
            color: #2b8deb;
        }

        .btn {
            background-color: #2b8deb;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            width: 100%;
            display: block;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .form-container {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 0.9rem;
            text-align: left;
            margin-bottom: 5px;
        }

        .register-link {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .register-link a {
            color: #2b8deb;
            text-decoration: none;
            font-weight: bold;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <img src="/images/logo.jpg" alt="Akalink Logo">
        <h1>Login Guru</h1>
        <p>SIM - Akademik</p>

        <form action="/loginguru/submit" method="post" class="form-container">
            {{ csrf_field() }}
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-input" required>

            <label for="password">Password</label>
            <div class="password-wrapper">
                <input type="password" id="password" name="password" class="form-input" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>

            <button type="submit" class="btn">Login</button><br>

            <h4 class="register-link">Belum Punya Akun? <a href="/registrasi">Buat Akun</a></h4>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.textContent = '👁️‍🗨️';
            } else {
                passwordField.type = 'password';
                toggleIcon.textContent = '👁️';
            }
        }
    </script>
</body>

</html>
