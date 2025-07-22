<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services - Olivia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
    body {
            font-family: 'Poppins', sans-serif;

    }
.nav-link {
      position: relative;
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0%;
      height: 2px;
      background-color: #facc15;
      /* Tailwind's yellow-400 */
      transition: width 0.3s ease-in-out;
    }

    .nav-link:hover::after,
    .nav-link.active::after {
      width: 100%;
    }
    header {
      background: #123524;
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    nav a {
      color: white;
      margin: 0 1rem;
      text-decoration: none;
    }

    .btn {
      background-color: white;
      color: #123524;
      border: none;
      padding: 0.6rem 1rem;
      border-radius: 999px;
      font-weight: bold;
      cursor: pointer;
    }

    .hero {
      text-align: center;
      padding: 4rem 2rem 2rem;
    }

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    .hero p {
      color: #666;
    }

    .about-section {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 3rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
      align-items: center;
    }

    .about-section img {
      width: 100%;
      max-width: 400px;
      border-radius: 1rem;
    }

    .about-text {
      flex: 1;
    }

    .about-text h2 {
      font-size: 2rem;
      color: #123524;
      margin-bottom: 1rem;
    }

    .about-text p {
      margin-bottom: 1.2rem;
      line-height: 1.6;
    }

    .highlights {
      background-color: #fef6e0;
      padding: 3rem 2rem;
      text-align: center;
    }

    .highlights h2 {
      font-size: 2rem;
      color: #d29700;
      margin-bottom: 1.5rem;
    }

    .highlight-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 2rem;
    }

    .highlight-item {
      background: white;
      padding: 1.5rem;
      border-radius: 1rem;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .highlight-item h3 {
      color: #123524;
      font-size: 1.25rem;
    }

    footer {
      background: #123524;
      color: white;
      text-align: center;
      padding: 2rem;
    }

    @media(max-width: 768px) {
      .about-section {
        flex-direction: column;
        text-align: center;
      }

      nav {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }
    }
  </style>
</head>
<body class="bg-white text-gray-900 scroll-smooth">
    <!-- Navbar -->
    <?php include '../header.php'; ?>

  <section class="hero">
    <p>Home / About</p>
    <h1>About Me</h1>
    <p>Product Designer · Creative Thinker · Problem Solver</p>
  </section>

  <section class="about-section">
    <img src="images/about-olivia.jpg" alt="Olivia portrait" />
    <div class="about-text">
      <h2>Hello, I'm Olivia Smith</h2>
      <p>I’m a passionate product designer with 6+ years of experience designing intuitive and impactful digital experiences. My work focuses on combining user-centric design with strategic thinking to bring ideas to life across mobile apps, websites, and dashboards.</p>
      <p>I thrive on solving complex design challenges and collaborating with developers, stakeholders, and fellow designers to deliver meaningful results. Whether it’s a sleek mobile UI or a comprehensive design system, I bring clarity and purpose to every project.</p>
      <p>When I’m not designing, you’ll find me sketching, journaling ideas, or mentoring junior designers.</p>
    </div>
  </section>

  <section class="highlights">
    <h2>Highlights</h2>
    <div class="highlight-grid">
      <div class="highlight-item">
        <h3>50+ Projects</h3>
        <p>Across fintech, health, and e-commerce industries.</p>
      </div>
      <div class="highlight-item">
        <h3>UX Mentor</h3>
        <p>Guiding young designers to build careers they love.</p>
      </div>
      <div class="highlight-item">
        <h3>Design Systems</h3>
        <p>Creating scalable systems for consistent experiences.</p>
      </div>
      <div class="highlight-item">
        <h3>Human-Centered</h3>
        <p>Designing with empathy and accessibility in mind.</p>
      </div>
    </div>
  </section>

<?php include '../footer.php'; ?>
</body>
</html>
