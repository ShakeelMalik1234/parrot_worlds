<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title>Welcom Parrot World</title>
    <link rel="shortcut icon" href="images/titleicon.jpg">
    
  </head>
  <body class="bgcontainer" style="background-image:url('{{ asset('images/bgcontainer1.jpg') }}')">
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark pt-0">
            <div class="container-fluid px-0">
              <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">World Of Parrot</strong></a>  
              </div>
            
          </nav>

          <div class="container">
            <div class="row mt-2 logincol">
                <div class="col-sm-7 mt-4 textfont">
                    <div class=" ">
                        <h1>Welcome...</h1>
                        <h2>Hey! I am Muhammad Shakeel Malik,</h2>
                        <h3>Plant Trees To Save Birds<br>Rasidance</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing<br>
                           elit. Asperiores impedit mollitia voluptatum amet<br>
                           vero doloribus fuga et quaerat sunt blanditiis, <br>
                           animi ducimus modi. Impedit perferendis cumque, <br>
                           tempora qui at dolore.</p>

                            <div class=""s>
                           <a href="#"><button class="btn-lg btn-warning text-decoration-underline px-4 btnlearn">learn more</button></a>
                            </div>
                    </div>
                </div>


{{-- ------------Login--------------- --}}


      <div class="col-md-5 col-sm-8 col mt-4 loginbgcolor rounded-3 loginform">
                    <div class="text-center my-3">
                        <img src="images/loginlogo.jpg" class="loginlogo">
                    </div>
                    <hr>
                    <form action="{{ route('post.login') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address:</label>
                          <input type="email" name="email" class="form-control formlogin" placeholder="parrot@check.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('email'))
                          <span class="text-warning errors">{{ $errors->first('email') }}</span>
                        @endif
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password:</label>
                          <input type="password" name="password" class="form-control formlogin" id="exampleInputPassword1">
                        @if($errors->has('password'))
                          <span class="text-warning errors">{{ $errors->first('password') }}</span>
                        @endif 
                        </div>
                        <div class="text-white mb-3 me-2"> 
                          <button type="submit" class="float-end py-1 px-3 btn btn-warning"><strong>log in</strong></button>
                          <a href="#">Forget Password</a><br>
                          <a href="{{ route('users.registration') }}">Create an account?</a>
                        </div>

                      </form>
                </div>
                
            </div>
            <div class="float-end">
              <div class="text-white cntcticon">
                <p>Contact us:</p>
              </div>
              <a class="text-decoration-none" href="#">
                  <i class="fa fa-facebook-official pt-1 mx-2 fa-3x text-warning" aria-hidden="true"></i>
              </a>
              <a class="text-decoration-none" href="#">
                  <i class="fa fa-instagram navicon pt-1 fa-3x mx-2 text-warning" aria-hidden="true"></i>
              </a>
              <a class="text-decoration-none" href="#">
                  <i class="fa fa-twitter-square navicon pt-1 fa-3x mx-2 text-warning" aria-hidden="true"></i>
              </a>
              <a class="text-decoration-none" href="#">
                  <i class="fa fa-youtube-square navicon pt-1 fa-3x mx-2 text-warning" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    
  </body>
</html>