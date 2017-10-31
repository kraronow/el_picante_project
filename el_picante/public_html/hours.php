<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>El Picante Hours</title>

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

    <div class="container">
    <h2>El Picante Hours</h2>
    <p>Below are our main hours of operation. Holidays may have special hours.</p>            
    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center"> Monday</th>
          <th class="text-center"> Tuesday</th>
          <th class="text-center"> Wednesday</th>
          <th class="text-center"> Thursday</th>
          <th class="text-center"> Friday</th>
          <th class="text-center"> Saturday</th>
          <th class="text-center"> Sunday</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"> 10am - 11pm</td>
          <td class="text-center"> 10am - 11pm</td>
          <td class="text-center"> 10am - 11pm</td>
          <td class="text-center"> 10am - 11pm</td>
          <td class="text-center"> 10am - 11pm</td>
          <td class="text-center"> 10am - 10pm</td>
          <td class="text-center"> 11am - 8pm</td>      
          </tr>
      </tbody>
    </table>

       <?php include 'footer.php'; ?>

    </div>
    </div>
    </div>

     <!-- Scripts required to make Bootstrap work better. -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>