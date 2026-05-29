<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Ulang Tahun Aulia Saridevi!</title>
    <!-- Mengambil Font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    
    <style>
        :root {
            /* Palette Warna Blue Sky */
            --primary-color: #3b82f6;   /* Biru Langit Utama */
            --secondary-color: #60a5fa; /* Biru Muda */
            --accent-color: #f59e0b;    /* Kuning Matahari */
            --bg-color: #eff6ff;        /* Latar Belakang Sangat Muda */
            --text-color: #1e3a8a;      /* Biru Gelap untuk Teks */
            --white: #ffffff;
            --shadow: 0 10px 30px rgba(59, 130, 246, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            /* Gradasi background seperti langit */
            background: linear-gradient(180deg, #dbeafe 0%, #eff6ff 100%);
            color: var(--text-color);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* --- Animations --- */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        @keyframes popIn {
            0% { transform: scale(0); opacity: 0; }
            80% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- Background Decorations (Balloons) --- */
        .balloons-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .balloon {
            position: absolute;
            bottom: -100px;
            width: 50px;
            height: 60px;
            background-color: var(--primary-color);
            border-radius: 50%;
            opacity: 0.8;
            animation: floatUp 15s linear infinite;
        }

        .balloon::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 40px;
            background: rgba(0,0,0,0.2);
        }

        @keyframes floatUp {
            0% { transform: translateY(0) rotate(0deg); opacity: 0; }
            10% { opacity: 0.8; }
            100% { transform: translateY(-120vh) rotate(360deg); opacity: 0; }
        }

        /* --- Layout --- */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        /* --- Hero Section --- */
        header {
            padding: 60px 0 20px 0;
            animation: fadeIn 1s ease-out;
        }

        h1 {
            font-family: 'Pacifico', cursive;
            font-size: 3rem;
            /* Gradasi Teks */
            background: -webkit-linear-gradient(#2563eb, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .subtitle {
            font-size: 1.3rem;
            color: #2563eb;
            background: rgba(255,255,255,0.95);
            display: inline-block;
            padding: 10px 25px;
            border-radius: 50px;
            box-shadow: var(--shadow);
            transform: rotate(-2deg);
            border: 2px solid #bfdbfe;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* --- Apology Section --- */
        .apology-card {
            background: var(--white);
            padding: 30px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin: 40px 0;
            border: 2px dashed #93c5fd; /* Garis putus-putus biru muda */
            animation: fadeIn 1.5s ease-out;
        }

        .apology-card h2 {
            font-family: 'Fredoka One', cursive;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .apology-card p {
            font-size: 1.1rem;
            color: #475569;
        }

        /* --- Gallery Section --- */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
        }

        .gallery-item {
            flex: 1 1 200px; /* Flex grow, shrink, basis */
            max-width: 300px;
        }

        .gallery img {
            width: 100%;
            height: 300px; /* Memperpanjang tinggi agar foto portrait terlihat bagus */
            object-fit: cover;
            border-radius: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 5px solid var(--white);
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.03) rotate(1deg);
            z-index: 2;
            box-shadow: 0 15px 30px rgba(59, 130, 246, 0.5);
        }

        /* --- Gift Section --- */
        .gift-section {
            padding: 50px 0;
            perspective: 1000px;
        }

        .gift-box {
            width: 150px;
            height: 150px;
            /* Kotak Kado Biru */
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            margin: 0 auto 30px;
            position: relative;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: 0 15px 35px rgba(37, 99, 235, 0.3);
            transition: transform 0.3s;
            animation: float 3s infinite ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 10;
        }

        .gift-box::before { /* Tutup Kado Kuning */
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 30px;
            background: var(--accent-color);
            border-radius: 10px 10px 0 0;
        }

        .gift-box::after { /* Pita Kuning */
            content: '';
            position: absolute;
            width: 30px;
            height: 100%;
            background: var(--accent-color);
            left: 50%;
            transform: translateX(-50%);
        }

        .gift-box:hover {
            transform: scale(1.1);
        }

        .instruction {
            font-weight: bold;
            color: var(--primary-color);
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Hidden Message */
        .hidden-message {
            display: none;
            background: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin-top: 20px;
            animation: popIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid #bfdbfe;
        }

        .hidden-message h3 {
            font-family: 'Fredoka One', cursive;
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        /* --- Footer --- */
        footer {
            margin-top: 60px;
            padding: 20px;
            font-size: 0.9rem;
            color: #64748b;
        }

        footer strong {
            color: var(--primary-color);
        }

        /* --- Confetti Canvas --- */
        #confetti-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 999;
        }

        /* Responsive */
        @media (max-width: 600px) {
            h1 { font-size: 2.2rem; }
            .container { padding: 15px; }
            .gallery img { height: 250px; }
        }
    </style>
</head>
<body>

    <!-- Background Animations -->
    <div class="balloons-container" id="balloons"></div>
    <canvas id="confetti-canvas"></canvas>

    <div class="container">
        <!-- Hero Section -->
        <header>
            <h1>Selamat Ulang Tahun<br>Aulia Saridevi!</h1>
            <div class="subtitle">✨ Spesial Tanggal 25 ✨</div>
        </header>

        <!-- Apology Section -->
        <section class="apology-card">
            <h2>Maaf Telat Ya... 🥺</h2>
            <p>
                Gue tau ucapannya telat banget, mungkin telat beberapa jam atau bahkan hari. 
                Maaf ya Aulia! Tapi bukan berarti gue lupa kok. Hoki kamu tetap panjang tahun ini, 
                dan doa terbaik gue buat kamu tetap terkirim walau sedikit molor. 
                Lebih baik terlambat daripada tidak sama sekali kan? Hehe.
            </p>
        </section>

        <!-- Photo Gallery (Foto Asli dari User) -->
        <section>
            <h2 style="font-family: 'Fredoka One'; color: var(--primary-color); margin-bottom: 20px;">Galeri Cantik Aulia</h2>
            <div class="gallery">
                <!-- Foto 1 -->
                <div class="gallery-item">
                    <img src="https://z-cdn-media.chatglm.cn/files/16f94563-ec09-4fbb-a02d-bb10c9ee5453.png?auth_key=1880060287-f8e7f71822244e0ba2277f0ca35b3bf7-0-9adf39db86c9515bf6a96eb3d9cb954e" alt="Aulia Cantik 1">
                </div>
                <!-- Foto 2 -->
    
                <!-- Foto 3 -->
                <div class="gallery-item">
                    <img src="https://z-cdn-media.chatglm.cn/files/1cf7425d-93ac-4597-b35b-b41bf0927bba.png?auth_key=1880060287-68dd9b2a4e124d9f858b7b25e597fcab-0-6b258a059b1d67f7e9b6a6296f0eecc4" alt="Aulia Cantik 3">
                </div>
            </div>
        </section>

        <!-- Interactive Gift Section -->
        <section class="gift-section">
            <h2 style="font-family: 'Fredoka One'; color: var(--primary-color); margin-bottom: 20px;">Ada Sesuatu Buat Kamu</h2>
            
            <div class="gift-box" id="giftBtn" onclick="openGift()">
                <span style="font-size: 3rem; color: white; margin-top: 40px; z-index: 2;">🎁</span>
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
        // 1. Generate Floating Balloons (Warna Langit & Matahari)
        const balloonsContainer = document.getElementById('balloons');
        // Palette: Biru Tua, Biru Muda, Cyan, Putih Awan, Kuning Matahari
        const colors = ['#3b82f6', '#60a5fa', '#93c5fd', '#ffffff', '#fcd34d'];

        function createBalloon() {
            const balloon = document.createElement('div');
            balloon.classList.add('balloon');
            
            // Random properties
            const bg = colors[Math.floor(Math.random() * colors.length)];
            const left = Math.floor(Math.random() * 100);
            const animDuration = Math.random() * 10 + 10; // 10-20s
            const size = Math.random() * 30 + 30; // 30-60px

            balloon.style.background = bg;
            balloon.style.left = left + '%';
            balloon.style.width = size + 'px';
            balloon.style.height = size * 1.2 + 'px';
            balloon.style.animationDuration = animDuration + 's';
            balloon.style.animationDelay = Math.random() * 5 + 's';

            balloonsContainer.appendChild(balloon);

            // Remove after animation ends to save memory
            setTimeout(() => {
                balloon.remove();
            }, (animDuration + 5) * 1000);
        }

        // Create balloons periodically
        setInterval(createBalloon, 2000);
        // Create initial bunch
        for(let i=0; i<10; i++) createBalloon();


        // 2. Gift Interaction
        function openGift() {
            const giftBtn = document.getElementById('giftBtn');
            const message = document.getElementById('hiddenMessage');
            const instruction = document.querySelector('.instruction');

            // Hide gift box
            giftBtn.style.display = 'none';
            instruction.style.display = 'none';

            // Show message
            message.style.display = 'block';

            // Trigger Confetti
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
                    // Confetti warna biru, putih, kuning
                    color: colors[Math.floor(Math.random() * colors.length)],
                    speedX: Math.random() * 10 - 5,
                    speedY: Math.random() * 10 - 15, // Pop upwards
                    gravity: 0.5,
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

                // Remove off-screen particles
                if (p.y > canvas.height) {
                    confettiParticles.splice(index, 1);
                }
            });

            if (confettiParticles.length > 0) {
                requestAnimationFrame(updateConfetti);
            }
        }

        // Resize canvas on window resize
        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>
</html>