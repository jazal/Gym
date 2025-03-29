<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GYM</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
</head>

<body>
  <!-- header -->
  <?php include 'header.php'; ?>

  <!-- Banner -->
  <main>
    <div class="banner">
      <div class="hero">
        <div class="hero_inner">
          <p class="section_title main-heading">
            <span class="letter primary" style="opacity: 1">F</span><span class="letter primary"
              style="opacity: 1">I</span><span class="letter primary" style="opacity: 1">T</span><span
              class="letter primary" style="opacity: 1">Z</span><span class="letter primary"
              style="opacity: 1">0</span><span class="letter primary" style="opacity: 1">N</span><span
              class="letter primary" style="opacity: 1">E</span>
            <span class="letter" style="opacity: 1">&amp;</span>
            <span class="letter" style="opacity: 1">F</span><span class="letter" style="opacity: 1">I</span><span
              class="letter" style="opacity: 1">T</span><span class="letter" style="opacity: 1">N</span><span
              class="letter" style="opacity: 1">E</span><span class="letter" style="opacity: 1">S</span><span
              class="letter" style="opacity: 1">S</span>
            <br />
            <span class="letter" style="opacity: 1">C</span><span class="letter" style="opacity: 1">E</span><span
              class="letter" style="opacity: 1">N</span><span class="letter" style="opacity: 1">T</span><span
              class="letter" style="opacity: 1">R</span><span class="letter" style="opacity: 1">E</span>
          </p>
        </div>
      </div>
    </div>
  </main>


  <!-- <div>package</div> -->

  <div class="container">
    <h2>Packages</h2>
    <div class="packages-grid">
      <div class="package">
        <div class="package-content">
          <div class="package-title">Basic Package</div>
          <div class="package-description">Access to gym equipment only.</div>
          <div class="package-price">$30 / month</div>
        </div>
      </div>

      <div class="package">
        <div class="package-content">
          <div class="package-title">Standard Package</div>
          <div class="package-description">Includes gym, group classes, and locker access.</div>
          <div class="package-price">$50 / month</div>
        </div>
      </div>

      <div class="package">
        <div class="package-content">
          <div class="package-title">Premium Package</div>
          <div class="package-description">All features + personal trainer and spa access.</div>
          <div class="package-price">$80 / month</div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <!-- blogs -->
  <style>
    .blog-container {
      max-width: 800px;
      margin: 70px auto;
      padding: 30px;
      background-color: #1e1e1e;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
      transform: translateY(50px);
      opacity: 0;
      animation: fadeInUp 5s ease-out forwards;
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



    <!-- touch us and apoointment -->

    <style>
      .section-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      max-width: 1200px;
      margin: 40px auto;
      animation: fadeIn 1s ease-out both;
    }
    .appointment-section, .contact-section {
      flex: 1 1 400px;
      background-color: #1e1e1e;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
      transform: translateY(30px);
      opacity: 0;
      animation: slideUp 5s ease forwards;
    }
    .contact-section {
      animation-delay: 0.2s;
    }
    h2 {
      text-align: center;
      color: #f36100;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 6px;
      color: #ccc;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      background-color: #2c2c2c;
      border: 1px solid #333;
      border-radius: 6px;
      color: #fff;
      font-size: 1rem;
    }
    textarea {
      resize: vertical;
    }
    button {
      width: 100%;
      padding: 12px;
      background-color: #f36100;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.2s;
    }
    button:hover {
      background-color: #d94f00;
      transform: scale(1.03);
    }
    .contact-info {
      font-size: 1rem;
      color: #ccc;
      line-height: 1.6;
    }
    .contact-info p span {
      color: #f36100;
      font-weight: bold;
    }

    @keyframes slideUp {
      from {
        transform: translateY(30px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    </style>


    <div class="section-container">
      <div class="appointment-section">
        <h2>Get Appointment</h2>
        <form action="#" method="post">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="date">Preferred Date</label>
            <input type="date" id="date" name="date" required />
          </div>
          <div class="form-group">
            <label for="time">Preferred Time</label>
            <input type="time" id="time" name="time" required />
          </div>
          <div class="form-group">
            <label for="message">Message (Optional)</label>
            <textarea id="message" name="message" rows="4"></textarea>
          </div>
          <button type="submit">Book Appointment</button>
        </form>
      </div>

      <div class="contact-section">
        <h2>Get in Touch</h2>
        <div class="contact-info">
          <p><span>Email:</span> info@fitzone.com</p>
          <p><span>Phone:</span> +1 234 567 890</p>
          <p><span>Address:</span> 123 Gym Street, City, Country</p>
          <p><span>Hours:</span> Mon - Sat: 6am - 10pm</p>
          <p><span>Socials:</span> Facebook | Instagram | Twitter</p>
        </div>
      </div>
    </div>

    <!-- footer -->

    <?php include 'footer.php'; ?>

  </body>


  <script src="scripts/script.js"></script>

</html>