<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Halaman Minimalis</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            gap: 20px;
        }

        .btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-1 {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
        }

        .btn-2 {
            background: linear-gradient(135deg, #ff512f, #f09819);
        }

        .btn i {
            font-size: 18px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        <button class="btn btn-1">
            <i class="fa-solid fa-paper-plane"></i>
            Kirim
        </button>

        <button class="btn btn-2">
            <i class="fa-solid fa-heart"></i>
            Favorit
        </button>
    </div>

</body>
</html>
