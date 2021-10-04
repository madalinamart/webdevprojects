<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Home</title>
</head>
<body>
  <div class="header">
    <h1> Welcome to my cooking contest </h1>      
  </div>

    <?php include './php/nav-bar.php'  ?>
    <div class = "content">
    <p>For everyone who loves cooking, 
        I have organized a competition to decide who is the best chef around!</p>
    <p> If you are interested, visit some of my recipes or register to the competition</p>

    <img id = "cooking" src="images/cooking.jpg" alt = "cookingshow">
    <h2>Competition informations</h2>
    <p>The competition will be held in 20 days! </p>
    <p>Register yourself and you'll receive all data by mail.</p>

    <div class="wrapper">
    <ul>        
        <li><a href="./participate.php">Participate</a></li>
        <li><a href="./recipes.php">My recipes</a></li>
        <li><a href="./about-me.php">Get to know me</a></li>
    </ul>
    </div>

    </div>
    
    <?php include './php/footer.php' ?>
    
</body>
</html>