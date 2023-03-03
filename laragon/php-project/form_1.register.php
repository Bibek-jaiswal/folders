<!doctype html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Registration</title>
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
        
    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->

    <div class="container">

        <form>
            <div class="form-group-row">
                <div class="col-sm-5">
                    <label for="validationServer01">Full Name</label>
                    <input type="text" class="form-control is-valid" id="validationServer01" name="fname" required>


                    <?php
                    $name_confirmation = ' <div class="valid-feedback">Looks good! </div>';



                    ?>


                </div>
            </div>


            <div class="form-group-row">


                <div class="col-md-5">
                    <label for="validationServer02">Email</label>
                    <input type="email" class="form-control is-valid" id="validationServer02" name="email" required>

                    <?php
                    $email_confirmation = '  <div class="valid-feedback"> Looks good!</div>';
                    ?>

                </div>
            </div>


            <div class="form-group-row">

                <div class="col-md-5">
                    <label for="validationServerUsername">Password</label>
                    <div class="input-group">

                        <input type="password" class="form-control is-valid" id="validationServerUsername" aria-describedby="inputGroupPrepend3" name="password" required>


                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>



                    </div>
                </div>
            </div>


            <button class="btn btn-primary" type="submit">Submit </button>
        </form>






    </div>





</body>

</html>