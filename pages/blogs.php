<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GYM</title>
    <link rel="stylesheet" href="../styles/main.css" />
    <link rel="stylesheet" href="../styles/input-style.css" />
</head>

<style>
     body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #121212;
      color: #fff;
      margin: 0;
      padding: 0 20px;
      overflow-x: hidden;
    }
    .blog-container {
      max-width: 800px;
      margin: 70px auto;
      padding: 30px;
      background-color: #1e1e1e;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
      transform: translateY(50px);
      opacity: 0;
      animation: fadeInUp 2s ease-out forwards;
      transition: background-color 0.3s ease;
    }
    @keyframes fadeInUp {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
    .blog-title {
      font-size: 2.5rem;
      color: #f36100;
      margin-bottom: 20px;
      text-align: center;
      position: relative;
    }
    .blog-title::after {
      content: '';
      width: 60px;
      height: 4px;
      background-color: #f36100;
      display: block;
      margin: 10px auto 0;
      border-radius: 2px;
    }
    .blog-description {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #ddd;
      animation: fadeIn 1.5s ease-in-out;
    }
    .blog-description ul {
      list-style-type: square;
      padding-left: 20px;
      margin-top: 15px;
    }
    .blog-description li {
      margin-bottom: 10px;
      transition: transform 0.3s;
    }
    .blog-description li:hover {
      transform: translateX(10px);
      color: #f36100;
    }
    .blog-description p {
      margin-top: 20px;
    }
</style>

<body>
    <!-- header -->
    <?php include 'header.php'; ?>




    <div class="blog-container">
        <div class="blog-title">5 Reasons to Join Fitzone & Fitness Centre Today</div>
        <div class="blog-description">
            <p>Looking to transform your fitness journey? Here's why Fitzone & Fitness Centre is the perfect place for
                you:</p>
            <ul>
                <li><strong>Expert Trainers:</strong> Certified professionals to guide you every step of the way.</li>
                <li><strong>Modern Equipment:</strong> State-of-the-art machines and tools for every workout.</li>
                <li><strong>Flexible Memberships:</strong> Choose from basic, standard, and premium packages.</li>
                <li><strong>Group Classes:</strong> From yoga to HIIT, there's something for everyone.</li>
                <li><strong>Community Support:</strong> Be part of a supportive and motivating environment.</li>
            </ul>
            <p>Don't wait—take the first step toward a healthier, stronger you. Visit us or sign up online today!</p>
        </div>
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>

</html>