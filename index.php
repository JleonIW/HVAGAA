<?php
// Obtener el puerto asignado por Railway (o usar 8000 como predeterminado)
$port = getenv("PORT") ?: 8000;
$host = "0.0.0.0"; // Permitir acceso desde cualquier IP

echo "Servidor corriendo en http://$host:$port";

// Aquí puedes seguir con tu lógica de la aplicación
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Serás mi San Valentín?</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #ffccdc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 400px;
        }
        .gif {
            width: 100%;
            max-width: 300px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 20px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 10px;
            width: 100%;
            max-width: 200px;
            transition: all 0.2s ease;
        }
        .btn-yes {
            background-color: #ff4081;
            color: white;
        }
        .btn-no {
            background-color: #b0bec5;
            color: white;
        }
        .heart {
            position: absolute;
            color: red;
            font-size: 20px;
            opacity: 0.8;
            animation: float 4s linear infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
            100% {
                transform: translateY(-100vh);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¿Serás mi San Valentín?</h1>
        <img class="gif" id="gifImage" src="https://media.giphy.com/media/e0qWfWDuFDyaGM1GkP/giphy.gif?cid=82a1493bdijs5x137iwea9ren0t9q3ar716efta4i877lggf&ep=v1_gifs_trending&rid=giphy.gif&ct=g" alt="IloveU">
        <br>
        <button class="btn btn-yes" onclick="window.location.href='agradecimiento.php'">Sí</button>
        <button class="btn btn-no" onclick="shrinkButton(this)">No</button>
    </div>

    <script>
        const gifs = [
            "https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExZ3hzbDd6YWx4eTI3MGIwZWtrc2Z2cmt0NXVzMzM3MW5nc3dqMGd0aiZlcD12MV9naWZzX3RyZW5kaW5nJmN0PWc/eXaVgi4OBIg66iQZWx/giphy.gif",
            "https://media.giphy.com/media/Gpqk76tiVKjn2/giphy.gif?cid=790b7611gxsl7zalxy270b0ekksfvrkt5us3371ngswj0gtj&ep=v1_gifs_trending&rid=giphy.gif&ct=g",
            "https://media.giphy.com/media/ha6vsupXjJVMZ4WJsT/giphy.gif?cid=82a1493buicply07ssak3q3y3ide9k37xtyaz3cgx9kd9vml&ep=v1_gifs_trending&rid=giphy.gif&ct=g",
            "https://media.giphy.com/media/TPOfHCXLelay1SPLtA/giphy.gif?cid=82a1493bdijs5x137iwea9ren0t9q3ar716efta4i877lggf&ep=v1_gifs_trending&rid=giphy.gif&ct=g"
        ];
        
        function changeGif() {
            const gifElement = document.getElementById("gifImage");
            const randomIndex = Math.floor(Math.random() * gifs.length);
            gifElement.src = gifs[randomIndex];
        }
        
        function shrinkButton(btn) {
            let currentSize = parseFloat(window.getComputedStyle(btn).fontSize);
            let currentPadding = parseFloat(window.getComputedStyle(btn).padding);
            
            if (currentSize > 5) {
                btn.style.fontSize = (currentSize - 2) + "px";
                btn.style.padding = (currentPadding - 1) + "px";
            } else {
                btn.style.display = "none";
            }
            changeGif();
        }

        function createHeart() {
            const heart = document.createElement("div");
            heart.classList.add("heart");
            heart.innerHTML = "❤️";
            document.body.appendChild(heart);
            
            const randomX = Math.random() * window.innerWidth;
            heart.style.left = `${randomX}px`;
            heart.style.bottom = "0px";
            heart.style.fontSize = `${Math.random() * 30 + 10}px`;
            
            setTimeout(() => {
                heart.remove();
            }, 4000);
        }
        
        setInterval(createHeart, 500);
    </script>
</body>
</html>
