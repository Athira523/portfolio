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



        .contact-button {
            background-color: #1f3c2f;
            color: white;
            padding: 8px 20px;
            border-radius: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .breadcrumb {
            text-align: center;
            padding: 30px 0 10px;
        }

        .breadcrumb h1 {
            font-size: 32px;
            margin-bottom: 5px;
        }

        .breadcrumb p {
            font-size: 14px;
            color: #666;
        }

        .service-tabs {
            background-color: #f5a623;
            color: #000;
            display: flex;
            justify-content: center;
            gap: 50px;
            padding: 12px 0;
            font-weight: 600;
        }

        .service-tabs span {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .video-section {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .video-container {
            position: relative;
        }

        .video-container img {
            width: 100%;
            border-radius: 16px;
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            border-radius: 50%;
            padding: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .about-section {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .about-section h2 {
            display: flex;
            align-items: center;
            font-size: 22px;
        }

        .about-section h2 span {
            display: inline-block;
            background: #f5a623;
            color: #fff;
            border-radius: 50%;
            padding: 8px;
            margin-right: 12px;
        }

        .about-section p {
            color: #666;
            margin: 10px 0 30px;
        }

        .services-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .service-item {
            flex: 1 1 calc(33% - 20px);
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #333;
        }

        .service-item img {
            margin-right: 8px;
        }

        @media (max-width: 768px) {
            .services-list {
                flex-direction: column;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>

<body class="bg-white text-gray-900 scroll-smooth">
    <!-- Navbar -->
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
  <div class="bg-green-100 text-green-700 font-semibold py-2 px-4 rounded text-center my-4 mx-auto max-w-md">
    Thank you! Your form was submitted successfully.
  </div>
<?php endif; ?>
    <?php include '../header.php'; ?>

    <section class="breadcrumb">
        <h1>Services</h1>
        <p>Home / Services</p>
    </section>

    <div class="service-tabs">
        <span>✳ App Design</span>
        <span>✳ Website Design</span>
        <span>✳ Dashboard</span>
        <span>✳ Wireframe</span>
    </div>

    <section class="video-section">
        <div class="video-container">
            <img src="../image/videothumbnail.png" alt="Service Video" />

        </div>
    </section>

    <section class="about-section">
        <h2><span>L</span>About Website Design Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veinam,quis nostrud exercitation...</p>

        <h3>Services Include:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...</p>

        <div class="services-list">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-y-4 mb-10">
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Lorem ipsum dolor</div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Beatae vitae dicta sunt
                </div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Sed ut perspiciatis</div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Explicabo Nemo enim</div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Vitae dicta sunt explicabo
                </div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Explicabo Nemo enim</div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Veritatis et quasi
                    architecto</div>
                <div class="flex items-center gap-2"><span class="text-yellow-500">✔️</span>Explicabo Nemo enim</div>
            </div>
            <!-- Mockup Panels -->

            <div class="flex justify-center items-center gap-10 mb-10">
                <img src="../image/service1.png" alt="Architecture Design"
                    class="rounded-lg shadow-lg w-[500px] h-[400px] object-cover" />
                <img src="../image/service2.png" alt="Furniture Store"
                    class="rounded-lg shadow-lg w-[500px] h-[400px] object-cover" />
            </div>

    </section>
    <section style="padding: 60px 20px; max-width: 1200px; margin: auto;">
        <h2 style="font-size: 24px; font-weight: 700; margin-bottom: 10px;">Top 8 Industries I Cover in Website Design
        </h2>
        <p style="max-width: 800px; color: #555; margin-bottom: 40px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam...
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
            <!-- Industry Card -->
            <div style="background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
                <strong style="color: #fff; background: #1f3c2f; border-radius: 50%; padding: 8px 14px;">01</strong>
                <h4 style="margin: 12px 0 5px;">E-Commerce</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>

            <!-- Repeat for other industries -->
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #e3a700; border-radius: 50%; padding: 8px 14px;">02</strong>
                <h4 style="margin: 12px 0 5px;">Healthcare</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #1f3c2f; border-radius: 50%; padding: 8px 14px;">03</strong>
                <h4 style="margin: 12px 0 5px;">Real Estate</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #e3a700; border-radius: 50%; padding: 8px 14px;">04</strong>
                <h4 style="margin: 12px 0 5px;">Education</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #1f3c2f; border-radius: 50%; padding: 8px 14px;">05</strong>
                <h4 style="margin: 12px 0 5px;">Finance</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #e3a700; border-radius: 50%; padding: 8px 14px;">06</strong>
                <h4 style="margin: 12px 0 5px;">Hospitality</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #1f3c2f; border-radius: 50%; padding: 8px 14px;">07</strong>
                <h4 style="margin: 12px 0 5px;">Fitness</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div style="background: #fff; border-radius: 12px; padding: 20px;">
                <strong style="color: #fff; background: #e3a700; border-radius: 50%; padding: 8px 14px;">08</strong>
                <h4 style="margin: 12px 0 5px;">Sports</h4>
                <p style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
        </div>
    </section>

    <section style="padding: 40px 20px; max-width: 1000px; margin: auto;">
        <h2 style="font-size: 22px; font-weight: 700;">Services Benefits:</h2>
        <p style="color: #555;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
        </p>
        <ul style="margin-top: 20px; list-style: none; padding: 0;">
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="..\image\check-yellow.png" alt="✔" width="20" style="margin-right: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="..\image\check-yellow.png" alt="✔" width="20" style="margin-right: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
            </li>
            <li style="display: flex; align-items: center; margin-bottom: 10px;">
                <img src="..\image\check-yellow.png" alt="✔" width="20" style="margin-right: 10px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
            </li>
        </ul>
    </section>

    <section style="padding: 60px 20px; text-align: center; background: #f9f9f9;">
        <h2 style="font-size: 28px;">Let’s Create an <span style="color: #f5a623;">Amazing <br>Project</span> Together!
        </h2>
        <a href="contact.html"
            style="display: inline-flex; align-items: center; background: #1f3c2f; color: white; padding: 12px 24px; border-radius: 30px; font-weight: bold; text-decoration: none; margin-top: 20px;">
            Contact Us Now →&nbsp;
        </a>

        <div style="margin-top: 40px; display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
            <span style="background: #1f3c2f; color: #fff; padding: 8px 12px; border-radius: 20px;">Wireframe
                Design</span>
            <span style="background: #f5a623; color: #000; padding: 8px 12px; border-radius: 20px;">Website
                Design</span>
            <span style="background: #1f3c2f; color: #fff; padding: 8px 12px; border-radius: 20px;">Design System</span>
            <span style="background: #f5a623; color: #000; padding: 8px 12px; border-radius: 20px;">Prototype</span>
            <span style="background: #1f3c2f; color: #fff; padding: 8px 12px; border-radius: 20px;">UX/UI Design</span>
            <span style="background: #f5a623; color: #000; padding: 8px 12px; border-radius: 20px;">Landing Page</span>
            <span style="background: #1f3c2f; color: #fff; padding: 8px 12px; border-radius: 20px;">Brand
                Identity</span>
            <!-- Add more tags as needed -->
        </div>
    </section>
    <footer class="bg-white text-gray-700 py-14 px-6 md:px-20 border-t">
    <!-- Header -->
     <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Section</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1f3a28] text-white font-sans">

  <!-- Contact Section -->
  <section class="px-8 py-12 md:px-16 md:py-20 bg-[#1f3a28] text-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

      <!-- Left Column -->
      <div class="space-y-6">
        <h3 class="text-yellow-500 text-sm font-semibold">– Contact Us</h3>
        <h1 class="text-4xl font-bold leading-snug">
          Let’s Talk for <span class="text-yellow-500">Your Next Projects</span>
        </h1>
        <p class="text-gray-300 max-w-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>

        <div class="space-y-4 pt-6 text-white text-base">
          <div class="flex items-center gap-4">
            <div class="bg-yellow-500 rounded-full p-3"><span class="text-black text-lg">📞</span></div>
            <span>+1 (406) 555–0120</span>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-yellow-500 rounded-full p-3"><span class="text-black text-lg">✉️</span></div>
            <span>example@gmail.com</span>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-yellow-500 rounded-full p-3"><span class="text-black text-lg">💬</span></div>
            <span>example</span>
          </div>
          <div class="flex items-center gap-4">
            <div class="bg-yellow-500 rounded-full p-3"><span class="text-black text-lg">📍</span></div>
            <span>2464 Royal Ln. Mesa, New Jersey 45463</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Contact Form -->
      <form class="space-y-6" method="POST" action="../admin/process_contact.php">
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <input type="text" name="name" placeholder="Ex. John Doe" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" />
    <input type="email" name="email" placeholder="example@gmail.com" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" />
    <input type="tel" name="phone" placeholder="Enter Phone Number" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" />
    <select name="service" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none">
      <option disabled selected>Select</option>
      <option>App Design</option>
      <option>Website</option>
    </select>
    <select name="budget" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white outline-none">
      <option disabled selected>Select Range</option>
      <option>$500 - $1000</option>
      <option>$1000 - $3000</option>
    </select>
    <select name="country" required
      class="bg-[#2f4b37] p-4 rounded-md w-full text-white outline-none">
      <option disabled selected>Select Country</option>
      <option>USA</option>
      <option>UK</option>
    </select>
  </div>
  <textarea name="message" placeholder="Enter here.." rows="4" required
    class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none"></textarea>
  <button type="submit"
    class="bg-yellow-500 text-black font-medium px-6 py-3 rounded-full flex items-center gap-2 hover:bg-yellow-400">
    Submit <span>➡️</span>
  </button>
</form>

    </div>
  </section>

  <!-- Bottom Bar -->
  <div class="bg-yellow-400 text-black py-3 px-4 flex flex-wrap justify-center gap-8 font-medium text-sm">
    <span>App Design</span>
    <span>✴︎</span>
    <span>Website Design</span>
    <span>✴︎</span>
    <span>Dashboard</span>
    <span>✴︎</span>
    <span>Wireframe</span>
  </div>

    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold">
        Let’s <span class="text-yellow-500 font-medium">Connect</span> there
      </h2>
    </div>
 <!-- Content -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-sm">
      <!-- Brand -->
      <div>
        <div class="flex items-center gap-2 mb-4">
          <div class="bg-yellow-400 text-black font-bold w-8 h-8 flex items-center justify-center rounded-full">O</div>
          <span class="font-semibold text-lg">Olivia<span class="text-black">.</span></span>
        </div>
        <p class="text-gray-500 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <div class="flex space-x-4 text-gray-700 text-xl">
          <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-behance-square"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Navigation -->
      <div>
        <h4 class="font-semibold mb-4">Navigation</h4>
        <ul class="space-y-2 text-gray-600">
          <li><a href="index.html">Home</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="blogs.html">Blogs</a></li>
          <li><a href="#FAQs">FAQs</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="font-semibold mb-4">Contact</h4>
        <ul class="space-y-2 text-gray-600">
          <li>+0123–456–789</li>
          <li>www.example.com</li>
          <li>example@gmail.com</li>
          <li>2464 Royal Ln. Mesa,<br>New Jersey 45463</li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h4 class="font-semibold mb-4">Get the latest information</h4>
        <div class="flex">
          <input type="email" placeholder="Email address"
            class="w-full px-4 py-2 border border-gray-300 rounded-l-md focus:outline-none">
          <button class="bg-[#29452C] px-4 py-2 text-white rounded-r-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </footer>
    <!-- Bottom Bar -->
    <?php include '../footer.php'; ?>
</body>

</html>