<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Guru</title>
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
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .registrasi-container {
            text-align: center;
            z-index: 1;
            /* Agar tetap di atas gambar */
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
            width: 300%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-input:focus {
            border-color: #2b8deb;
            outline: none;
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
    </style>
</head>

<body>
    <div class="row justify-content-center">
        <form action="/registrasi/submit" method="POST" class="form-container">
            @csrf
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" class="form-input" required>

            <label for="nip">NIP</label>
            <input type="text" id="nip" name="nip" class="form-input" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-input" required>

            <label for="jeniskelamin">Jenis Kelamin</label>
            <input type="text" id="jeniskelamin" name="jeniskelamin" class="form-input" required>

            <label for="username">Username</label>
            <input type="username" id="username" name="username" class="form-input" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-input" required>

            <button type="submit" class="btn">Buat Akun</button>
        </form>
    </div>
</body>

</html>