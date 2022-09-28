<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>add data</title>
  </head>
  <body>
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-lg navbar-dark pt-0">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">Add parrot data</strong></a>
         
         
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

      {{-- add form...... --}}
        <div class="container">
            <div class="row justify-content-center text-white">
                <div class="col-lg-6 col-md-8 col-sm-10 col bgcol pt-3">
                    <form action="{{ route('postadd.parrot') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                          <input type="text" class="form-control formlogin" name="title" placeholder="Tittle" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('title'))
                          <span class="text-warning errors">Invalid title.</span>
                        @endif
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                          <input type="text" class="form-control formlogin" name="category" placeholder="Category" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @if($errors->has('category'))
                          <span class="text-warning errors">Invalid category.</span>
                        @endif
                        </div>
                      <div class="col-md-6 col-sm-12 mb-3">
                        <input type="text" class="form-control formlogin" name="price" placeholder="Price" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('price'))
                        <span class="text-warning errors">Invalid price.</span>
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-12 mb-0">
                        <select class="form-control mb-3 col-md-6 col-sm-12" name="gender">
                            <option value="female" selected disabled>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">male</option>
                            <option value="custom">custom</option>
                        </select>
                        @if($errors->has('gender'))
                        <span class="text-warning errors">Invalid gender.</span>
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-12 mb-3">
                        <input type="text" class="form-control formlogin" name="phone_number" placeholder="Enter Mobile Number" maxlength="11" aria-describedby="emailHelp">
                      @if($errors->has('phone_number'))
                        <span class="text-warning errors">Invalid mobile number.</span>
                      @endif
                      </div><div class="col-md-6 col-sm-12 mb-3">
                        <input type="text" class="form-control formlogin" name="address" placeholder="Enter Your Address" id="exampleInputEmail1" aria-describedby="emailHelp">
                      @if($errors->has('address'))
                        <span class="text-warning errors">Invalid address.</span>
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-12 mb-3">
                        <textarea type="text" name="description" class="form-control formlogin textareaheight" placeholder="Add Description...."></textarea>
                      @if($errors->has('description'))
                        <span class="text-warning errors">Invalid description.</span>
                      @endif
                      </div>
                      <div class="col-md-6 col-sm-12 mb-2 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">
                            Upload<input type="file" class="uploadFile img" name="image" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                      @if($errors->has('image'))
                        <span class="text-warning errors">{{ $errors->first('image') }}</span>
                      @endif
                      </div>
                    </div>
                    <a href="{{ route('show.users') }}">
                          <button class="btn btn-warning my-3 mx-2 px-3 py-1" type="button">
                            <strong>Back home</strong>
                          </button>
                        </a>
                      
                      <div class="float-end my-2">
                        <button class="btn btn-warning my-2 mx-2 px-3 py-1" type="submit">
                          <strong>Add</strong>
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