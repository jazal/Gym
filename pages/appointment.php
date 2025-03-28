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

  <div class="container">
    <h2>Appointment</h2>

    <div class="form-container">
      <form action="" method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" name="full_name" placeholder="Full Name" required />
        </div>

        <div>
          <label for="username">Email</label>
          <input type="email" name="email" placeholder="Email" required />
        </div>

        <div>
          <label for="phone">Phone Number</label>
          <input type="tel" name="phone" placeholder="Phone Number" required />
        </div>

        <div>
          <label for="date&time">Date and Time</label>
          <input type="datetime-local" name="date&time" placeholder="Date and time" required />
        </div>

        <div>
          <label for="Appointment">Appointment</label>
          <select name="appointment_type" required>
            <option value="">Select Appointment Type</option>
            <option value="consultation">Consultation</option>
            <option value="follow-up">Follow-up</option>
            <option value="check-up">Check-up</option>
          </select>
        </div>

        <button type="submit">Book Appointment</button>
      </form>
    </div>

    <div>
      <h2 class="text-center">Apoointment Table</h2>
    </div>

    <table>
      <tr>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE NUMBER</th>
        <th>DATE</th>
        <th>TIME</th>
        <th>APPOINTMENTS</th>


      </tr>
      <tr>
        <td>miSHA</td>
        <td>22222</td>
        <td>445</td>

      </tr>
    </table>

    <!--       
      For Testing
      <div class="form-container">
        <form>
          <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />
          </div>

          <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required />

          </div>

          <div>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required />
          </div>

          <div>

            <label for="bio">Bio</label>
            <textarea id="bio" name="bio" rows="3"></textarea>
          </div>

          <div>
            <label for="gender">Gender</label>
            <select id="gender" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div>
            <label>Subscription</label>
            <input type="radio" id="basic" name="subscription" value="basic" />
            <label for="basic">Basic</label>
            <input
              type="radio"
              id="premium"
              name="subscription"
              value="premium"
            />
            <label for="premium">Premium</label>
          </div>

          <label>
            <input type="checkbox" name="agree" required /> I agree to the terms
          </label>

          <button type="submit">Submit</button>
        </form>
      </div> -->

  </div>

  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>
<script src="scripts/script.js"></script>

</html>