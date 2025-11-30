<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Brillante ✨</title>
    <style>
        /* --- RESET --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top left, #1e1e2f, #09090f);
            font-family: 'Poppins', sans-serif;
            color: #fff;
            overflow: hidden;
        }

        .glow-card {
            background: rgba(255, 255, 255, 0.06);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(0, 255, 255, 0.2);
            text-align: center;
            position: relative;
            animation: fadeIn 1.2s ease-out;
        }

        .glow-card::before {
            content: "";
            position: absolute;
            inset: -3px;
            border-radius: 22px;
            background: linear-gradient(45deg, #00ffff, #6c5ce7, #ff00ff);
            z-index: -1;
            filter: blur(15px);
            animation: glow 4s linear infinite;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes glow {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }
        }

        h1 {
            font-size: 32px;
            margin-bottom: 15px;
            text-shadow: 0 0 8px #00ffff;
        }

        p {
            font-size: 16px;
            opacity: 0.85;
            margin-bottom: 30px;
        }

        button {
            padding: 15px 35px;
            background: linear-gradient(90deg, #00ffff, #6c5ce7, #ff00ff);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-size: 300%;
            animation: gradientMove 5s infinite;
        }

        @keyframes gradientMove {
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

        button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px #00ffff;
        }

        .message {
            margin-top: 20px;
            font-size: 14px;
            opacity: 0.9;
            text-shadow: 0 0 10px #6c5ce7;
        }
    </style>
</head>

<body>
    <div class="glow-card">
        <h1>✨ Interface Brillante</h1>
        <p>Une page éclatante, moderne et animée avec des effets néon.</p>
        <button onclick="afficher()">Active la magie ⚡</button>
        <div class="message" id="message"></div>
    </div>

    <script>
        function afficher() {
            const msg = document.getElementById('message');
            msg.textContent = "🌟 Votre interface est maintenant illuminée !";
            msg.style.color = '#00ffff';
            msg.style.transition = '0.5s';
        }
    </script>
</body>

</html>