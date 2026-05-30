<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun Aulia Saridevi!</title>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3b82f6;
            --secondary-color: #60a5fa;
            --bg-color: #f0fdf4;
            --text-color: #1e293b;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            overflow-x: hidden;
            text-align: center;
            position: relative;
            min-height: 100vh;
        }

        /* Background Animations */
        .balloons-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }

        .balloon {
            position: absolute;
            bottom: -100px;
            border-radius: 50% 50% 50% 50% / 40% 40% 60% 60%;
            animation: float up linear infinite;
            opacity: 0.7;
        }

        .balloon::after {
            content: "🎈";
            position: absolute;
            bottom: -10px;
            left: 35%;
            font-size: 10px;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0.7;
            }
            100% {
                transform: translateY(-120vh) rotate(20deg);
                opacity: 0;
            }
        }

        #confetti-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 100;
        }

        /* Container & Layout */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 10;
        }

        header {
            margin-bottom: 30px;
        }

        header h1 {
            font-family: 'Fredoka One', cursive;
            color: var(--primary-color);
            font-size: 2.5rem;
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .subtitle {
            font-family: 'Pacifico', cursive;
            color: #f59e0b;
            font-size: 1.3rem;
            margin-top: 10px;
        }

        /* Card Sections */
        .apology-card, .gift-section, .gallery-section {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 20px;
            margin: 25px 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .apology-card h2 {
            font-family: 'Fredoka One', cursive;
            color: #ef4444;
            margin-bottom: 12px;
        }

        .apology-card p {
            line-height: 1.6;
            font-size: 1.05rem;
        }

        /* Gallery */
        .gallery {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .gallery-item {
            flex: 1;
            min-width: 140px;
            max-width: 160px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background: #e2e8f0;
            aspect-ratio: 1 / 1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Gift Interaction */
        .gift-box {
            width: 120px;
            height: 120px;
            background: #ef4444;
            margin: 20px auto;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 20px rgba(239, 68, 68, 0.3);
            position: relative;
        }

        .gift-box:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .gift-box span {
            font-size: 3.5rem;
            user-select: none;
        }

        .instruction {
            font-weight: bold;
            color: #64748b;
            margin-top: 10px;
            font-size: 0.9rem;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 1; }
        }

        .hidden-message {
            display: none;
            background: #dbeafe;
            padding: 25px;
            border-radius: 15px;
            border: 2px dashed #3b82f6;
            margin-top: 15px;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hidden-message h3 {
            font-family: 'Fredoka One', cursive;
            color: #1e40af;
            margin-bottom: 10px;
            font-size: 1.4rem;
        }

        .hidden-message p {
            line-height: 1.6;
            color: #1e3a8a;
        }

        footer {
            margin-top: 40px;
            font-size: 0.85rem;
            color: #94a3b8;
            line-height: 1.5;
        }
    </style>
</head>
<body>

    <div class="balloons-container" id="balloons"></div>
    <canvas id="confetti-canvas"></canvas>

    <div class="container">
        <header>
            <h1>Selamat Ulang Tahun<br>Aulia Saridevi!</h1>
            <div class="subtitle">✨ Spesial Tanggal 25 ✨</div>
        </header>

        <section class="apology-card">
            <h2>Maaf Telat Ya... 🥺</h2>
            <p>
                Gue tau ucapannya telat banget, mungkin telat beberapa jam atau bahkan hari. 
                Maaf ya Aulia! Tapi bukan berarti gue lupa kok. Hoki kamu tetap panjang tahun ini, 
                dan doa terbaik gue buat kamu tetap terkirim walau sedikit molor. 
                Lebih baik terlambat daripada tidak sama sekali kan? Hehe.
            </p>
        </section>

        <section class="gallery-section">
            <h2 style="font-family: 'Fredoka One'; color: var(--primary-color); margin-bottom: 20px;">Galeri Cantik Aulia</h2>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="https://picsum.photos/200/200?random=1" alt="Aulia Cantik 1">
                </div>
                <div class="gallery-item">
                    <img src="https://picsum.photos/200/200?random=2" alt="Aulia Cantik 2">
                </div>
                <div class="gallery-item">
                    <img src="https://picsum.photos/200/200?random=3" alt="Aulia Cantik 3">
                </div>
            </div>
        </section>

        <section class="gift-section">
            <h2 style="font-family: 'Fredoka One'; color: var(--primary-color); margin-bottom: 20px;">Ada Sesuatu Buat Kamu</h2>
            
            <div class="gift-box" id="giftBtn" onclick="openGift()">
                <span>🎁</span>
            </div>
            
            <p class="instruction">Ketuk kadonya untuk buka!</p>

            <div class="hidden-message" id="hiddenMessage">
                <h3>Happy Birthday Aulia! 🎉</h3>
                <p>
                    Semoga di tanggal 25 yang spesial ini, Aulia makin cantik, makin sukses, 
                    rejekinya nambah terus, dan dilancarkan segala urusannya.
                    Tetap jadi orang yang hebat dan menyenangkan ya!
                    <br><br>
                    <strong>Sekali lagi, Maaf Telat dan Happy Birthday! 🥳❤️</strong>
                </p>
            </div>
        </section>

        <footer>
            <p>Dibuat khusus untuk <strong>Aulia Saridevi</strong>.<br>With ❤️ and apologies.</p>
        </footer>
    </div>

    <script>
        // 1. Generate Floating Balloons
        const balloonsContainer = document.getElementById('balloons');
        const colors = ['#3b82f6', '#60a5fa', '#93c5fd', '#ffffff', '#fcd34d'];

        function createBalloon() {
            const balloon = document.createElement('div');
            balloon.classList.add('balloon');
            
            const bg = colors[Math.floor(Math.random() * colors.length)];
            const left = Math.floor(Math.random() * 100);
            const animDuration = Math.random() * 6 + 8; // Sedikit dipercepat jalannya
            const size = Math.random() * 30 + 20;

            balloon.style.background = bg;
            balloon.style.left = left + '%';
            balloon.style.width = size + 'px';
            balloon.style.height = size * 1.2 + 'px';
            balloon.style.animationDuration = animDuration + 's';

            balloonsContainer.appendChild(balloon);

            setTimeout(() => {
                balloon.remove();
            }, animDuration * 1000);
        }

        // Loop balon berjalan otomatis
        setInterval(createBalloon, 1500);
        for(let i=0; i<8; i++) createBalloon();

        // 2. Gift Interaction
        function openGift() {
            const giftBtn = document.getElementById('giftBtn');
            const message = document.getElementById('hiddenMessage');
            const instruction = document.querySelector('.instruction');

            giftBtn.style.display = 'none';
            instruction.style.display = 'none';
            message.style.display = 'block';

            fireConfetti();
        }

        // 3. Simple Confetti Script
        const canvas = document.getElementById('confetti-canvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let confettiParticles = [];

        function fireConfetti() {
            for (let i = 0; i < 150; i++) {
                confettiParticles.push({
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 2,
                    w: Math.random() * 10 + 5,
                    h: Math.random() * 10 + 5,
                    color: colors[Math.floor(Math.random() * colors.length)],
                    speedX: Math.random() * 12 - 6,
                    speedY: Math.random() * -15 - 5,
                    gravity: 0.4,
                    rotation: Math.random() * 360,
                    rotationSpeed: Math.random() * 10 - 5
                });
            }
            requestAnimationFrame(updateConfetti);
        }

        function updateConfetti() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            confettiParticles.forEach((p, index) => {
                p.x += p.speedX;
                p.y += p.speedY;
                p.speedY += p.gravity;
                p.rotation += p.rotationSpeed;

                ctx.save();
                ctx.translate(p.x, p.y);
                ctx.rotate(p.rotation * Math.PI / 180);
                ctx.fillStyle = p.color;
                ctx.fillRect(-p.w / 2, -p.h / 2, p.w, p.h);
                ctx.restore();

                if (p.y > canvas.height) {
                    confettiParticles.splice(index, 1);
                }
            });

            if (confettiParticles.length > 0) {
                requestAnimationFrame(updateConfetti);
            }
        }

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>
</html>