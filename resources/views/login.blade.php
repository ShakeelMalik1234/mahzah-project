<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/loginstylesheet.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row text-color">
            <div class="text-center">
                <img src="{{ asset('images/mazah-logo-login.png') }}" alt="">
            </div>
            <div class="col-lg-5 col-md-7">
                <div class="mahza-login">
                    <h1>Sign In To Your Mahza Site</h1>
                    <form class="px-4">
                        <div class="pb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="pb-3">
                          <label for="exampleInputPassword" class="form-label">Password</label>
                          <div class="password-set">
                              <input type="password" class="form-control password" id="password" value="">
                              <i class="fas fa-eye btn" id="show_eye"></i>
                              <i class="fas fa-eye-slash btn" id="hide_eye"></i>
                          </div>
                      </div>
                        <div class="mb-3 form-check">
                          <a href="{{ route('user-forgot-password') }}">Forgot Password?</a>
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div>
                            <a href="{{ route('user-welcome') }}">
                              <button type="button" class="btn form-control">SIGN IN <i class="fa-solid fa-arrow-right"></i></button>
                            </a>
                        </div>
                        <div class="route-ragistration">
                            <label for="">create a <a href="{{ route('user-ragistration') }}">New Account</a></label>
                            <p>Or</p>
                            <h3>Continue With</h3>
                            <div class="icon">
                                <img src="{{ asset('images/gmail-icon.png') }}" alt="">
                                <img src="{{ asset('images/facebook-icon.png') }}" alt="">
                                <img src="{{ asset('images/linkin-icon.png') }}" alt="">
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>

  </body>
</html>