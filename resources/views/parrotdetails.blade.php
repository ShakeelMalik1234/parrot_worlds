<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Parrot details</title>
  </head>
  <body>
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-lg navbar-dark pt-0">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">Parrot</strong></a>
         
         
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
      {{-- cards....................... --}}

        <div class="container">
          <form action="">
            <div class="row">
              
              @foreach($usersdata as $data)
              <div class="m-3 col-lg-3 col-md-4 col-sm-6 col">
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
    <script src="{{ asset('js/update.js') }}"></script>
   
  </body>
</html>