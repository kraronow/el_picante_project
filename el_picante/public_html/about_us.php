<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>About El Picante</title>

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
       <h1>About</h1>

 <section>  
  <p>Welcome! We are El Picante!</p>
  <p> We are a local Mexican restaurant proudly serving flavors south of the border. All our ingredients are locally grown or made and are completely organic. We are staffed by a wonderful team of local folks that are happy to see you come in. So come on by and have a fiesta of a time!</p>
  <p>We are trying to grow as much as possible so we can keep our customers in the loop. So please follow us on Twitter and Instagram!</p>
  <p>You can also sign up for our weekly e-mail newsletters that gives you great deals every day of the week.</p>
  </section>

  <?php include 'footer.php'; ?>

      </div>
      </div>

   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>