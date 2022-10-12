<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/forgotpassword.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row text-color">
            <div class="text-center">
                <img src="{{ asset('images/mazah-logo-login.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="reset-password">
                    <h1>Reset Your Password</h1>
                    <p>Enter the email address that you used when creating your account and 
                        we will send you everything you need to recover your password.</p>
                    <div class="pb-3 enter-email">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control"  aria-describedby="emailHelp">
                    </div>
                    <div class="procced">
                        <a href="">
                            <button class="btn btn-recover">RECOVER PASSWORD</button>
                        </a> <br>
                    </div>
                    <a href="{{ url('/') }}" class="login-page">Log in With Mahza</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/registration.js"></script>

  </body>
</html>