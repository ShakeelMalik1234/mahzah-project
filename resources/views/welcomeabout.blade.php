<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/welcomeabout.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row text-color">
            <div class="text-center">
                <img src="{{ asset('images/mazah-logo-login.png') }}" alt="">
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="welcome-mahzah">
                    <h1>Tell us a little more about yourself</h1>
                    <p>Your answers will help us build an experience to match your needs.</p>
                    <div class="select-about">
                        <div class="mb-3">
                            <label for="">Are you a business owner?</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Please choose an option....</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Which topic is most relevant to your business or content?</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Please choose an option....</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Which category best describe your business stage?</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Please choose an option....</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Are you already teaching an online course?</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Please choose an option....</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">What is the size of your audience? <span>(email list, social media followers, subscribers, etc)</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected disabled>Please choose an option....</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('user-dashboard') }}" class="btn btn-next">NEXT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/registration.js"></script>

  </body>
</html>