<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GYM</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
  <link rel="stylesheet" href="../styles/Login.css" />
</head>

<body>

  <!-- header -->
  <?php include 'header.php'; ?>

  <div>
    <h2 class="text-center">Login</h2>
  </div>
  <form action="" method="post">
    <input type="text" name="usernmae" placeholder="Usernmae" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="user_type" required>
      <option value="">Select User Type</option>
      <option value="admin">Admin</option>
      <option value="staff">Staff</option>
      <option value="member">Member</option>
    </select>
    <button type="submit">Login</button>

  </form>

  <!-- footer -->
  <?php include 'footer.php'; ?>
</body>
<script src="scripts/script.js"></script>