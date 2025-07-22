<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Testimonials - Olivia</title>
  <link rel="stylesheet" href="styles.css" /> <!-- Link to external stylesheet -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
      <script src="https://cdn.tailwindcss.com"></script>
<style>
    body {
            font-family: 'Poppins', sans-serif;

    }
    header, nav, .testimonial-section, footer {
      padding: 1rem;
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
    }header {
      background: #1e2c1c;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    nav a {
      color: #fff;
      margin: 0 10px;
      text-decoration: none;
    }
    .hero {
      text-align: center;
      padding: 3rem 1rem;
    }
    .hero h1 {
      font-size: 2rem;
      margin-bottom: 0.25rem;
    }
    .hero p {
      color: gray;
    }
    .testimonial-section {
      max-width: 900px;
      margin: auto;
    }
    .testimonial-title {
      text-align: center;
      margin-bottom: 2rem;
    }
    .testimonial-title h2 {
      font-size: 1.8rem;
    }
    .testimonial-title p {
      font-style: italic;
      color: #e0a106;
    }
    .testimonial {
      background: #f5f5f5;
      padding: 1.5rem;
      margin-bottom: 1rem;
      border-radius: 8px;
    }
    .testimonial .stars {
      color: #f9c51c;
      margin-bottom: 0.5rem;
    }
    .testimonial .client {
      display: flex;
      align-items: center;
      margin-top: 1rem;
    }
    .client img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 1rem;
    }
    .client-info span {
      display: block;
      font-size: 0.9rem;
    }
    .client-info small {
      color: gray;
    }
    .section-title {
      text-align: center;
      margin-top: 3rem;
    }
    .section-title h2 span {
      color: #f9c51c;
    }
  </style>
</head>
<body>
  <?php include '../header.php'; ?>

  <section class="hero">
    <p>Home / Testimonials</p>
    <h1>Testimonials</h1>
  </section>

  <div class="testimonial-section">
    <div class="testimonial-title">
      <p>— Clients Testimonials</p>
      <h2>The Impact of My Work: <br><span style="color:#f9c51c;font-style:italic;">Client Testimonials</span></h2>
    </div>

    <!-- Testimonial Cards -->
    <div class="testimonial">
      <div class="stars">★★★★★ 5.0</div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
      <div class="client">
        <img src="avatar1.jpg" alt="Leslie Alexander">
        <div class="client-info">
          <span>Leslie Alexander</span>
          <small>Founder, EV Charger Station</small>
        </div>
      </div>
    </div>

    <div class="testimonial">
      <div class="stars">★★★★★ 5.0</div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
      <div class="client">
        <img src="avatar2.jpg" alt="Albert Flores">
        <div class="client-info">
          <span>Albert Flores</span>
          <small>CTO, Software Agency</small>
        </div>
      </div>
    </div>

    <div class="testimonial">
      <div class="stars">★★★★★ 5.0</div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
      <div class="client">
        <img src="avatar3.jpg" alt="Eleanor Pena">
        <div class="client-info">
          <span>Eleanor Pena</span>
          <small>Founder, Fitness App</small>
        </div>
      </div>
    </div>

    <div class="testimonial">
      <div class="stars">★★★★★ 5.0</div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
      <div class="client">
        <img src="avatar4.jpg" alt="Kathryn Murphy">
        <div class="client-info">
          <span>Kathryn Murphy</span>
          <small>Founder, Fashion E-commerce Store</small>
        </div>
      </div>
    </div>

    <div class="testimonial">
      <div class="stars">★★★★★ 5.0</div>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
      <div class="client">
        <img src="avatar5.jpg" alt="Jacob Jones">
        <div class="client-info">
          <span>Jacob Jones</span>
          <small>CEO, Doctor Appointment App</small>
        </div>
      </div>
    </div>
  </div>

  <div class="section-title">
    <h2>Still have a <span>question?</span></h2>
    <button>Contact Us</button>
  </div>
<?php include '../footer.php'; ?>
</body>
</html>
