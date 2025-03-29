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

  <div>
    <h2 class="text-center">Register</h2>
    <div class="container">
      <div class="form-container">
        <form action="" method="post">

          <div class="input-group">
            <label for="title">Title</label>
            <input type="text" name="name" placeholder="Name" required />
          </div>

          <div class="input-group">
            <label for="nic">nic</label>
            <input type="number" name="nic" placeholder="Nic" required />
          </div>

          <div class="input-group">
            <label for="number">date of birth</label>
            <input type="date" name="dOB" placeholder="date Of Birth" required />
          </div>

          <div class="input-group">
            <label for="number">BMICH</label>
            <input type="number" name="weight" placeholder="weight" required />
            <br><br>
            <input type="number" name="height" placeholder="height" required />
          </div>

          <div class="input-group">
            <label for="number">Email</label>
            <input type="email" name="email" placeholder="Email" required />
          </div>

          <div class="input-group">
            <label for="number">Password</label>
            <input type="password" name="password" placeholder="Password" required />
          </div>

          <div class="input-group">
            <label for="number">Confirm password</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required />
          </div>

          <button type="submit">Register</button>

        </form>
      </div>
    </div>
  </div>


  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>
<script src="scripts/script.js"></script>

</html>