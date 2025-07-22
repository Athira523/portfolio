<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services - Olivia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
<body class="bg-white text-gray-900 scroll-smooth">
    <!-- Navbar -->
    <?php include '../header.php'; ?>


  <!-- Page Header -->
  <section class="page-header">
    <h1>Blogs</h1>
    <p>Home / Blogs</p>
  </section>

  <!-- Horizontal Menu -->
  <div class="service-tabs">
        <span>✳ App Design</span>
        <span>✳ Website Design</span>
        <span>✳ Dashboard</span>
        <span>✳ Wireframe</span>
    </div>
<head>
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

    .hero-image {
      width: 100%;
      max-height: 450px;
      object-fit: cover;
    }

    .container {
      max-width: 1100px;
      margin: 2rem auto;
      padding: 0 1rem;
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 3rem;
    }

    .content h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .content .badge {
      display: inline-block;
      background-color: #f7cc59;
      color: #000;
      font-size: 0.8rem;
      font-weight: bold;
      padding: 0.2rem 0.6rem;
      border-radius: 999px;
      margin-bottom: 0.8rem;
    }

    .author-info {
      font-size: 0.9rem;
      margin-bottom: 1rem;
      color: #666;
    }

    .content p {
      line-height: 1.6;
      margin-bottom: 1rem;
    }

    .table-wrapper {
      overflow-x: auto;
      margin: 1.5rem 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 0.75rem 1rem;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #fef6e0;
    }

    td:first-child {
      font-weight: bold;
    }

    .share-icons {
      display: flex;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .share-icons a {
      background-color: #f3f3f3;
      padding: 0.5rem;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 36px;
      height: 36px;
    }

    .sidebar {
      font-size: 0.95rem;
    }

    .sidebar h3 {
      margin-bottom: 0.5rem;
      border-bottom: 2px solid #eee;
      padding-bottom: 0.3rem;
    }

    .tags, .toc {
      margin-bottom: 2rem;
    }

    .tags span {
      display: inline-block;
      background: #f3f3f3;
      margin: 0.3rem 0.3rem 0 0;
      padding: 0.4rem 0.75rem;
      border-radius: 999px;
      font-size: 0.8rem;
    }

    .cta-box {
      background-color: #123524;
      color: white;
      padding: 1.5rem;
      border-radius: 1rem;
      text-align: center;
    }

    .cta-box h4 {
      margin-bottom: 0.5rem;
    }

    .cta-box button {
      background-color: #f7cc59;
      color: #123524;
      font-weight: bold;
      border: none;
      border-radius: 999px;
      padding: 0.6rem 1.2rem;
      cursor: pointer;
      margin-top: 1rem;
    }

    .cta-box img {
      width: 100px;
      border-radius: 50%;
      margin-top: 1rem;
    }

    .blog-image {
      max-width: 100%;
      border-radius: 1rem;
      margin: 1.5rem 0;
    }

    footer {
      background: #123524;
      color: white;
      text-align: center;
      padding: 2rem;
      margin-top: 3rem;
    }

    @media(max-width: 960px) {
      .container {
        grid-template-columns: 1fr;
      }

      .sidebar {
        order: -1;
      }
    }
  </style>
</head>
<body>


  <img src="images/blog-hero.jpg" alt="Woman working on UI design" class="hero-image" />

  <main class="container">
    <article class="content">
      <div class="badge">UI/UX Design</div>
      <h1>Design Unraveled: Behind the Scenes of UI/UX Magic</h1>
      <div class="author-info">
        Written by <strong>Olivia Smith</strong> · 21 March 2024 · 16 min read
      </div>

      <div class="share-icons">
        <a href="#"><img src="icons/fb.svg" alt="Facebook" /></a>
        <a href="#"><img src="icons/x.svg" alt="Twitter" /></a>
        <a href="#"><img src="icons/linkedin.svg" alt="LinkedIn" /></a>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
      <p>Dolor sit perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

      <h2>How to Estimate Design Project?</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et.</p>

      <h2>UI vs. UX Design: A Quick Comparison</h2>
      <div class="table-wrapper">
        <table>
          <thead>
            <tr><th>Aspect</th><th>UI</th><th>UX</th></tr>
          </thead>
          <tbody>
            <tr><td>Focus</td><td>Visual and interactive</td><td>Holistic user experience</td></tr>
            <tr><td>Scope</td><td>UI elements</td><td>User needs and behaviors</td></tr>
            <tr><td>Goal</td><td>Appealing interface</td><td>Functional journey</td></tr>
            <tr><td>Techniques</td><td>Visual design tools</td><td>User research, prototyping</td></tr>
            <tr><td>Outcome</td><td>Visually appealing interface</td><td>Effective user-centered product</td></tr>
          </tbody>
        </table>
      </div>

      <h2>Why UI/UX Design is Trending?</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et.</p>

      <img src="images/mobile-designs.png" alt="Mobile design mockups" class="blog-image" />
    </article>

    <aside class="sidebar">
      <div class="tags">
        <h3>Popular Tags</h3>
        <span>UI/UX Design</span>
        <span>App Design</span>
        <span>Web Design</span>
        <span>Landing Page</span>
        <span>Wireframe</span>
        <span>Prototype</span>
        <span>Design Tool</span>
        <span>UX</span>
      </div>

      <div class="toc">
        <h3>Table of Content</h3>
        <ul>
          <li>How to Estimate Design Project?</li>
          <li>UI vs. UX Design: A Quick Comparison</li>
          <li>Why UI/UX Design is Trending?</li>
          <li>Benefits of Hiring UX Designer</li>
        </ul>
      </div>

      <div class="cta-box">
        <h4>🚀 Get a Quote</h4>
        <p>Looking For Product Designer?</p>
        <button>Hire Me Now</button>
        <img src="images/olivia-smiling.jpg" alt="Olivia Smith smiling" />
      </div>
    </aside>
  </main>

  <footer>
    &copy; 2025 Olivia Smith · Product Designer
  </footer>

</body>
</html>

  <!-- Blog Section -->
  <main class="blog-container">
    <section class="blog-list">
      <h2 class="section-title">Our Latest <span class="highlight">News & Blogs</span></h2>

      <!-- Blog Post 1 -->
      <article class="blog-post">
        <img src="assets/blog1.jpg" alt="Blog 1" />
        <div class="tags">
          <span class="tag">App UI/UX Design</span>
          <span class="date">21 May 2024</span>
        </div>
        <h3>Minimalist UI Design: Benefits and Best Practices</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <!-- Blog Post 2 -->
      <article class="blog-post">
        <img src="assets/blog2.jpg" alt="Blog 2" />
        <div class="tags">
          <span class="tag">Website UI/UX Design</span>
          <span class="date">20 May 2024</span>
        </div>
        <h3>Improving User Experience: Best Practices for Web Designers</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <!-- Blog Post 3 -->
      <article class="blog-post">
        <img src="assets/blog3.jpg" alt="Blog 3" />
        <div class="tags">
          <span class="tag">Color Theory</span>
          <span class="date">19 May 2024</span>
        </div>
        <h3>Understanding the Color Wheel: Basics Every Designer Should Know</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <!-- Blog Post 4 -->
      <article class="blog-post">
        <img src="assets/blog4.jpg" alt="Blog 4" />
        <div class="tags">
          <span class="tag">UI/UX Design</span>
          <span class="date">18 May 2024</span>
        </div>
        <h3>Design Unraveled: Behind the Scenes of UI/UX Magic</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <!-- Blog Post 5 -->
      <article class="blog-post">
        <img src="assets/blog5.jpg" alt="Blog 5" />
        <div class="tags">
          <span class="tag">Web Design</span>
          <span class="date">17 May 2024</span>
        </div>
        <h3>The Importance of Visual Hierarchy in Web Design</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <a href="#" class="read-more">Read More</a>
      </article>

      <!-- Pagination -->
      <div class="pagination">
        <span class="active">1</span>
        <span>2</span>
        <span>3</span>
        <span>…</span>
        <span>10</span>
      </div>
    </section>

    <!-- Sidebar -->
    <aside class="sidebar">
      <div class="search-box">
        <input type="text" placeholder="Search" />
      </div>

      <div class="sidebar-section">
        <h4>Popular Category</h4>
        <ul>
          <li>UI/UX Design</li>
          <li>App Design</li>
          <li>Web Design</li>
          <li>Landing Page</li>
          <li>Design System</li>
        </ul>
      </div>

      <div class="sidebar-section">
        <h4>Recent Post</h4>
        <ul>
          <li>How to Stay Ahead of Web Design Trends</li>
          <li>A Fly Testing in Web Design: How to Optimize Your Site</li>
          <li>Creating a Design System for Website</li>
        </ul>
      </div>

      <div class="cta-box">
        <p>🚀 Get a Quote</p>
        <h3>Looking For Product Designer?</h3>
        <a href="#" class="btn-cta">Hire Me Now</a>
        <img src="assets/designer.png" alt="Designer" />
      </div>
    </aside>
  </main>
<h2>Process of UI/UX Design</h2>
<ul style="list-style: none; padding-left: 0;">
  <li>🟡 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
  <li>🟡 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
  <li>🟡 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
  <li>🟡 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</li>
</ul>

<div style="background-color: #123524; color: white; padding: 1rem 1.5rem; border-radius: 0.5rem; margin: 2rem 0;">
  <strong>Also Read :</strong><br/>
  <a href="#" style="color: #f7cc59; text-decoration: none;">“Minimalist UI Design: Benefits and Best Practices”</a>
</div>

<h2>Benefits of Hire UI UX Designer</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>

<div style="display: flex; flex-wrap: wrap; gap: 1rem; margin: 1rem 0;">
  <div style="flex: 1 1 200px; background: #f8f8f8; border-radius: 0.5rem; padding: 1rem;">
    <strong>01</strong><br/>
    <strong>Better User Satisfaction</strong>
    <p style="margin: 0.5rem 0 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div style="flex: 1 1 200px; background: #f8f8f8; border-radius: 0.5rem; padding: 1rem;">
    <strong>02</strong><br/>
    <strong>Higher Conversion Rates</strong>
    <p style="margin: 0.5rem 0 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div style="flex: 1 1 200px; background: #f8f8f8; border-radius: 0.5rem; padding: 1rem;">
    <strong>03</strong><br/>
    <strong>Long-term Cost Savings</strong>
    <p style="margin: 0.5rem 0 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div>

<div style="background-color: #fef6e0; padding: 1rem 1.5rem; border-left: 5px solid #f7cc59; border-radius: 0.5rem; display: flex; gap: 1rem; align-items: center;">
  <img src="images/olivia-avatar.jpg" alt="Olivia Smith" style="width: 50px; height: 50px; border-radius: 50%;" />
  <div>
    <strong>Olivia Smith</strong><br/>
    <p style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation.</p>
  </div>
</div>

<hr style="margin: 3rem 0;"/>

<h2 style="text-align: center; color: #333;">– Related Blogs</h2>
<h3 style="text-align: center; color: #f7a100;">Latest <span style="color: #222;">Related Blogs</span></h3>

<div style="display: flex; flex-wrap: wrap; gap: 2rem; margin-top: 2rem;">
  <!-- Blog 1 -->
  <div style="flex: 1 1 280px; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.05); border-radius: 0.75rem; overflow: hidden;">
    <img src="images/blog1.jpg" alt="Blog 1" style="width: 100%; height: auto;" />
    <div style="padding: 1rem;">
      <div style="font-size: 0.75rem; margin-bottom: 0.5rem; display: flex; gap: 1rem;">
        <span style="background-color: #fde68a; padding: 0.2rem 0.6rem; border-radius: 999px;">Web Design</span>
        <span style="color: #666;">13 May 2024</span>
      </div>
      <h4 style="margin: 0;">Cost–Effective Design: How UI/UX Experts Save You Money</h4>
      <p style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#" style="color: #f7a100; font-weight: bold;">Read More</a>
    </div>
  </div>

  <!-- Blog 2 -->
  <div style="flex: 1 1 280px; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.05); border-radius: 0.75rem; overflow: hidden;">
    <img src="images/blog2.jpg" alt="Blog 2" style="width: 100%; height: auto;" />
    <div style="padding: 1rem;">
      <div style="font-size: 0.75rem; margin-bottom: 0.5rem; display: flex; gap: 1rem;">
        <span style="background-color: #fcd34d; padding: 0.2rem 0.6rem; border-radius: 999px;">App Design</span>
        <span style="color: #666;">7 May 2024</span>
      </div>
      <h4 style="margin: 0;">Maximize App Downloads with Professional Design</h4>
      <p style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#" style="color: #f7a100; font-weight: bold;">Read More</a>
    </div>
  </div>

  <!-- Blog 3 -->
  <div style="flex: 1 1 280px; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.05); border-radius: 0.75rem; overflow: hidden;">
    <img src="images/blog3.jpg" alt="Blog 3" style="width: 100%; height: auto;" />
    <div style="padding: 1rem;">
      <div style="font-size: 0.75rem; margin-bottom: 0.5rem; display: flex; gap: 1rem;">
        <span style="background-color: #fcd34d; padding: 0.2rem 0.6rem; border-radius: 999px;">UI/UX Design</span>
        <span style="color: #666;">1 May 2024</span>
      </div>
      <h4 style="margin: 0;">Save Time and Money with Expert UI/UX Design</h4>
      <p style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#" style="color: #f7a100; font-weight: bold;">Read More</a>
    </div>
  </div>
</div>
<!-- Bottom Bar -->
<?php include '../footer.php'; ?>
 

</body>
</html>
