<?php
echo <<<HTML

<style>
 footer {
    background-color: #1e1e1e;
    color: #fff;
    padding: 40px 20px 20px;
    font-family: Arial, sans-serif;
  }
  .footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: auto;
  }
  .footer-logo img {
    width: 60px;
    margin-bottom: 10px;
  }
  .footer-logo p {
    font-size: 1rem;
    color: #f36100;
    font-weight: bold;
  }
  .footer-links ul {
    list-style: none;
    padding: 0;
  }
  .footer-links ul li {
    margin-bottom: 8px;
  }
  .footer-links ul li a {
    color: #ccc;
    text-decoration: none;
  }
  .footer-links ul li a:hover {
    color: #f36100;
  }
  .footer-contact p {
    margin: 6px 0;
    color: #ccc;
  }
  .footer-social a img {
    width: 24px;
    margin-right: 10px;
    transition: transform 0.2s;
  }
  .footer-social a img:hover {
    transform: scale(1.2);
  }
  .footer-bottom {
    text-align: center;
    margin-top: 30px;
    padding-top: 15px;
    border-top: 1px solid #333;
    font-size: 0.9rem;
    color: #888;
  }

</style>




<footer>
  <div class="footer-container">
    <div class="footer-logo">
      <img src="../images/logo.png" alt="Gym Logo" />
      <p>Fitzone & Fitness Centre</p>
    </div>
    <div class="footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="../pages/about-us.php">About Us</a></li>
        <li><a href="../pages/contact-us.php">Contact</a></li>
        <li><a href="../pages/appointment.php">Appointments</a></li>
      </ul>
    </div>
    <div class="footer-contact">
      <h4>Contact Us</h4>
      <p>Email: info@fitzone.com</p>
      <p>Phone: +1 234 567 890</p>
      <p>Location: 123 Gym Street, City</p>
    </div>
    <div class="footer-social">
      <h4>Follow Us</h4>
      <a href="#"><img src="../images/facebook.png" alt="Facebook"></a>
      <a href="#"><img src="../images/instagram.png" alt="Instagram"></a>
      <a href="#"><img src="../images/whatsapp.png" alt="Whatapp"></a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 Fitzone. All Rights Reserved.</p>
  </div>
</footer>






HTML;
?>