<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects - Olivia</title>
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
            background: #1f3c2f;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav a {
            color: white;
            margin: 0 12px;
            text-decoration: none;
            font-weight: 500;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 24px;
            background: white;
            color: #1f3c2f;
            font-weight: 600;
            border: none;
        }

        .page-header {
            text-align: center;
            padding: 60px 20px 20px;
        }

        .breadcrumb {
            color: #777;
            font-size: 14px;
            margin-top: 8px;
        }

        .tabs {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background: #f5a623;
            padding: 12px;
            font-weight: bold;
            gap: 24px;
        }

        .tabs span {
            cursor: pointer;
        }

        .project-gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 30px 20px;
        }

        .project-gallery img {
            max-height: 380px;
            border-radius: 10px;
            object-fit: cover;
        }

        .project-details {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        .project-details h3 {
            color: #f5a623;
            font-weight: bold;
        }

        .project-meta {
            background: #1f3c2f;
            color: white;
            padding: 24px;
            border-radius: 12px;
            margin-top: 20px;
        }

        .project-meta p span {
            font-weight: bold;
            display: inline-block;
            min-width: 100px;
        }

        .section h4 {
            margin-top: 40px;
            color: #1f3c2f;
        }

        ul.benefits {
            list-style: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        ul.benefits li {
            display: flex;
            align-items: center;
            gap: 10px;
            width: calc(33.33% - 20px);
        }

        ul.benefits img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body class="bg-white text-gray-900 scroll-smooth">
    <!-- Navbar -->
    <?php include '../header.php'; ?>

    <div class="page-header">
        <h1>Projects</h1>
        <div class="breadcrumb">Home / Project Details</div>
    </div>

    <div class="tabs">
        <span>App Design</span>
        <span>Website Design</span>
        <span>Dashboard</span>
        <span>Wireframe</span>
    </div>

    <div class="project-gallery">
        <img src="mobile1.png" alt="Mobile screen 1">
        <img src="mobile2.png" alt="Mobile screen 2">
        <img src="mobile3.png" alt="Mobile screen 3">
        <img src="mobile4.png" alt="Mobile screen 4">
        <img src="mobile5.png" alt="Mobile screen 5">
    </div>

    <div class="project-details">
        <h3>Podcast Mobile App Solution</h3>
        <p><strong
                style="font-size: 22px; background: #1f3c2f; color: white; padding: 4px 10px; border-radius: 50%;">L</strong>
            &nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

        <div class="project-meta">
            <p><span>Project Category:</span> App UI/UX Design</p>
            <p><span>Client:</span> Courtney Henry</p>
            <p><span>Duration:</span> 2 Months</p>
            <p><span>Country:</span> United States</p>
        </div>

        <div class="section">
            <h4>The Challenge</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>

            <h4>The Solution</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            <ul class="benefits">
                <li><img src="check-yellow.png" alt="✔"> Sed ut perspiciatis</li>
                <li><img src="check-yellow.png" alt="✔"> Vitae dicta sunt explicabo</li>
                <li><img src="check-yellow.png" alt="✔"> Veritatis et quasi architecto</li>
                <li><img src="check-yellow.png" alt="✔"> Beatae vitae dicta sunt</li>
                <li><img src="check-yellow.png" alt="✔"> Explicabo Nemo enim</li>
                <li><img src="check-yellow.png" alt="✔"> Explicabo Nemo enim</li>
            </ul>
        </div>
    </div>
    <!-- Bottom Bar -->
<?php include '../footer.php'; ?>

</html>