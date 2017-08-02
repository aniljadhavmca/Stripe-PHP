  <script src="https://checkout.stripe.com/checkout.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", function(event) { 
    var handler = StripeCheckout.configure({
      key: "pk_test_1V0y2RCkZmzF1fdtvg9Vc3dv",
      //image: '/stripe/asset/images/bsf-logo.png',
      // locale: 'auto',
      token: function(token) {
       // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
         
         $.ajax({
           url: 'charge.php',
           data: {
              stripeToken: token.id,
              customerMail: token.mail,
              amount: ( jQuery('#bsf-amount').val() * 100 )
           },
           error: function() {
              $('#info').html('<p>An error has occurred</p>');
           },
           dataType: 'json',
           success: function(data) {
              
              console.log(data);

           },
           type: 'POST'
        });

     }
    });

    document.getElementById('bsfStripeButton').addEventListener('click', function(e) {
        // Open Checkout with further options:
        handler.open({
          name: 'Brainstorm Force',
          description: 'One year\'s subscription',
          amount: ( jQuery('#bsf-amount').val() * 100 )
        });
        e.preventDefault();
    });

    // Close Checkout on page navigation:
    //window.addEventListener('popstate', function() {
      //handler.close();
      //do work
    //});
    });
</script>




