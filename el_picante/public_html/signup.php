<!--- Owner is Kayla Aronow -->
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>El Picante Sign Up </title>

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
      <h1> Sign Up</h1>

       <article>
        <p>If you would like to be a part of our rewards program, 
        please sign up below. Every time you eat at El Picante you will get points!</p>
          <form class="form-horizontal">
  <fieldset>
    <legend>Register Here</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="confirmPassword" class="col-lg-2 control-label">Confirm Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Tell Us About Yourself</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select Security Question</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1. What is your Dad's Name?</option>
          <option>2. Where did you attend High School?</option>
          <option>3. What was your first pet's name?</option>
          <option>4. What was your paternal grandfathers name?</option>
          <option>5. What state were you born in?</option>
        </select>
      </div>
    </div>    
    <div class="form-group">
      <label for="answer" class="col-lg-2 control-label">Answer</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="answer"></textarea>
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
        </article>

        <br><br>

  <?php include 'footer.php'; ?>

  </div>
    </div>

   <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>