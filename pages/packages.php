<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GYM</title>

  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
  <style>
    /* packages */
    .package {
      border: 1px solid #f36100;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #2c2c2c;
    }

    .package-title {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .package-description {
      margin-bottom: 5px;
    }

    .package-price {
      color: #f36100;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <!-- header -->
  <?php include 'header.php'; ?>

  <div class="container">
    <div class="form-container">
      <div class="row">
        <h1 style="font-size: 300%; text-align: center">Package</h1>
      </div>

      <form action="#" method="post">
        <div class="input-group">
          <label for="title">Title</label>
          <input type="text" name="title" required />
        </div>
        <div class="input-group">
          <label for="desc">Description</label>
          <input type="email" name="desc" required />
        </div>
        <div class="input-group">
          <label for="price">Price</label>
          <input type="email" name="price" required />
        </div>
        <div class="input-group">
          <label for="type">Type</label>
          <select name="type" required>
            <option value="basic">Basic Package</option>
            <option value="standard">Standard Package</option>
            <option value="premium">Premium Package</option>
          </select>
        </div>
        <button type="submit">Create</button>
      </form>

      <h2>Packages</h2>
      <div class="package">
        <div class="package-title">Basic Package</div>
        <div class="package-description">Access to gym equipment only.</div>
        <div class="package-price">$30 / month</div>
      </div>

      <div class="package">
        <div class="package-title">Standard Package</div>
        <div class="package-description">
          Includes gym, group classes, and locker access.
        </div>
        <div class="package-price">$50 / month</div>
      </div>

      <div class="package">
        <div class="package-title">Premium Package</div>
        <div class="package-description">
          All features + personal trainer and spa access.
        </div>
        <div class="package-price">$80 / month</div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>
</body>

</html>