<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Onboarding - Akalink</title>
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('/images/smanda.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        /* Container Styles */
        .container {
            max-width: 800px;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 3rem;
            color: orange;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        h1 span {
            color: #2b8deb;
        }

        p {
            font-size: 1.2rem;
            margin: 15px 0;
            color: #f0f0f0;
        }

        /* Button Styles */
        .btn {
            background-color: #2b8deb;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: bold;
            display: inline-block;
            margin-top: 25px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* Footer Styles */
        footer {
            margin-top: 30px;
            color: #ddd;
            font-size: 0.9rem;
        }

        footer a {
            color: #2b8deb;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                width: 90%;
            }

            h1 {
                font-size: 2.5rem;
            }

            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="/images/logo.jpg" alt="Logo Akalink" class="logo">

        <h1>SMA <span>Negeri 2</span> Bengkalis</h1>
        <p>
            Sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan berprestasi di segala bidang
            yang dapat bersaing di dunia internasional!
        </p>
        <a href="/login" class="btn">Get Started Login Admin</a>
        <a href="/loginguru" class="btn">Get Started Login Guru</a>

    </div>

    <footer>
        <p>Akalink hadir untuk mendukung kemajuan pendidikan.</p>
        <p>Dibuat dengan penuh cinta oleh tim Akalink.</p>
    </footer>
</body>

</html>