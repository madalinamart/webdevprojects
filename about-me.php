<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <div class="header">
    <h1> About me </h1>      
  </div>

    <img id="header-img" src="./images/profile.jpg" alt="my photo" >

    <?php include './php/nav-bar.php' ?>

    <div class="content">
     <div class="main">
        <div class="main-content">
        <p id="about ">Hey! My name is Madalina Martiniuc, I am 24 years old and really enjoy programming.
           I have lots of interesting things to say about me: I really enjoy morning walks, 
           black coffe, good food... All the usual things! I have lots of friends whom I love to
           spend my time with.
        </p>
        <p id ="experience">
            I don't really have experience working as I am still in my last year of university but,
            I like working on personal projects.
            I really like programming and improving my skills everyday.. Some of the courses I have
            attended in university are:
        </p>
        <div class="wrapper">
        <ul>
            <li>Java programming:
                <ol>
                    <li>java basics</li>
                    <li>OOP</li>
                    <li>errors and exceptions</li>
                    <li>binary search trees</li>                    
                </ol>
            </li>
            <li>web developing</li>
            <ol>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySql</li>
            </ol>
            <li>C++</li>
            <li>Linux</li>
            <li>Web Security</li>
            <li>Algorithms and data structures</li>
        </ul>
        </div>
        </div>
        <div class="side-bar">
           <h2>My Info:</h2> 
           <img id ="side-img" src ="./images/sidebar.jpg" alt="me trying on a dress">
           <div class="wrapper">
           <ol>
               <li><strong>First Name:</strong> Madalina</li>
               <li><strong>Last Name:</strong> Martiniuc</li>
               <li><strong>Birth Date:</strong> 26/03/1997</li>
               <li><strong>University:</strong>Dipartimento di Informatica, University of Turin</li>  
               <li><strong>Email:</strong> mmartiniuc7@gmail.com </li>         
               <li><strong>Phone number:</strong> +40750802090</li>
               <li><strong>Github:</strong> <a href="https://github.com/madalinamart">
                    https://github.com/madalinamart</a></li>
           </ol>
           </div>
        </div>
     </div>
    </div>

     <?php include './php/footer.php' ?>
    
</body>
</html>
