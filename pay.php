<?php 
// $amount = 111500;
// select amount ...
if(isset($_POST['amount'])){
  if(!empty($_POST['amount'])) {
      $amount = $_POST['amount'];
  } else {
      $amount;
  }
  }

// sanitize form inputs from users(if any user do any harmful stuff to this form, it will sanitize it.)
$sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

//collect user's inputs from the form into regular variable
$first_name = $sanitizer['first_name'];
$last_name = $sanitizer['last_name'];
$phone = $sanitizer['phone'];
$email = $sanitizer['email'];
$product_name = "Paystack payment Gateway";
$location1 = $sanitizer['location1'];

// fill up the empty space
if(empty($first_name) OR empty($last_name) OR empty($phone) OR empty($email)) {
  header("Location: index.php?error");
 
} else {
  // echo "your name is  " . $first_name . " " . "and email is" . " ". $email;
  // sending out those varaibles
  session_start();
  $_SESSION['first_name'] = $first_name;
  $_SESSION['last_name'] = $last_name;
  $_SESSION['phone'] = $phone;
  $_SESSION['product_name'] = $product_name;
  $_SESSION['email'] = $email;
  $_SESSION['amount'] = $amount;
  $_SESSION['location1'] = $location1;
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
</head>
<body>
    <h2>Hi, <?php echo $email ?> </h2>
   
 <form id="paymentForm">
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay Now! </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: 'pk_test_7ba65dbdaea9c3d512f58fb964f48fa80ee14bb7', // Replace with your public key
    email: '<?php echo $email; ?>',
    amount: <?php echo $amount*100 ?>,
    ref: 'TD'+ Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    first_name: "<?php echo $first_name; ?>",
    last_name: "<?php echo $last_name; ?>",
    metadata: {
      custom_fields: [
        {
          display_name: "<?php echo $first_name; ?>",
          variable_name: "<?php echo $last_name; ?>",
          value: "<?php echo $phone; ?>",
        }
      ]
    },
   
    callback: function(response){
      const message = ' ' + response.reference;
      // alert(message);
      window.location.href='success.php?successfullypaid='+ message;
    },
    onClose: function(){
      alert('Window closed.');
    }
  });
  handler.openIframe();
}
</script>

</body>
</html>