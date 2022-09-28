<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/indexcss.css">

    <title>Index Table</title>
</head>
<body class="vh-100">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark pt-0">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid logoimage" src="{{ asset('images/logoimage.jpg') }}"><strong class="ms-4">All Users</strong></a>
         
         
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
                <a class="nav-link" href="{{route('show.users')}}">All Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('add.parrot') }}">Add parrot</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Parrot</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('sign.out') }}">
                  <button class="btnlogin btn btn-warning px-3 py-1 mt-2 ms-3">
                    <strong>log out</strong>
                </button>
              </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
        <div class="container">
            <div class="row">
                <table class="table text-center text-white">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $x=1;  ?>
                      @foreach($values as $rec)
                        <tr>
                            <th scope="row"> {{ $x++ }} </th>
                            <td>{{ $rec->f_name }}</td>
                            <td>{{ $rec->l_name }}</td>
                            <td>{{ $rec->email }}</td>
                            <td>{{ $rec->date_of_birth }}</td>
                            <td>{{ $rec->gender }}</td>
                            <td>
                                <a href="{{ route('edit.users',['id'=>$rec->id]) }}"><i class="btn fa fa-pencil-square-o fa-1x"></i></a>
                                <a href="{{ route('destroy.users',['id' => $rec->id]) }}"><i class="btn fa fa-trash-o fa-1x ms-1"></i></a>
                            </td>
                          </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                  <div class="m-3">
                    <a href="{{ route('user.dashboard') }}">
                      <button class="btn btn-warning py-2 px-3">
                        <strong>Back Home</strong>
                      </button>
                    </a>
                  </div>

            </div>
        </div>
    </div>
</body>
</html>