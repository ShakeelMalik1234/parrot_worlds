<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>update records</title>
  </head>
  <body>
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-lg navbar-dark pt-0">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">Udate user data</strong></a>
         
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-5 justify-content-end" id="navbarColor01">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('user.dashboard') }}">Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('show.users')}}">All users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('add.parrot') }}">Add parrot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('details.parrot') }}">Parrot</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sign.out') }}">
                <button class="btnlogin btn btn-warning px-3 py-1 mt-2 ms-3">
                  <strong>Log out</strong>
              </button>
            </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
        <div class="container">
            <div class="row justify-content-center text-white">
                <div class="col-sm-6 col bgcol pt-3">
                    <form action="{{ route('update.users',['id'=>$users->id]) }}" method="post" enctype="multipart/form">
                        @csrf
                        
                        <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                          <input type="text" class="form-control formlogin" name="f_name" value="{{ $users->f_name }}" placeholder="First name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('f_name'))
                          <span class="text-warning errors">The first name field is required.</span>
                        @endif
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                          <input type="text" class="form-control formlogin" name="l_name" value="{{ $users->l_name }}" placeholder="Last name" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('l_name'))
                          <span class="text-warning errors">The first name field is required.</span>
                        @endif
                        </div>
                      </div>
                      <div class="mb-3">
                        <input type="email" class="form-control formlogin" name="email" value="{{ $users->email }}" placeholder="Email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('email'))
                        <span class="text-warning errors">{{ $errors->first('email') }}</span>
                      @endif
                      </div>
                      <div class="mb-3">
                        <input type="password" class="form-control formlogin" name="password" value="{{ $users->password }}" placeholder="Enter your password" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('password'))
                        <span class="text-warning errors">{{ $errors->first('password') }}</span>
                      @endif
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Date of birth <i class="fa fa-question-circle fs-1x"></i></label>
                        <input type="date" class="form-control formlogin" name="date_of_birth" value="{{ $users->date_of_birth }}" placeholder="DD/MM/YYYY" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('date_of_birth'))
                        <span class="text-warning errors">invalid date of birth.</span>
                      @endif
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Gender <i class="fa fa-question-circle fs-1x"></i></label>
                      <div>

                          <div class="col-md-4 col-sm-6 form-control genderform">
                              <label for="exampleInputEmail1" class="form-label">Female</label>
                              
                              <input class="form-check-input float-end mt-1 custom-hide"  name="gender" value="female" {{  $users->gender == 'female' ? 'checked' : '' }} type="radio" id="exampleRadios1">
                          </div>
                          <div class="col-md-4 col-sm-6 form-control genderform mx-1">            
                            <label for="exampleInputEmail1" class="form-label">Male</label>
                            <input class="form-check-input float-end mt-1 custom-hide"  name="gender" value="male" {{  $users->gender == 'male' ? 'checked' : '' }} type="radio" id="exampleRadios1">
                          </div>
                          <div class="col-md-4 col-sm-6 form-control genderform">
                            <label for="exampleInputEmail1" class="form-label">Custom</label>
                            <input class="form-check-input float-end mt-1 custom-open check-3" name="gender" value="Custom" {{  $users->gender !== 'female' && $users->gender !== 'male' && $users->gender !== null ? 'checked' : '' }} type="radio" id="exampleRadios1">
                          </div>
                      </div>
                      <div class="mb-3 custom-show">
                        <div class="my-3">
                          <select class="form-select select-border" name="gender_3"  aria-label="Default select example">
                            <option selected disabled>Select your pronoun</option>
                            <option value="She:Wish her a happy birthday!" {{ $users->gender == "She:Wish her a happy birthday!" ? 'selected' : '' }}>She:''Wish her a happy birthday!''</option>
                            <option value="He:Wish him a happy birthday!" {{ $users->gender == "He:Wish him a happy birthday!" ? 'selected' : '' }}>He: ''Wish him a happy birthday!''</option>
                            <option value="They:Wish them a happy birthday!" {{ $users->gender == "They:Wish them a happy birthday!" ? 'selected' : '' }}>They: ''Wish them a happy birthday!''</option>
                          </select>
                        </div>
                        <div id="emailHelp" class="form-text">Your pronoun is visible to everyone.</div>
                        <input type="text" class="form-control formlogin" name="gender_2" placeholder="Gender(Optional)" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      @if($errors->has('gender'))
                        <span class="text-warning errors">{{ $errors->first('gender') }}</span>
                      @endif
                     
                        <a href="{{ route('show.users') }}">
                          <button class="btn btn-warning my-3 mx-2 px-3 py-1" type="button">
                            <strong>Back</strong>
                          </button>
                        </a>
                      
                      <div class="float-end my-2">
                        <button class="btn btn-warning my-2 mx-2 px-3 py-1" type="submit">
                          <strong>update</strong>
                        </button>
                        
                      </div>
                      
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/update.js') }}"></script>
   
  </body>
</html>