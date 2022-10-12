<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/welcome.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row text-color">
            <div class="text-center">
                <img src="{{ asset('images/mazah-logo-login.png') }}" alt="">
            </div>
            <div class="col-md-7">

              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
                <div class="welcome-mahzah">
                  <h1>Welcome to Mahzah</h1>
                  <p>Fist, let's give your new school name.You can always change this later.</p>
                  <div class="pb-3 enter-school-name">
                    <label for="exampleInputEmail1" class="form-label">School Name</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp">
                  </div>
                  <div class="skip-next pb-3">
                    <a href="#">SKIP</a>
                    <a href="{{ route('user-about') }}" class="btn btn-next">NEXT</a>
                  </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/registration.js"></script>

  </body>
</html>