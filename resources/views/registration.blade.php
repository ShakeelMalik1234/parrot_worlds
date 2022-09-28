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
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">World Of Parrot</strong></a>
            </div>
          </nav>

          <div class="container">
            <div class="row mt-4 logincol">
                <div class="col-sm-7 textfont">
                    <div class=" ">
                        <h1>Welcome...</h1>
                        <h2>Hey! I am Muhammad Shakeel Malik,</h2>
                        <h3>Plant Trees To Save Birds<br>Rasidance</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing<br>
                           elit. Asperiores impedit mollitia voluptatum amet<br>
                           vero doloribus fuga et quaerat sunt blanditiis, <br>
                           animi ducimus modi. Impedit perferendis cumque, <br>
                           tempora qui at dolore.</p>

                      <div class="">
                        <a href="#"><button class="btn-lg btn-warning text-decoration-underline px-4 btnlearn">learn more</button></a>
                      </div>
                    </div>
                </div>

{{-- ------------------create_account_form --}}



                  <div class="col-lg-5 col-sm-8 col rounded-3 createform mb-5">
                    <h1>Create Account</h1>
                    <hr>
                    <form action="{{route('store.createaccount')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                      <div class="col-md-6 col-sm-12 mb-3">
                        <input type="text" class="form-control formlogin" name="f_name" placeholder="First name" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('f_name'))
                        <span class="text-warning errors">The first name field is required.</span>
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-12 mb-3">
                        <input type="text" class="form-control formlogin" name="l_name" placeholder="Last name" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('l_name'))
                        <span class="text-warning errors">The last name field is required.</span>
                      @endif
                      </div>
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control formlogin" name="email" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('email'))
                        <span class="text-warning errors">{{ $errors->first('email') }}</span>
                      @endif
                      </div>
                    <div class="mb-3">
                      <input type="Password" class="form-control formlogin" name="password" placeholder="Create new password" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('password'))
                        <span class="text-warning errors">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Date of birth <i class="fa fa-question-circle fs-1x"></i></label>
                      <input type="date" class="form-control formlogin" name="date_of_birth" placeholder="DD/MM/YYYY" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('date_of_birth'))
                         <span class="text-warning errors">The date of birth field is required.</span>
                      @endif
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Gender <i class="fa fa-question-circle fs-1x"></i></label>
                    <div>
                        <div class="col-md-4 col-sm-6 form-control genderform">
                            <label for="exampleInputEmail1" class="form-label">Female</label>
                            <input class="form-check-input float-end mt-1 custom-hide"  name="gender" value="female" type="radio" id="exampleRadios1">
                        </div>
                        <div class="col-md-4 col-sm-6 form-control genderform mx-1">
                          <label for="exampleInputEmail1" class="form-label">Male</label>
                          <input class="form-check-input float-end mt-1 custom-hide"  name="gender" value="male" type="radio" id="exampleRadios1">
                        </div>
                        <div class="col-md-4 col-sm-6 form-control genderform">
                          <label for="exampleInputEmail1" class="form-label">Custom</label>
                          <input class="form-check-input float-end mt-1 custom-open" name="gender" value="custom" type="radio" id="exampleRadios1">
                        </div>
                    </div>
                    <div class="mb-3 custom-show">
                      <div class="my-3">
                        <select class="form-select select-border" name="gender" aria-label="Default select example">
                          <option selected disabled>Select your pronoun</option>
                          <option value="She:Wish her a happy birthday!" name="gender">She:''Wish her a happy birthday!''</option>
                          <option value="He:Wish him a happy birthday!" name="gender">He: ''Wish him a happy birthday!''</option>
                          <option value="They:Wish them a happy birthday!" name="gender">They: ''Wish them a happy birthday!''</option>
                        </select>
                      </div>
                      <div id="emailHelp" class="form-text">Your pronoun is visible to everyone.</div>
                      <input type="text" class="form-control formlogin" placeholder="Gender(Optional)" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    @if($errors->has('gender'))
                        <span class="text-warning errors">{{ $errors->first('gender') }}</span>
                    @endif
                    <div class="my-3">
                      <button class="float-end btn btn-warning px-3 py-1" type="submit">
                        <strong>Sign Up</strong>
                      </button>
                      <a href="{{ route('login.user') }}" class="loginpage"><p>Already Have An Account?</p></a>
                    </div>
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