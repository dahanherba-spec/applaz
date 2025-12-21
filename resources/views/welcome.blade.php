<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LAZAPP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f6f8;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Card */
        .box {
            background: white;
            width: 100%;
            max-width: 360px; /* batas lebar di layar besar */
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
            text-align: center;
        }

        /* Title */
        .title {
            font-size: 22px;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
        }

        /* Button container */
        .container {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        /* Button */
        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 16px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            width: 100%;
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
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        /* Responsive untuk layar besar */
        @media (min-width: 768px) {
            .box {
                padding: 50px 40px;
            }

            .title {
                font-size: 30px;
            }

            .btn {
                font-size: 15px;
            }
        }
    </style>
    <style>    
        .judul-gradient {
            font-family: 'Poppins', sans-serif;
			font-size: clamp(33px, 6vw, 50px);
            font-weight: 800;
            text-align: center;
            text-shadow: 0 2px 10px rgba(0,0,0,0.15);

            /* Gradient warna */
            background: linear-gradient(
                270deg,
                #2563eb,
                #7c3aed,
                #db2777,
                #f97316
            );
            background-size: 400% 400%;

            /* Agar gradient tampil di teks */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            /* Animasi gradient */
            animation: gradientGerak 6s ease infinite;
        }

        @keyframes gradientGerak {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    
    <body>
    <div class="box">        
        <h1 class="judul-gradient">WEBAPP LAZNAS</h1>
        <br/><br/>
        <div class="container">
            <button type="button" class="btn btn-1" onclick="window.location.href='http://localhost:8000/fund';">
                <i class="fa-solid fa-users"></i>
                CRM/FUNDRAISER
            </button>
            <button type="button" class="btn btn-2" onclick="window.location.href='http://localhost:8000/fin';">
                <i class="fa-solid fa-calculator"></i>
                KEUANGAN
            </button>
        </div>
    </div>    
    </body>
</html>                
