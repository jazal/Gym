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

  <!-- Contact Us -->
  <div class="container">
    <div class="form-container">
      <div class="row">
        <h1 style="font-size: 300%; text-align: center">Contact Us</h1>
      </div>
      <div class="row">
        <h5 style="text-align: center">We'd love to hear from you!</h5>
      </div>

      <div>
        <label>Name</label>
        <input type="text" required />
      </div>
      <div>
        <label>Email</label>
        <input type="text" required />
      </div>
      <div>
        <label>Phone Number</label>
        <input type="text" required />
      </div>
      <div>
        <label>Message</label>
        <textarea required></textarea>
      </div>
      <button type="submit">Submit</button>
    </div>
  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>
<script src="scripts/script.js"></script>

</html>