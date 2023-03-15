<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/board.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vibo</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand font-bold" href="#" id="title-nav">View Book</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}" id="text-login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}" id="text-register">Register</a>
      </li>
    </ul>
  </div>
</nav>
  
  <div class="landing">
    <div class="flex flex-col mt-5">
      <h1 class="font-bold" id="title-landing">ViewBook</h1>
      <h1 class="font-weight-normal lead" id="title-desc">View Book ini menampilkan banyak revie buku yang digemari banyak remaja!</h1>
      <h1 class="font-weight-normal lead" id="title-desc-1"> "Membacalah untuk hidup, bukan hidup untuk membaca"</h1>
    </div>
    <div class="img-landing">
      <img src="https://e7.pngegg.com/pngimages/227/562/png-clipart-used-book-book-scanning-graphy-book-comic-book-wood.png" alt="" width="600">
    </div>
  </div>

  <div class="bg-information">
    <div class="flex flex-col mt-4 mb-4">
      <h1 class="text-5xl text-white font-semibold">Daftar Buku</h1>
      <p class="m-auto text-white text-lg mt-8 text-center">by Vibo</p>
    </div>
  </div>  

  {{-- menampilkan data --}}
  <div class="container-read">
    @foreach ($books as $index => $book)
    <div class="read-one">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h4 id="title-book">{{$book-> judul}}</h4>
          <img id="image-book" src="{{asset('coverbook/'. $book-> cover)}}"alt="" width="200" height="300" class="mb-4">
          <h6 id="author-book" class="card-subtitle mb-2 text-muted" >by {{$book-> penulis}}</h6>
          <p class="card-text"><small class="text-muted">Pengarang : {{$book-> pengarang}}</small></p>
          <p class="card-text"><small class="text-muted">Penerbit : {{$book-> penerbit}}</small></p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
    </div>
  </div>
  {{-- menampilkan data --}}
  
</body>
</html>