<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="header">
        <h1> Please register and come to the competition!</h1>
</div>

    <?php include './php/nav-bar.php'?>

    <p>Complete the following form and then click the participate button</p>

    <form id = "MyForm" class ="form" action="./php/register.php" method="POST" onsubmit="myFunction()">

    <label for="fname">Firstname</label>
    <input type="text" id="fname" name="fname" required>
    <p id ="fname-error">Please insert a valid name</p>

    <label for="lname">Lastname</label>
    <input type="text" id="lname" name="lname" required>
    <p id="lname-error" >Please insert a valid name</p>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <p id="email-error"> Please insert a valid email</p>

    <label for="mobile">Phone number</label>
    <input type="tel" id="mobile" name="mobile" required>
    <p id="mobile-error">Please insert a valid phone number </p>

    <input type="submit" value="Participate" id="submit">  

    </form>

    <?php include './php/footer.php' ?>  
    <script src="./js/form-validation.js"></script>
</body>
</html>