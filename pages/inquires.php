<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GYM</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
  <style>
    /* inquires */

    .inquiry-section {
      max-width: 800px;
      margin: 0 auto;
      background: #1e1e1e;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .inquiry {
      background-color: #2c2c2c;
      border-left: 5px solid #f36100;
      padding: 15px;
      margin-bottom: 15px;
      border-radius: 5px;
    }

    .inquiry-title {
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 5px;
    }

    .inquiry-message {
      font-size: 0.95rem;
      color: #ddd;
    }

    .inquiry-meta {
      font-size: 0.85rem;
      color: #999;
      margin-top: 10px;
    }
  </style>
</head>

<body>

  <!-- header -->
  <?php include 'header.php'; ?>

  <div class="inquiry-section">
    <h2>List of Inquiries</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Message</th>
          <th>Email</th>
          <th>Phone No</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John Doe</td>
          <td>I would like to know more about the Premium Package.</td>
          <td>john@example.com</td>
          <td>44545454</td>
          <td>2025-03-20</td>
        </tr>
        <tr>
          <td>Jane Smith</td>
          <td>
            Do you offer personal training with the standard membership?
          </td>
          <td>jane@example.com</td>
          <td>44545454</td>
          <td>2025-03-19</td>
        </tr>
        <tr>
          <td>Mike Lee</td>
          <td>Is there a discount for long-term membership?</td>
          <td>mike@example.com</td>
          <td>44545454</td>
          <td>2025-03-18</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>
</body>

</html>