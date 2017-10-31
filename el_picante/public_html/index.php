<!--- Owner is Kayla Aronow -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

      <title>El Picante Home</title>

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
       <h1 style="text-align:center"><strong>Home</strong></h1>

   <div class="mycolor col-xs-12 col-md-6">
   <h2> El Picante is a premiere Mexican restaurant proudly serving the Luray, VA area. We pride ourselves on bring to you; Fresh ingredients, friendly service, and always a fun time!</h2>  
   </div>
   

   <div class="mycolor col-xs-12 col-md-6">
   <h2>Weekly Specials</h2>
   <p><b>Monday:</b> Margarita Monday! Enjoy one margarita, get the second one free!</p>
   <p><b>Tuesday:</b> Taco Tuesday! All taco meals are half price!</p>
   <p><b>Wednesday:</b> Kids eat for free!</p>
   <p><b>Thursday:</b> All burritos are half priced!</p>
   <p><b>Friday:</b> Buy one meal, get the second one half priced.</p>
   <p><b>Saturday:</b> Enchiladas are half priced!</p>
   <p><b>Sunday:</b> Free desserts!</p>
   </div>
   
  <?php include 'footer.php'; ?>

    </div>
    </div>

   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>