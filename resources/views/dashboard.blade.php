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
  <body class="bgdash">
    <div class="container-fluid bgcontainer"> 
              <nav class="navbar navbar-expand-lg navbar-dark pt-0">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">{{ Auth::user()->f_name.' '.Auth::user()->l_name }}</strong></a>

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
                          <button class="btnlogin btn btn-warning px-3 py-1 mt-2 ms-3" type="submit">
                            <strong>Log out</strong>
                          </button>
                        </a>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </nav>


    {{-- side bar.............. --}}
<div class="container-fluid">
    
    <div class="sidebar text-warning">
      <div>
        <i class="fa fa-angle-left fa-2x btn btnsidebarl fw-bold px-4" aria-hidden="true"></i>
        <i class="fa fa-angle-right fa-2x btn btnsidebarr fw-bold px-4" aria-hidden="true"></i>
      </div>
      <div class=" sidebarshow">
      <a href="#home"><i class="fa fa-facebook-official pt-1 mx-2 fa-3x" aria-hidden="true"></i></a>
      <a href="#news"><i class="fa fa-instagram navicon pt-1 fa-3x mx-2" aria-hidden="true"></i></a>
      <a href="#contact"><i class="fa fa-twitter-square navicon pt-1 fa-3x mx-2" aria-hidden="true"></i></a>
      <a href="#about"><i class="fa fa-youtube-square navicon pt-1 fa-3x mx-2" aria-hidden="true"></i></a>
      </div>
    </div>
    
    <div class="sidebar sideright justify-content-end">
      <div class="border border-warning p-2 text-white m-2">
        <img src="{{ asset('images/sidebarl.jpg') }}" class="img-fluid">
        <h6 class="text-warning">Get opportunity :</h6>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus voluptates, quis esse ea sunt quibusdam maxime nobis impedit alias, est earum optio, voluptatibus quae excepturi. Facilis fugit neque qui omnis.</p>
      </div>
      <div class="border border-warning p-2 text-white m-2">
        <h6 class="text-warning">For DNA Contact Us :</h6>
        <i class="fa fa-whatsapp" aria-hidden="true"><span> 0321-1234512</span></i>
        <img src="{{ asset('images/whatsapplogo.png') }}" class="img-fluid px-3 py-2">
      </div>
    </div>
</div>
<div class="container">
  <form action="">
    <div class="row">
      
      @foreach($usersdata as $data)
      <div class="m-2 col-md-3 col-sm-4 col">
        <div class="card border-warning" style="width: auto;">
          <img src="{{ asset('images/'.$data->image) }}" class="card-img-top cardimage" alt="...">
          <div class="card-body bg-warning cardheight">
            <h5 class="card-title" name="title">{{ $data->title }}</h5>
            <h6 class="card-text mb-0" name="category">Price : {{ $data->price }}</h6>
            <p class="card-text mb-0" name="category">Category : {{ $data->category }}</p>
            <p class="card-text mb-0" name="gender">Gender : {{ $data->gender }}</p>
            <p class="card-text mb-0" name="phone_number">Contect : {{ $data->phone_number }}</p>
            <p class="card-text details" name="description">Description : {{ $data->description }}</p>
          </div>
          <div class="card-footer btn btn-danger">More Details</div>
        </div>
      </div>
      @endforeach
    </div>
  </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    
  </body>
</html>