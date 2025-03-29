<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GYM</title>
  <link rel="stylesheet" href="../styles/main.css" />
  <link rel="stylesheet" href="../styles/input-style.css" />
</head>

<!-- header -->
<?php include 'header.php'; ?>

<style>
  .payment-form {
    background-color: #1e1e1e;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.4);
    max-width: 400px;
    width: 100% width: 100%;
    margin: auto;
    margin-top: 70px;
    margin-bottom: 70px;
    ;
    
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
    margin-bottom: 5px;
    font-weight: bold;
    color: #ccc;
  }

  input {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #333;
    background-color: #2c2c2c;
    color: #fff;
    font-size: 1rem;
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
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #d94f00;
  }
</style>

</style>

<body>
  <div class="payment-form">
    <h2>Make a Payment</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text"  name="name"  placeholder="Full Name" required />
      </div>
      <div class="form-group">
        <label for="card">Card Number</label>
        <input type="text" name="card" maxlength="16"  placeholder="Card Number" required />
      </div>
      <div class="form-group">
        <label for="expiry">Expiry Date</label>
        <input type="text"  name="expiry" placeholder="MM/YY" required />
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="number" name="cvv" maxlength="3"   placeholder="CVV"  required />
      </div>
      <div class="form-group">
        <label for="amount">Amount ($)</label>
        <input type="number" name="amount"  placeholder="Amount" required />
      </div>
      <button type="submit">Pay Now</button>
    </form>
  </div>



  <!-- footer -->
  <?php include 'footer.php'; ?>

</body>
<script src="scripts/script.js"></script>