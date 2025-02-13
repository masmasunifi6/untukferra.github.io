<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teruntuk Ferra Cantik</title>
    <style>
        body {
            background-color: pink;
            text-align: center;
            font-family: Arial, sans-serif;
            color: #d63384;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background: #fff;
            padding: 20px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            animation: fadeIn 2s;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .button {
            background-color: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #ff1493;
        }
        #message {
            display: none;
            margin-top: 10px;
            font-weight: bold;
            animation: fadeIn 1s;
        }
        .whatsapp-link {
            display: block;
            margin-top: 10px;
            color: green;
            font-weight: bold;
            text-decoration: none;
        }
        .whatsapp-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Selamat Hari Kasih Sayang Cintaku! ❤️</h1>
            <p>Ada coklat buat kamu sayaang...</p>
            <button class="button" onclick="showMessage()">Klik untuk ambil!</button>
            <p id="message">Eh ternyata habis, silahkan hubungi <a class="whatsapp-link" href="https://wa.me/6288216473898">pacarmu</a>! 🤣</p>
            
        </div>
    </div>

    <script>
        function showMessage() {
            document.getElementById('message').style.display = 'block';
        }
    </script>
</body>
</html>
