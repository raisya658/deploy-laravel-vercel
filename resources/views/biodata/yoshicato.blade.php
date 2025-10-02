<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio Saya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>
    <style>
        /* Reset dasar */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  background-color: #f4f4f4;
  color: #ffffff;
}

.container {
  width: 90%;
  max-width: 960px;
  margin: 0 auto;
  padding: 20px 0;
}

/* Header */
header {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
  padding: 30px 0;
  text-align: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

header h1 {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

header p {
  font-size: 1.2rem;
  font-weight: 300;
}

/* Section */
section {
  background-color: rgb(66, 64, 68);
  margin: 20px 0;
  padding: 20px 30px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

section h2 {
  margin-bottom: 15px;
  color: #ffffff;
  border-bottom: 2px solid #000000;
  padding-bottom: 5px;
}

/* List Keahlian */
#skills ul {
  list-style-type: square;
  padding-left: 20px;
}

#skills li {
  margin-bottom: 8px;
  font-weight: 600;
}

/* Link */
a {
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s ease;
}

a:hover {
  color: #ffffff;
  text-decoration: underline;
}

/* Footer */
footer {
  background-color: #222;
  color: #ccc;
  text-align: center;
  padding: 15px 0;
  margin-top: 40px;
  font-size: 0.9rem;
}

/* Responsive */
@media (max-width: 600px) {
  header h1 {
    font-size: 1.8rem;
  }

  section {
    padding: 15px 20px;
  }
}

    </style>
    <header>
      <div class="container">
        <h1>Yoshicato Otniel L</h1>
        <p>Web Developer | HTML,JS,CSS Enthusiast</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <h2>Tentang Saya</h2>
        <p>
          Saya adalah seorang siswa yang antusias membangun web modern dan
          efisien. Saya suka belajar teknologi baru dan menyelesaikan tantangan.
        </p>
      </div>
    </section>

    <section id="skills">
      <div class="container">
        <h2>Keahlian</h2>
        <ul>
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>Git & GitHub</li>
        </ul>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h2>Kontak</h2>
        <p>
          <a href="#" target="_blank">LinkedIn</a> |
          <a href="#" target="_blank">GitHub</a> |
          <a href="TUGAS-PA-ASMUL-TG-19" id="back-link">Kembali ke Home</a>
        </p>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; 2025 Yoshicato Otniel L. All rights reserved.</p>
      </div>
    </footer>

    <script src="js/script.js"></script>
  </body>
</html>
