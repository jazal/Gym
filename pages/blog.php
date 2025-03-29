<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Blog Post</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
  </head>

  <style>
    
    .blog-section {
      max-width: 800px;
      margin: 0 auto;
      background: #1e1e1e;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #f36100;
    }

    input[type="text"],
    textarea,
    input[type="datetime-local"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #f36100;
      background-color: #2c2c2c;
      color: #fff;
    }

    textarea {
      resize: vertical;
      height: 100px;
    }

    button {
      padding: 10px 20px;
      background-color: #f36100;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #d94f00;
    }
  </style>

<body>

  <!-- header -->

  <?php include 'header.php'; ?>

  <div class="blog-section">
    <h2>Create Blog Post</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="title">Blog Title</label>
        <input type="text" id="title" name="title" required />
      </div>
      <div class="form-group">
        <label for="datetime">Date & Time</label>
        <input type="datetime-local" id="datetime" name="datetime" required />
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
      </div>
      <button type="submit">Publish</button>
    </form>
  </div>

  <div class="table">
    <h2>Published Blogs</h2>
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Date & Time</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>First Blog Title</td>
          <td>2025-03-20T14:30</td>
          <td>This is a sample description of the blog post.</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>

</html>