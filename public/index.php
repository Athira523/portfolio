<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Olivia - Product Designer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

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
  </style>
</head>

<body class="bg-white text-gray-900 scroll-smooth">
  <!-- Navbar -->
  <?php include 'header.php'; ?>



  <!-- Hero Section -->
  <section id="home" class="px-6 py-16 md:flex md:items-center md:justify-between max-w-6xl mx-auto relative">
    <div class="md:w-1/2 space-y-6">
      <div class="inline-block border border-gray-400 relative px-4 py-1 text-sm font-medium">
        <span class="absolute top-0 left-0 w-2 h-2 bg-yellow-500 border border-black"></span>
        <span class="absolute top-0 right-0 w-2 h-2 bg-yellow-500 border border-black"></span>
        <span class="absolute bottom-0 left-0 w-2 h-2 bg-yellow-500 border border-black"></span>
        <span class="absolute bottom-0 right-0 w-2 h-2 bg-yellow-500 border border-black"></span>
        Hello There!
      </div>

      <h1 class="text-5xl font-semibold leading-snug">
        I’m
        <span class="italic font-medium text-yellow-500 underline underline-offset-4">Olivia Smith</span><span
          class="text-yellow-500">,</span><br />
        <span class="font-semibold">Product Designer</span><br />
        Based in USA.
      </h1>


      <p class="text-gray-600 max-w-lg">
        I'm an experienced Product Designer with 18+ years in the field, collaborating with various companies
        and startups.
      </p>

      <div class="flex items-center space-x-4">
        <div class="flex items-center bg-yellow-500 rounded-full overflow-hidden shadow-md">
          <button class="bg-green-900 text-white px-6 py-2 font-semibold rounded-l-full">
            View My Portfolio
          </button>
          <span class="bg-white w-10 h-10 flex items-center justify-center text-green-900 text-xl">▶</span>
        </div>
        <button
          class="border-2 border-green-900 text-green-900 px-6 py-2 rounded-full font-semibold hover:bg-yellow-400 hover:border-yellow-400">
          Hire Me
        </button>
      </div>
    </div>

    <div class="relative mt-10 md:mt-0 md:w-1/2 flex justify-center">
      <div class="relative z-10">
        <img src="image/olivia smith.png" alt="Olivia Smith" class="rounded-xl mx-auto w-full max-w-sm md:max-w-md" />
      </div>
      <div class="absolute top-12 right-16 w-56 h-56 bg-yellow-500 rounded-full -z-10"></div>
    </div>
  </section>

  <!-- Tag Marquee -->
  <div class="bg-yellow-400 text-black text-center py-4 flex justify-around items-center text-lg font-semibold">
    <span class="flex items-center gap-2">✱ App Design</span>
    <span class="flex items-center gap-2">✱ Website Design</span>
    <span class="flex items-center gap-2">✱ Dashboard</span>
    <span class="flex items-center gap-2">✱ Wireframe</span>
  </div>

  <!-- 👇 Inserted Enhanced Services & About Section -->
  <!-- Services Section -->
  <section class="px-6 py-16 max-w-6xl mx-auto" id="services">
    <div class="flex justify-between items-center mb-10">
      <div>
        <h3> <span class="text-yellow-500">- </span><span class="text-sm text-gray-500 mb-1"> Services</h3>
        <h2 class="text-4xl font-semibold">
          <span class="text-yellow-500">Services</span>
          <span class="text-gray-900">I Provide</span>
        </h2>
      </div>
      <a href="services.html"
        class="flex items-center bg-green-900 text-white px-5 py-2 rounded-full hover:bg-yellow-500 transition">
        View All Services <span class="ml-2 text-yellow-400 text-xl">→</span>
      </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
        <div class="mb-4">
          <img src="image\icon1.png" alt="UI/UX" class="h-10 w-10" />
        </div>
        <h3 class="text-lg font-semibold mb-2">UI/UX Design</h3>
        <p class="text-gray-600 mb-4 text-sm">Creating beautiful and usable user interfaces and experiences.</p>
        <a href="services.html" class="text-sm font-semibold text-black hover:text-yellow-500 flex items-center">
          Learn more <span class="ml-1 text-yellow-400">→</span>
        </a>
      </div>

      <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
        <div class="mb-4">
          <img src="image\icon2.png" alt="App Design" class="h-10 w-10" />
        </div>
        <h3 class="text-lg font-semibold mb-2">Application Design</h3>
        <p class="text-gray-600 mb-4 text-sm">Designing mobile and desktop applications with user focus.</p>
        <a href="services.html" class="text-sm font-semibold text-black hover:text-yellow-500 flex items-center">
          Learn more <span class="ml-1 text-yellow-400">→</span>
        </a>
      </div>

      <div class="bg-gray-100 p-6 rounded-xl shadow hover:shadow-lg transition">
        <div class="mb-4">
          <img src="image\icon3.png" alt="Web Design" class="h-10 w-10" />
        </div>
        <h3 class="text-lg font-semibold mb-2">Website Design</h3>
        <p class="text-gray-600 mb-4 text-sm">Responsive and modern websites tailored to your brand.</p>
        <a href="services.html" class="text-sm font-semibold text-black hover:text-yellow-500 flex items-center">
          Learn more <span class="ml-1 text-yellow-400">→</span>
        </a>
      </div>
    </div>
  </section>

  <!-- About Me Section -->
  <section class="bg-green-900 text-white py-16 px-6" id="about">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <!-- Left (Image + Tags) -->
      <div class="relative">
        <img src="image\olivia smith.png" alt="Olivia Smith"
          class="relative z-10 w-64 h-64 rounded-full object-cover mx-auto" />
        <div class="flex flex-wrap gap-2 mt-6 justify-center text-sm">
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">UX/UI Design</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Website Design</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Wireframe Design</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Design System</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Mobile App Design</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Prototype</span>
          <span class="bg-white text-green-900 px-3 py-1 rounded-full font-medium">Dashboard</span>
        </div>
      </div>

      <!-- Right (Text Content) -->
      <div>
        <h3><span class="text-yellow-500">-</span><span class="text-sm text-white-400 mb-1"> About Me</span></h3>
        <h2 class="text-4xl font-semibold mb-4">
          Who is <span class="italic font-medium text-yellow-400">Olivia Smith?</span>
        </h2>
        <p class="text-gray-200 mb-6 text-base leading-relaxed">
          Passionate designer with 18+ years of experience building intuitive, user-centered products that
          scale beautifully.
        </p>

        <div class="flex gap-10 mb-8 text-center">
          <div>
            <p class="text-3xl font-bold text-yellow-400">600+</p>
            <p class="text-sm">Project Completed</p>
          </div>
          <div>
            <p class="text-3xl font-bold text-yellow-400">50+</p>
            <p class="text-sm">Industry Covered</p>
          </div>
          <div>
            <p class="text-3xl font-bold text-yellow-400">18+</p>
            <p class="text-sm">Years of Experience</p>
          </div>
        </div>

        <a href="#"
          class="bg-white text-green-900 px-5 py-2 rounded-full font-semibold hover:bg-yellow-400 transition inline-flex items-center">
          Download CV <span class="ml-2 text-yellow-500 text-lg">→</span>
        </a>
      </div>
    </div>
  </section>
  <!-- Favorite Tools Section -->
  <section class="bg-white py-20 px-6" id="tools">
    <div class="max-w-6xl mx-auto text-center">
      <!-- Subtitle -->
      <p><span class="font-bold text-yellow-500">-</span><span class="text-sm text-gray-500 mb-1"></span>
        My Favorite Tools
      </p>

      <!-- Title -->
      <h2 class="text-3xl md:text-4xl font-semibold">
        <span class="text-yellow-500 font-medium italic">Exploring the Tools</span><br />
        <span class="text-gray-900 font-bold">Behind My Designs</span>
      </h2>

      <!-- Tools Grid -->
      <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 md:gap-10">
        <!-- Tool Card -->
        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" alt="Figma"
            class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">98%</p>
          <p class="text-sm text-gray-600 mt-1">Figma</p>
        </div>

        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sketch/sketch-original.svg" alt="Sketch"
            class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">92%</p>
          <p class="text-sm text-gray-600 mt-1">Sketch</p>
        </div>

        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/photoshop/photoshop-line.svg" alt="Photoshop"
            class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">90%</p>
          <p class="text-sm text-gray-600 mt-1">Photoshop</p>
        </div>

        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/aftereffects/aftereffects-original.svg"
            alt="After Effects" class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">85%</p>
          <p class="text-sm text-gray-600 mt-1">After Effects</p>
        </div>

        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="https://raw.githubusercontent.com/storybookjs/brand/main/icon/icon-storybook-default.svg"
            alt="Storybook" class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">90%</p>
          <p class="text-sm text-gray-600 mt-1">Storybook</p>
        </div>

        <div class="flex flex-col items-center bg-gray-100 p-4 rounded-3xl">
          <img src="image\image.png" alt="InVision" class="h-12 mb-2" />
          <p class="text-lg font-semibold text-gray-800">95%</p>
          <p class="text-sm text-gray-600 mt-1">InVision</p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gray-100 py-20 px-4 md:px-16">
    <!-- Section Header -->
    <div class="flex justify-between items-center mb-12">
      <div>
        <p class="text-2xl"><span class="text-medium text-yellow-500 font-medium mb-2">— </span>My Portfolio</p>
        <h2 class="text-5xl font-medium text-gray-900">
          My Latest <span class="text-yellow-500 italic">Projects</span>
        </h2>
      </div>
      <a href="projects.html"
        class="flex items-center gap-2 px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-full transition">
        View All Projects
        <span class="bg-white text-yellow-500 rounded-full p-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </span>
      </a>
    </div>

    <!-- Projects Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

      <!-- Project Card -->
      <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
        <div class="overflow-hidden rounded-t-2xl">
          <img src="image/1st pic.png" alt="Beauty Product Ecommerce App" class="w-full object-cover" />
        </div>
        <div class="p-6 space-y-3">
          <div class="flex flex-wrap gap-2">
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">UI/UX Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">App Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Wireframe</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">
            Beauty Product – Ecommerce Mobile App Solution
          </h3>
        </div>
        <div class="p-4 flex justify-end">
          <button
            class="w-9 h-9 bg-gray-900 text-white rounded-full flex items-center justify-center hover:bg-yellow-500 transition">
            →
          </button>
        </div>
      </div>

      <!-- Duplicate project cards with different content below -->
      <!-- You can replace image paths and titles as needed -->

      <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
        <div class="overflow-hidden rounded-t-2xl">
          <img src="image\2nd pic.png" alt="Beauty Product Landing Page" class="w-full object-cover" />
        </div>
        <div class="p-6 space-y-3">
          <div class="flex flex-wrap gap-2">
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">UI/UX Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Web Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Wireframe</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">
            Beauty Product Mobile App Landing Page Design
          </h3>
        </div>
        <div class="p-4 flex justify-end">
          <button
            class="w-9 h-9 bg-gray-900 text-white rounded-full flex items-center justify-center hover:bg-yellow-500 transition">
            →
          </button>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
        <div class="overflow-hidden rounded-t-2xl">
          <img src="image\3rd pic.png" alt="Coffee App Solution" class="w-full object-cover" />
        </div>
        <div class="p-6 space-y-3">
          <div class="flex flex-wrap gap-2">
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">UI/UX Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">App Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Wireframe</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">
            Coffee Shop App – Coffee Ordering App Solution
          </h3>
        </div>
        <div class="p-4 flex justify-end">
          <button
            class="w-9 h-9 bg-gray-900 text-white rounded-full flex items-center justify-center hover:bg-yellow-500 transition">
            →
          </button>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition">
        <div class="overflow-hidden rounded-t-2xl">
          <img src="image\4th pic.png" alt="Coffee Shop Landing Page" class="w-full object-cover" />
        </div>
        <div class="p-6 space-y-3">
          <div class="flex flex-wrap gap-2">
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">UI/UX Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Web Design</span>
            <span class="bg-yellow-500 text-white text-xs font-medium px-3 py-1 rounded-full">Wireframe</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-900">
            Coffee Shop Mobile App Landing Page Design
          </h3>
        </div>
        <div class="p-4 flex justify-end">
          <button
            class="w-9 h-9 bg-gray-900 text-white rounded-full flex items-center justify-center hover:bg-yellow-500 transition">
            →
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- Education & Work Section -->
  <section class="bg-white py-20 px-6" id="education-work">
    <div class="min-h-screen flex items-center justify-center bg-white">
      <div class="max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-12">
          <p>
            <span class="text-xl text-yellow-500">- </span>
            <span class="text-sm text-gray-800">Education & Work</span>
          </p>
          <h2 class="text-3xl md:text-4xl font-bold">
            My <span class="italic text-yellow-500">Academic and</span><br />
            <span class="italic text-yellow-500">Professional</span>
            <span class="text-black"> Journey</span>
          </h2>
        </div>


        <!-- Cards Grid -->
        <div class="grid md:grid-cols-2 gap-8">
          <!-- Education Card -->
          <div class="bg-gray-50 p-6 rounded-2xl shadow-sm">
            <div class="flex items-center mb-6">
              <div class="bg-yellow-400 rounded-full p-2">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6"></path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-gray-800 ml-4">Education</h3>
            </div>

            <div class="space-y-6">
              <!-- Entry -->
              <div>
                <p class="text-sm text-gray-400">2012 - 2014</p>
                <h4 class="text-lg font-semibold text-gray-900">Harmony Institute</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
              <div>
                <p class="text-sm text-gray-400">2008 - 2012</p>
                <h4 class="text-lg font-semibold text-gray-900">Aurora Academy</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
              <div>
                <p class="text-sm text-gray-400">1996 - 2008</p>
                <h4 class="text-lg font-semibold text-gray-900">Crystalbrook</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
            </div>
          </div>

          <!-- Work Experience Card -->
          <div class="bg-gray-50 p-6 rounded-2xl shadow-sm">
            <div class="flex items-center mb-6">
              <div class="bg-yellow-400 rounded-full p-2">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 7V4H8v3H3v13h18V7h-5zM8 4h8v3H8V4z">
                  </path>
                </svg>
              </div>
              <h3 class="text-xl font-semibold text-gray-800 ml-4">Work Experience</h3>
            </div>

            <div class="space-y-6">
              <!-- Entry -->
              <div>
                <p class="text-sm text-gray-400">2018 - 2024</p>
                <h4 class="text-lg font-semibold text-gray-900">Insightlancer</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
              <div>
                <p class="text-sm text-gray-400">2016 - 2018</p>
                <h4 class="text-lg font-semibold text-gray-900">Self-Employed</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
              <div>
                <p class="text-sm text-gray-400">2014 - 2016</p>
                <h4 class="text-lg font-semibold text-gray-900">KG Graphics Studio</h4>
                <p class="text-sm text-gray-600">Master in Visual Arts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-[#2B3C27] py-20 px-4 md:px-20 text-white">
    <!-- Section Header -->
    <div class="flex justify-between items-center mb-16 flex-wrap gap-6">
      <div>
        <p class="text-yellow-500 text-sm font-medium mb-2">— <span class="text-white">Pricing Table</span></p>
        <h2 class="text-4xl font-medium">
          My <span class="text-yellow-500 italic">Pricing Model</span>
        </h2>
      </div>
      <a href="#"
        class="flex items-center gap-2 px-6 py-3 bg-yellow-500 hover:bg-yellow-600 text-gray-900 font-semibold rounded-full transition">
        Get Started
        <span class="bg-white text-yellow-500 rounded-full p-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </span>
      </a>
    </div>

    <!-- Pricing Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

      <!-- Hourly Plan -->
      <div class="bg-[#384A36] rounded-2xl p-6 flex flex-col justify-between">
        <div>
          <div class="flex justify-between items-start mb-6">
            <h3 class="text-2xl font-semibold">Hourly</h3>
            <span class="bg-yellow-500 text-gray-900 rounded-full p-2">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </div>
          <p class="text-4xl font-bold text-yellow-500 mb-2">$80</p>
          <p class="text-sm text-gray-200 mb-6">/ Hour</p>
          <ul class="space-y-3 text-sm">
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Lorem ipsum dolor sit amet</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Sed ut perspiciatis</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> At vero eos et accusamus</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Vitae dicta sunt explicabo</li>
            <li class="flex items-center gap-2 text-gray-400"><span class="text-yellow-500">✔</span> Veritatis et quasi
              architecto</li>
            <li class="flex items-center gap-2 text-gray-400"><span class="text-yellow-500">✔</span> Beatae vitae dicta
              sunt</li>
            <li class="flex items-center gap-2 text-gray-400"><span class="text-yellow-500">✔</span> Explicabo. Nemo
              enim</li>
            <li class="flex items-center gap-2 text-gray-400"><span class="text-yellow-500">✔</span> Nemo enim ipsam
              voluptatem</li>
          </ul>
        </div>
      </div>

      <!-- Monthly Plan (Highlighted) -->
      <div class="bg-yellow-500 text-gray-900 rounded-2xl p-6 flex flex-col justify-between">
        <div>
          <div class="flex justify-between items-start mb-6">
            <h3 class="text-2xl font-semibold">Monthly</h3>
            <span class="bg-[#2B3C27] text-yellow-500 rounded-full p-2">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </div>
          <p class="text-4xl font-bold mb-2">$9600</p>
          <p class="text-sm mb-6">/ Month</p>
          <ul class="space-y-3 text-sm">
            <li class="flex items-center gap-2"><span class="text-black">✔</span> Lorem ipsum dolor sit amet</li>
            <li class="flex items-center gap-2"><span class="text-black">✔</span> Sed ut perspiciatis</li>
            <li class="flex items-center gap-2"><span class="text-black">✔</span> At vero eos et accusamus</li>
            <li class="flex items-center gap-2"><span class="text-black">✔</span> Vitae dicta sunt explicabo</li>
            <li class="flex items-center gap-2"><span class="text-black">✔</span> Veritatis et quasi architecto</li>
            <li class="flex items-center gap-2"><span class="text-black">✔</span> Beatae vitae dicta sunt</li>
            <li class="flex items-center gap-2 text-yellow-300"><span class="text-black">✔</span> Explicabo. Nemo enim
            </li>
            <li class="flex items-center gap-2 text-yellow-300"><span class="text-black">✔</span> Nemo enim ipsam
              voluptatem</li>
          </ul>
        </div>
      </div>

      <!-- Quarterly Plan -->
      <div class="bg-[#384A36] rounded-2xl p-6 flex flex-col justify-between">
        <div>
          <div class="flex justify-between items-start mb-6">
            <h3 class="text-2xl font-semibold">Quarterly</h3>
            <span class="bg-yellow-500 text-gray-900 rounded-full p-2">
              <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </div>
          <p class="text-4xl font-bold text-yellow-500 mb-2">$28,800</p>
          <p class="text-sm text-gray-200 mb-6">/ Quarter</p>
          <ul class="space-y-3 text-sm">
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Lorem ipsum dolor sit amet</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Sed ut perspiciatis</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> At vero eos et accusamus</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Vitae dicta sunt explicabo</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Veritatis et quasi architecto
            </li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Beatae vitae dicta sunt</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Explicabo. Nemo enim</li>
            <li class="flex items-center gap-2"><span class="text-yellow-500">✔</span> Nemo enim ipsam voluptatem</li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
          <p class="text-gray-300 max-w-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor</p>

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
        <form class="space-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <input type="text" placeholder="Ex. John Doe"
              class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" required />
            <input type="email" placeholder="example@gmail.com"
              class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" required />
            <input type="tel" placeholder="Enter Phone Number"
              class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" required />
            <select class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" required>
              <option disabled selected>Select</option>
              <option>App Design</option>
              <option>Website</option>
            </select>
            <select class="bg-[#2f4b37] p-4 rounded-md w-full text-white outline-none" required>
              <option disabled selected>Select Range</option>
              <option>$500 - $1000</option>
              <option>$1000 - $3000</option>
            </select>
            <select class="bg-[#2f4b37] p-4 rounded-md w-full text-white outline-none" required>
              <option disabled selected>Select Country</option>
              <option>USA</option>
              <option>UK</option>
            </select>
          </div>
          <textarea placeholder="Enter here.." rows="4"
            class="bg-[#2f4b37] p-4 rounded-md w-full text-white placeholder-gray-400 outline-none" required></textarea>
          <button type="submit"
            class="bg-yellow-500 text-black font-medium px-6 py-3 rounded-full flex items-center gap-2 hover:bg-yellow-400">
            Submit <span>➡️</span>
          </button>
        </form>
      </div>
    </section>

    <!-- Bottom Bar -->
    <div
      class="bg-yellow-500 text-black py-4 px-8 flex flex-wrap justify-center items-center gap-6 text-base font-semibold">
      <div>App Design</div>
      <div>✳️</div>
      <div>Website Design</div>
      <div>✳️</div>
      <div>Dashboard</div>
      <div>✳️</div>
      <div>Wireframe</div>
    </div>
    <section class="bg-gray-50 py-20 px-6 md:px-20">
      <div class="text-center mb-12">
        <p class="font-medium text-sm mb-2"><span class="text-yellow-500">— </span>Clients Testimonials</p>
        <h2 class="text-4xl font-bold mb-2">
          The Impact of My Work: <br />
          <span class="text-yellow-500 italic font-medium">Client Testimonials</span>
        </h2>
      </div>

      <div class="flex flex-col lg:flex-row gap-6 justify-center">
        <!-- Testimonial Card 1 -->
        <div class="bg-white rounded-xl p-6 shadow-sm w-full max-w-md">
          <div class="flex items-center gap-2 text-yellow-500 mb-2">
            <span class="text-xl">★★★★★</span>
            <span class="text-black font-semibold ml-1">5.0</span>
          </div>
          <p class="text-gray-600 mb-6">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
          </p>
          <div class="flex items-center gap-4">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Leslie Alexander"
              class="w-10 h-10 rounded-full" />
            <div>
              <p class="font-semibold text-gray-800">Leslie Alexander</p>
              <p class="text-sm text-gray-500">Founder, EV Charger Station</p>
            </div>
          </div>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="bg-white rounded-xl p-6 shadow-sm w-full max-w-md">
          <div class="flex items-center gap-2 text-yellow-500 mb-2">
            <span class="text-xl">★★★★★</span>
            <span class="text-black font-semibold ml-1">5.0</span>
          </div>
          <p class="text-gray-600 mb-6">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
            architecto beatae vitae dicta sunt explicabo.
          </p>
          <div class="flex items-center gap-4">
            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Albert Flores"
              class="w-10 h-10 rounded-full" />
            <div>
              <p class="font-semibold text-gray-800">Albert Flores</p>
              <p class="text-sm text-gray-500">CTO, Software Agency</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation Arrows -->
      <div class="flex justify-center mt-10 gap-4">
        <button
          class="bg-[#2B3C27] text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-[#1f2c1b]">
          ←
        </button>
        <button
          class="bg-yellow-500 text-black w-10 h-10 rounded-full flex items-center justify-center hover:bg-yellow-400">
          →
        </button>
      </div>
    </section>
    <section class="bg-white py-20 px-6 md:px-20">
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
        <div>
          <p class="font-medium text-sm mb-2"><span class="text-yellow-500">— </span>News & Blogs</p>
          <h2 class="text-4xl font-bold">
            Our Latest <br />
            <span class="text-yellow-500 italic font-medium">News & Blogs</span>
          </h2>
        </div>
        <a href="blogs.html"
          class="mt-4 md:mt-0 bg-[#2B3C27] text-white px-6 py-2 rounded-full flex items-center gap-2 hover:bg-[#1f2c1b]">
          View All Blogs
          <span class="bg-yellow-400 text-black w-6 h-6 flex items-center justify-center rounded-full">→</span>
        </a>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <!-- Blog Card 1 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <div class="relative">
            <img src="image\blog1.png" alt="Blog Image 1" class="w-full h-56 object-cover" />
          </div>
          <div class="p-4">
            <div class="flex gap-2 mb-2">
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">App UIUX Design</span>
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">21 May 2024</span>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Minimalist UI Design: Benefits and Best Practices
            </h3>
            <p class="text-gray-600 text-sm mb-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
            </p>
            <a href="#" class="text-green-700 font-medium hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <img src="image\blog2.png" alt="Blog Image 2" class="w-full h-56 object-cover" />
          <div class="p-4">
            <div class="flex gap-2 mb-2">
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">Website UIUX Design</span>
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">20 May 2024</span>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Improving User Experience: Best Practices for Web Design
            </h3>
            <p class="text-gray-600 text-sm mb-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
            </p>
            <a href="#" class="text-green-700 font-medium hover:underline">Read More</a>
          </div>
        </div>

        <!-- Blog Card 3 -->
        <div class="bg-white rounded-xl overflow-hidden shadow-sm">
          <img src="image\blog3.png" alt="Blog Image 3" class="w-full h-56 object-cover" />
          <div class="p-4">
            <div class="flex gap-2 mb-2">
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">Color Theory</span>
              <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full">19 May 2024</span>
            </div>
            <h3 class="text-lg font-semibold mb-2">
              Understanding the Color Wheel: Basics Every Designer...
            </h3>
            <p class="text-gray-600 text-sm mb-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...
            </p>
            <a href="#" class="text-green-700 font-medium hover:underline">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-[#29452C] text-white py-20 px-6 md:px-20">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <p class="text-yellow-400 text-sm mb-2">— <span class="text-white #FAQs">FAQs</span></p>
        <h2 class="text-4xl font-bold">
          Questions? <span class="italic text-yellow-400 font-medium">Look here.</span>
        </h2>
      </div>

      <!-- Accordion -->
      <div class="space-y-4 max-w-4xl mx-auto">

        <!-- Item 1 -->
        <div class="bg-[#416848] rounded-lg p-5 flex justify-between items-center cursor-pointer">
          <span class="text-white text-base font-medium">What industries have you worked in as a product
            designer?</span>
          <span class="text-white text-2xl">+</span>
        </div>

        <!-- Item 2 (active/open) -->
        <div class="bg-yellow-400 rounded-lg p-5 space-y-2 text-black">
          <div class="flex justify-between items-center cursor-pointer">
            <span class="font-medium">Can I download your resume/CV for information ?</span>
            <span class="text-2xl">−</span>
          </div>
          <p class="text-sm">
            Certainly! You can download my resume/CV directly from my website. It provides a comprehensive overview of
            my
            education, work experience, and design achievements.
          </p>
        </div>

        <!-- Item 3 -->
        <div class="bg-[#416848] rounded-lg p-5 flex justify-between items-center cursor-pointer">
          <span class="text-white text-base font-medium">Are you available for freelance design work ?</span>
          <span class="text-white text-2xl">+</span>
        </div>

        <!-- Item 4 -->
        <div class="bg-[#416848] rounded-lg p-5 flex justify-between items-center cursor-pointer">
          <span class="text-white text-base font-medium">What tools do you use for your design work?</span>
          <span class="text-white text-2xl">+</span>
        </div>

        <!-- Item 5 -->
        <div class="bg-[#416848] rounded-lg p-5 flex justify-between items-center cursor-pointer">
          <span class="text-white text-base font-medium">How do I navigate through your portfolio projects?</span>
          <span class="text-white text-2xl">+</span>
        </div>
      </div>
    </section>
    <!-- Top Tag Bar -->
    <div class="bg-yellow-400 text-black py-3 px-4 flex flex-wrap justify-center gap-8 font-medium text-sm">
      <span>App Design</span>
      <span>✴︎</span>
      <span>Website Design</span>
      <span>✴︎</span>
      <span>Dashboard</span>
      <span>✴︎</span>
      <span>Wireframe</span>
    </div>

    <!-- Footer Main -->
    <footer class="bg-white text-gray-700 py-14 px-6 md:px-20 border-t">
      <!-- Header -->
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
            <div class="bg-yellow-400 text-black font-bold w-8 h-8 flex items-center justify-center rounded-full">O
            </div>
            <span class="font-semibold text-lg">Olivia<span class="text-black">.</span></span>
          </div>
          <p class="text-gray-500 mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
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

    <?php include 'footer.php'; ?>

</html>