<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Register page</title>

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .container {
      margin: 30px auto;
      padding: 40px 30px;
      background-color: #fff4e6;
      max-width: 1000px;
      border-radius: 16px;
    }

    h1 {
      margin: 30px 0 50px;
    }

    button {
      color: #ffffff;
      background-color: #ffad4a;
      padding: 16px 32px;
      font-size: 16px;
      font-weight: 600;
      border: 1px solid #ffad4a;
      border-radius: 16px;
      margin-bottom: 20px;

    }

    button:hover {
      color: #ffad4a;
      background-color: transparent;
      border: 1px solid #ffad4a;
    }

    .form-group {
      margin-bottom: 40px;
    }

    label {
      font-weight: 600;
    }

    span {
      display: block;
    }
  </style>



</head>

<body>
  <div class="container">


    <h1>Fill up the form to register!</h1>

    <form action="/register.confirmation_page.php" method="post">



      <div class="form-group row">
        <label for="full-name" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="full-name" name="fname" required>

          <?php


          ?>

        </div>
      </div>





      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="email" name="email" required>
          <!-- <span name="inv_email"><? $inv_email  ?></span> -->

        </div>
      </div>




      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="password" name="password" required>
          
        </div>
      </div>





      <div class="form-group row">
        <label for="cpassword" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="cpassword" name="cpassword" required>

        </div>


      </div>

      <div class="md:w-2/3">
        <a href="/register.formpage.php"><button type="submit" value="submit" name="submit">
          Submit
        </button>
      </a>
      </div>
      


      <?php





      // if($_SERVER["REQUEST_METHOD"] == "POST"){


      //   if(($password == ($uppercase || $lowercase || $number || $specialchars || !strlen($password)<8)) && ){


      //     echo '








      // ';




      //   }

      // }
      // 
      ?>

    </form>



  </div>



















</body>

</html>