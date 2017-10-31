<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>El Picante Contact</title>

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
       <h1>Contact Us</h1>

    <article>
    <form class="form-horizontal">
    <fieldset>
      <legend>We love to hear feedback!</legend>
      <div class="form-group">
        <label for="textArea" class="col-lg-2 control-label">Tell Us About Your Experience</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="3" id="textArea"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form> 

    <br><br><br>
    <p>Call us at 123-867-5309</p>
    <p>Or you can email us at 
    <a href="customer_service@ElPicante.com" target="_top">customer_service@ElPicante</a></p>
    <p>Or mail us at 123 Fake Dr. Luray, VA 22835</p>
    </article>

    <?php include 'footer.php'; ?>

    </div>
    </div>

   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>