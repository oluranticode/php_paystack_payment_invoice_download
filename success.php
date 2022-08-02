<?php 
include_once("db.php"); 
// taking in those variables
session_start();
if(!$_GET["successfullypaid"]) {
    header("Location: index.php");
    exit;
} else {
    // it means that if the success page exist it should grab all the code into the variable called reference..
    $reference = $_GET["successfullypaid"];
    }

    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];  
    $phone = $_SESSION['phone'];
    $product_name = $_SESSION['product_name'];
    $email = $_SESSION['email'];
    $amount = $_SESSION['amount'];
    $location1 = $_SESSION['location1'];

    // insert into the database...
    $sql = "INSERT INTO stack(first_name, last_name, email, phone, product_name, amount, reference, location1)
    VALUES(:first_name, :last_name, :email, :phone, :product_name, :amount, :reference, :location1)";
    if($stmt = $pdo->prepare($sql)){
        //Bind prarameters
        $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_STR); 
        $stmt->bindParam(':reference', $reference, PDO::PARAM_STR);
        $stmt->bindParam(':location1', $location1, PDO::PARAM_STR);
        //Attempt to execute
        if($stmt->execute()){
            echo "<script> alert(' Your payment is successful ')</script>";
            //prevent resubmission
            session_unset();
            session_destroy();
        } else {
            die("Ooops! something is wrong!");
        }
        unset($stmt);
        //close connection
        unset($pdo);
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success </title>
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container" id="HTMLtoPDF">
    <h2>Payment Completed! </h2>

    <table class="table ">
    <tr>
    <th>Summary</th>
    </tr>

    <tr>
    <td> First Name : <?php echo $first_name; ?> </td>
    </tr>

    <tr>
    <td> Last Name : <?php echo $last_name; ?> </td>
    </tr>

    <tr>
    <td> Email : <?php echo $email; ?> </td>
    </tr>

    <tr>
    <td> Phone Number : <?php echo $phone; ?> </td>
    </tr>

    <tr>
    <td> Price : <?php echo $amount; ?> </td>
    </tr>

    <tr>
    <td> Product Name : <?php echo $product_name; ?> </td>
    </tr>

    <tr>
    <td> Reference Number : <?php echo $reference ?> </td>
    </tr>

    <tr>
    <td> Address : <?php echo $location1 ?> </td>
    </tr>

    <tr>
    <td> <?php echo "you ordered for this product on :" . date("Y/m/d") . " time: " . date("h:i:sa"); ?> </td>
    </tr>

    <tr>
    <td> your product will be shipped to your door step between max of 7 working days</td>
    </tr>
    </table>

    </div>

    <button id="download" onclick="HTMLtoPDF()">Download your Receipt</button>

    <!-- these js files are used for making PDF -->
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</body>
</html>