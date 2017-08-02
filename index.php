<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

<?php require_once('./new.php'); ?>
<div class="bsf-payment-wrapper">
<h2>Make A Payment</h2>
<p>Simply enter the amount in USD below and click pay now. You will be redirected to a page where you can pay using your PayPal account or debit / credit card.</p>
<div class="bsf-amount-feild">
<input type="number" id="bsf-amount" name="bsf-amount" value="" required/>
</div>
  <div class="bsf-payment-button">
  <button id="bsfStripeButton">Pay Now</button>
  </div>