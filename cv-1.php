<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Kreatif - Biru Ungu Hitam</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #0a0a0f;
      color: #fff;
      line-height: 1.6;
      overflow-x: hidden;
      position: relative;
    }

/* Video background */
video {
    position: fixed;
    top: 50%; /* Pusatkan vertikal */
    left: 50%; /* Pusatkan horizontal */
    width: 100vw; /* Lebar 100% dari viewport */
    height: auto; /* Sesuaikan tinggi secara otomatis */
    min-height: 100vh; /* Pastikan tinggi minimal 100% */
    z-index: -1;
    transform: translate(-50%, -50%); /* Memusatkan video */
    object-fit: cover; /* Mengisi area tanpa distorsi */
}

/* Overlay animasi bitmaps */
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Contoh overlay gelap */
    z-index: 1; /* Overlay di atas video */
}

    /* Overlay animasi bintang */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: url('https://www.transparenttextures.com/patterns/stardust.png');
      opacity: 0.15;
      z-index: -1;
      animation: moveStars 120s linear infinite;
    }

    header {
      text-align: center;
      padding: 2rem 1rem;
      background: rgba(0, 0, 0, 0.6);
      border-bottom: 2px solid #5a00ff;
      box-shadow: 0 0 40px rgba(0, 162, 255, 0.5);
    }

    header img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      border: 4px solid #00c3ff;
      animation: pulse 3s infinite;
    }
    @keyframes pulse {
      0% { box-shadow: 0 0 15px #5a00ff; }
      50% { box-shadow: 0 0 40px #00c3ff; }
      100% { box-shadow: 0 0 15px #5a00ff; }
    }

    header h1 {
      margin: 1rem 0 0.3rem;
      font-size: 2.6rem;
      font-weight: 700;
      font-family: 'Montserrat', sans-serif;
      text-shadow: 0 0 15px #5a00ff, 0 0 25px #00c3ff;
    }

    header p {
      font-size: 1rem;
      color: #cfc9ff;
    }

    section {
      max-width: 950px;
      margin: 2rem auto;
      background: rgba(255, 255, 255, 0.05);
      padding: 1.8rem;
      border-radius: 18px;
      border: 1px solid rgba(0,195,255,0.4);
      box-shadow: 0 0 25px rgba(90, 0, 255, 0.3);
      opacity: 0;
      transform: translateY(50px);
      animation: fadeInUp 1.2s forwards;
    }
    section:nth-child(odd) { animation-delay: 0.5s; }
    section:nth-child(even) { animation-delay: 1s; }

    section:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: 0 0 45px rgba(0,195,255,0.7), 0 0 30px rgba(90,0,255,0.6);
    }

    @keyframes fadeInUp {
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      border-bottom: 2px solid #00c3ff;
      padding-bottom: 0.5rem;
      margin-bottom: 1rem;
      font-size: 1.6rem;
      font-weight: 600;
      font-family: 'Montserrat', sans-serif;
      color: #5a00ff;
      text-shadow: 0 0 12px #00c3ff;
    }

    h2 i {
      margin-right: 10px;
      color: #00c3ff;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    ul li {
      margin: 0.5rem 0;
      padding: 0.7rem 1rem;
      background: rgba(255, 255, 255, 0.05);
      border-left: 4px solid #00c3ff;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    ul li:hover {
      background: rgba(90, 0, 255, 0.2);
      transform: translateX(8px);
    }

    /* Grid layout */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }

    a {
      color: #00c3ff;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-shadow: 0 0 15px #5a00ff, 0 0 25px #00c3ff;
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      font-size: 0.9rem;
      background: rgba(0, 0, 0, 0.8);
      margin-top: 2rem;
      border-top: 1px solid #5a00ff;
      box-shadow: 0 -3px 25px rgba(0,195,255,0.4);
      color: #cfc9ff;
    }
  </style>
</head>
<body>

  <!-- Background Video -->
  <video autoplay muted loop id="bg-video">
    <source src="https://github.com/evanridwan090906-alt/website/raw/refs/heads/main/realmadrid.mp4" type="video/mp4">
    Browser Anda tidak mendukung video.
  </video>

  <header>
    <img src="https://github.com/evanridwan090906-alt/website/raw/main/evan.jpg" alt="Foto Profil">
    <h1>Evan Ridwan Rustrandi Saputra</h1>
    <p>kalijaga, harjamukti, kota cirebon| 0895320376018 | evanridwan090906@gmail.com</p>
  </header>

  <section>
    <h2><i class="fas fa-user"></i> Profil Singkat</h2>
    <p>Saya adalah pribadi yang aktif dan penuh semangat, dengan hobi berolahraga seperti fitness dan sepakbola, sekaligus memiliki minat besar pada dunia gaming, musik, dan film. Sebagai pendukung setia Real Madrid dan Persib, saya terbiasa dengan nilai sportivitas, kerja sama, dan semangat juang. Selain itu, saya memiliki keterampilan di bidang otomotif serta coding, yang mencerminkan kemampuan berpikir teknis sekaligus praktis. Perpaduan minat dan keterampilan ini membuat saya fleksibel, disiplin, dan mampu beradaptasi dalam berbagai bidang.</p>
  </section>

  <section>
    <h2><i class="fas fa-graduation-cap"></i> Pendidikan</h2>
    <ul>
      <li>D3 - Manajemen Informatika, STIMIK IKMI CIREBON(2024 - 2027)</li>
      <li>SMK - SMK AL HIDAYAH OTOMOTIF (2021 - 2024)</li>
    </ul>
  </section>

  <section>
    <h2><i class="fas fa-briefcase"></i> Pengalaman</h2>
    <div class="grid">
      <div>
        <ul><li>Magang Bengkel Baraka mobil  - CV Baraka mobiil (2023)</li></ul>
      </div>
      <div>
        <ul><li>Dropshipper shoppe (2020 - sekarang)</li></ul>
      </div>
    </div>
  </section>

  <section>
    <h2><i class="fas fa-tools"></i> Keterampilan</h2>
    <div class="grid">
      <ul>
        <li>HTML, CSS, JavaScript, Python, PHP, AI</li>
        <li>React, Node.js</li>
      </ul>
      <ul>
        <li>Bahasa: Indonesia (Native)</li>
        <li>Bahasa: Inggris (Fluent)</li>
      </ul>
    </div>
  </section>

  <section>
    <h2><i class="fas fa-project-diagram"></i> Portofolio</h2>
    <ul>
      <li><a href="https://github.com/evanridwan090906-alt" target="_blank">GitHub Saya</a></li>
      <li><a href="https://www.linkedin.com/in/evan-ridwan-164175382?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_appe" target="_blank">Linked.in</a></li>
    </ul>
  </section>

  <section>
    <h2><i class="fas fa-award"></i> Prestasi & Sertifikat</h2>
    <ul>
      <li>Sertifikat LSP (2023)</li>
           <li>Sertifikat PKL (2023)</li>
      <li>Sertifikasi NDGLinux (2025)</li>
    </ul>
  </section>

  <footer>
    &copy; 2025 EVAN RIDWAN RUSTANDI SAPUTRA | CV SAYA
  </footer>
</body>
</html>
a