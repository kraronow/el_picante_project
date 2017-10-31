<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>El Picante Location </title>

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
      <h1> El Picante's Location </h1>

  <section>
   <p> El Picante is conveniently located at it's mysterious location on the corner of Fake Dr and Cathy's Mountain Dr. in the lovely city of Luray, VA.</p> 

    <br />
    <img src="img/el_picante_location.png" alt="El Picante Address!">
    <br />
    <a href="https://www.google.com/maps/place/123+Fake+Dr,+Luray,+VA+22835/@38.7061942,-78.5086935,17z/data=!3m1!4b1!4m5!3m4!1s0x89b4525bc2304f89:0xef386d205eb572a4!8m2!3d38.70619!4d-78.5065048"> 123 Fake Dr. Luray, VA 22835</a>  
    </section>

    <?php include 'footer.php'; ?>

    </div>
    </div>

   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>