

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integration</title>
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
                <h1 style ="align-content: center;">Paystack Payment Integration</h1>
                <img id="img" src="./images/g.jpg" />
                <h2 class="alert-success" id="root">Pice: #111,500</h2>
                <h3 style="color: red;" id="msg"> </h3>
            <form action="pay.php" id="register" method="POST">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" class="form-control" name="first_name" id="firstName"/>
                </div>

                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" name="last_name" id="lastName"/>
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" id="email" autocomplete/>
                </div>

                <div class="form-group">
                    <label>Price:</label>
                    <select name="amount">
               <option value="2000">2000</option>
                <option value="3000">4000</option>
                <option value="5000">5000</option>
                <option value="6000">6000</option>
                <option value="7000">7000</option>
            </select>
                </div>                

                <div class="form-group"> 
                    <label>Number:</label>
                    <input type="number" class="form-control" name="phone" id="phone"/>
                </div>

                <div class="form-group"> 
                    <label>Address</label>
                    <input type="text" class="form-control" name="location1" id="location"/>
                </div>

                <button type="submit" name="submit">submit</button>
            </form>
            
</div>

<script>
    function validate(e){
        
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var location = document.getElementById("location").value;

        if(firstName == '' || lastName == '' || email == '' || phone == '' || loaction == '' ){
            document.getElementById("msg").innerHTML = "fill up the empty fields!";
            e.preventDefault();
        } else {
            document.getElementById("msg").innerHTML = "";
        }
    }
    document.getElementById("register").addEventListener('submit', validate, false);
</script>
</body>
</html>