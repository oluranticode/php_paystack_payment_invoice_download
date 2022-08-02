<?php 
include_once("db.php"); 
$sql = "SELECT * FROM stack";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$ebooks = $stmt->fetchAll();
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
    <div class="container">
    <h2> My Customers </h2>

    <table class="table ">
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Product Name</th>
    <th>Amount</th>
    <th>Reference Number</th>
    <th>Address</th>
    <th>Date purchase</th>
    </tr>

    <?php foreach($ebooks as $ebook): ?>
    <tr>
    <!-- -->
    <td><?= $ebook->first_name; ?> </td>
    <td><?= $ebook->last_name; ?> </td>
    <td><?= $ebook->email; ?> </td>
    <td><?= $ebook->phone; ?> </td>
    <td><?= $ebook->product_name; ?> </td>
    <td><?= $ebook->amount; ?> </td>
    <td><?= $ebook->reference; ?> </td>
    <td><?= $ebook->location1; ?> </td>
    <td><?= $ebook->date_purchase; ?> </td>
    </tr>
    <?php endforeach; ?>
    
    </table>

    </div>
</body>
</html>