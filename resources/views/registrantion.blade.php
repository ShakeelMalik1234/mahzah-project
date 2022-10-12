<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/ragistrationsheet.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row text-color">
            <div class="text-center">
                <img src="{{ asset('images/mazah-logo-login.png') }}" alt="">
            </div>
            <div class="col-lg-7 col-md-9">
                <div class="mahza-login">
                    <div class="heading">
                        <h1>New Account</h1>
                        <p>Have an account? <a href="{{ url('/') }}"> Sign in</a></p>
                    </div>
                    <form class="px-4">
                        <div class="row">
                            <div class="pb-3 col-sm-6">
                                <label for="exampleInputFirstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="exampleInputFirstname" aria-describedby="emailHelp">
                              </div>
                              <div class="pb-3 col-sm-6">
                                <label for="exampleInputLastname1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputLastname">
                              </div>
                        </div>
                        <div class="pb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="pb-3">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <div class="password-set">
                                <input type="password" class="form-control password" id="password" value="">
                                <i class="fas fa-eye btn" id="show_eye"></i>
                                <i class="fas fa-eye-slash btn" id="hide_eye"></i>
                            </div>
                        </div>
                        <div class="pb-3">
                            <label class="form-label">Password</label>
                            <div class="password-set1">
                                <input type="password" class="form-control password1" id="cpassword" value="">
                                <i class="fas fa-eye btn" id="show_eye1"></i>
                                <i class="fas fa-eye-slash btn" id="hide_eye1"></i>
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree to the <strong>Terms of Use and Privacy Policy</strong></label>
                        </div>
                        <div  class="text-center">
                            <button type="submit" class="btn form-control">CREATE ACCOUNT <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/registration.js"></script>

  </body>
</html>