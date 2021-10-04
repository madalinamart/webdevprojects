<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>My recipes</title>
</head>
<body>
<body>
  <div class="header">
    <h1> Some of my recipes </h1>      
  </div>

   <?php include './php/nav-bar.php' ?>

    <div class = "content">
        <p>Here are some of the recipes I am most proud of!</p>
        <p>They are really simple and made for everyone</p>

    </div>

    <div class ="recipes" style="background-image:url(./images/muffins.jpg)">  
        <div class ="wrapper"> 
        <div><p>Ingredients:</p>
            <ul>
                <li>50g butter</li>
                <li>200g grated cheese</li>
                <li>300g flour</li>
                <li>baking soda</li>
                <li>baking powder</li>
                <li>1 egg</li>
                <li>milk</li>
            </ul>
            <p>Instructions:</p>
            <ol>
                <li>Preheat oven to 180C</li>
                <li>Mix all ingredients</li>
                <li>Bake for 20 minutes</li>
            </ol>
        </div>
        </div>
    </div>

    <div class ="recipes" style="background-image:url(./images/pizza.jpg)">   
       <div class="wrapper">
        <div><p>Ingredients:</p>
             <ul>
                 <li>1kg flour</li>
                 <li>1 cup olive oil</li>
                 <li>1tsb salt</li>
                 <li>1tsb sugar</li>
                 <li>baking powder</li>
                 <li>Your toppings</li>
             </ul>
             <p>Instructions:</p>
             <ol>
                 <li>Mix everything apart from the toppings</li>
                 <li>Let rise for ca 2hours</li>
                 <li>Preheat oven to 200C</li>
                 <li>Add your toppings</li>
                 <li>Bake for 20/25mins</li>
             </ol>
        </div>
        </div>
    </div>

    <div class ="recipes" style="background-image:url(./images/tortadellanonna.jpg)">  
    <div class="wrapper"> 
        <div><p>Ingredients:</p>
        
            <ul>
                <li>300g flour</li>
                <li>baking powder</li>
                <li>100g sugar</li>
                <li>1 large egg + 1 yolk</li>
                <li>lemon zest</li>
                <li>5 large yolks</li>
                <li>30g flour</li>
                <li>600ml milk</li>
                <li>1 lemon peeled</li>
            </ul>
            <p>Instructions:</p>
            <ol>
                <li>Make the base by mixing all ingredients</li>
                <li>Make the cream</li>
                <li>Assemble!</li>
            </ol>
        </div>
        </div>
    </div>

    <?php include './php/footer.php' ?>
    <script src="./js/test.js"></script>
    
</body>
</html>