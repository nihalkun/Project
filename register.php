<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
    <title>signup page </title>
  </head>
  <body>
    <h1 class="req">SIGN UP</h1>
    <form class="needs-validation" action="server1.php" method="POST">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Name</label>
      <input type="text" class="form-control" id="validationTooltip01" name="name" placeholder="name" required />
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>





    
    <div class=" mb-1">
      <label for="validationTooltip01">Roll No</label>
      <input type="text" class="form-control" id="validationTooltip01" name="rollno" placeholder="rollno" required />
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>






    
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="email" class="form-control" id="validationTooltipUsername" name="email" placeholder="email" aria-describedby="validationTooltipUsernamePrepend" required />
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">password</label>
      <input type="password" class="form-control" id="validationTooltip03" name="password" placeholder="password" required />
      <div class="invalid-tooltip">
        Please provide a password.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">confirm password</label>
      <input type="password" class="form-control" id="validationTooltip04" name="confirmpassword" placeholder="confirmpassword" required />
      
    </div>
    
  </div>
  <button class="btn btn-primary" type="submit" name="register">Submit form</button>
  <a href="home.php" class="badge badge-secondary">Home</a>
  <a href="login.php" class="badge badge-info">back</a>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>