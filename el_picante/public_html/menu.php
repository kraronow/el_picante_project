<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>El Picante Menu </title>

      <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">

        <!-- Our custom stylesheet that WE write. We need this to not have our
         text appear under the nav bar. -->
    <link rel="stylesheet" href="custom.css">

</head>

<body>

 <?php include 'navigation.php'; ?>


 <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">

      <p style="text-align:center"><img src="img/logo3.png" alt="El Picante!"></p>

        <div id="title" class="jumbotron">
          <h1>Menu</h1>      
          <p>El Picante offers a variety of traditional, homemade dishes.</p>
        </div>



    <div class="mycolor col-xs-12 col-md-6">
    <article>
      <h2>Tacos</h2>

      <h4>Original</h4>
      <p>Two tacos with lettuce, cheese, tomatoes and sour cream.</p>
      <p>Beef, Chicken, Fish ...$2.00</p>

      <h4>Southwest Chicken Tacos</h4>
      <p>Two tacos with mequite-grilled chicken, cheddar cheese, creamy red chile sauce in hand-pressed flour tortillas ...$3.50</p>

      <h4>Brisket Tacos</h4>
      <p>Two tacos with shredded beef brisket, Jack cheese, fried onion strings and BBQ sauce in warm, hand-pressed flour tortillas ...$4.00</p>

      <h4>Grilled Shrimp Tacos</h4>
      <p>Two hand-pressed tortillas filled with grilled shrimp and lime cabbage-carrot slaw, topped with fresh pico de gallo ...$4.00</p>

      

      
      
      <h2>Burritos</h2>

      <h4>Original</h4>
      <p>Seasoned meat, pico de gallo and cheese rolled in a flour tortilla covered in your choice of sauce.</p>
      <p>Beef, Chicken ...$4.50</p>

      <h4>Super Burrito</h4>
      <p>Refried beans, mexican rice, cheese, sour cream, guacamole and pico de gallo in a flour tortilla topped with red chile sauce ...$4.50</p>
      
      

      

      <h2>Enchiladas</h2>

      <h4>Original</h4>
      <p>Two hand-rolled enchiladas topped with your choice of sauce.</p>
      <p>Beef, Chicken ...$4.50</p>

      <h4>Ranchero Enchiladas</h4>
      <p>Two savory shredded or ground beef enchiladas topped with our ranchero sauce ...$4.00</p>

      
      
      
      <h2>Kids Menu</h2>
      <h4>Enchilada Plate</h4>
      <p>Choice of one seasoned beef, chicken or cheese enchilada. Served with mexican rice and refried beans ...$2.50</p>

      <h4>Mini Tacos</h4>
      <p>Three mini hard shell tacos, with your choice of seasoned beef or chicken, with lettuce, cheese and tomatoes ...$2.50</p>

      <h4>Nachos</h4>
      <p>Big nacho chips topped with refried beans, ground beef, mixed cheese and queso. ...$2.50</p>

      <h2>Sauces</h2> 
      <p>Red chile sauce, sour cream sauce, green chile sauce, ranchero sauce or our signature queso.</p>

      <h2>Margaritas</h2>
      <p>Traditional, Strawberry, Mango ...$5.00</p>
      
      
      
      

      <h2>Desserts</h2>
      <p>Fried Ice Cream ...$2.50</p>
      <p>Churros ...$2.00</p>

      <h2>Sides</h2>
      <p>Spanish Rice ...$1.50</p>
      <p>Refried Beans ...$1.25</p>
      <p>Chips and Salsa ...$1.50</p>
      
      
      
      
    </article>
    </div>
    

    <div class="mycolor col-xs-12 col-md-6">
      <!-- Add menu item pictures -->
      <br>
      <img src="img/taco.png" alt="Taco">
      <img src="img/burrito.png" alt="Burrito">
      <img src="img/enchiladas.png" alt="Enchiladas">
      <img src="img/margaritas.png" alt="Margaritas">
      <img src="img/chips.png" alt="Chips">
    </div>
    </div>
    </div>

    <br>

    <div style="text-align:center">
    <!-- Styled button to make it a link button -->
    <button type="button" onclick="location.href='#title'" class="btn btn-secondary">Back to Top</button>
    </div>

    <br>
    <br>

    <?php include 'footer.php'; ?>



   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>







