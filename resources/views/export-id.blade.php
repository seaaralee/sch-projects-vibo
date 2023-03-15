<!DOCTYPE html>
<html lang="en">

{{-- HEAD --}}
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vibo</title>
</head>
{{-- HEAD --}}

{{-- BODY --}}
<body>
  <section class="ftco-section">
    <div class="container">

      {{-- BREADCRUMB --}}
      <nav aria-label="">
        <ol class="breadcrumb" id="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Export "{{$book-> judul}}" Data</li>
        </ol>
      </nav>
      {{-- BREADCRUMB --}}

      {{-- CARD --}}
      <div class="container-read">
        <div class="read-one">
          <div class="card" style="width: 16rem;">

            {{-- CARD BODY --}}
            <div class="card-body">
              <h4 id="title-book">{{$book-> judul}}</h4>
              <img id="image-book" src="{{asset('coverbook/'. $book-> cover)}}" alt="" width="210" height="310"class="mb-4">
              <h6 id="author-book" class="card-subtitle mb-2 text-muted">by {{$book-> penulis}}</h6>
              <a href="/">
              </a>
              <p class="card-text"><small class="text-muted">Pengarang : {{$book-> pengarang}}</small></p>
              <p class="card-text"><small class="text-muted">Penerbit : {{$book-> penerbit}}</small></p>
            </div>
            {{-- CARD BODY --}}

          </div>
        </div>
      </div>
      {{-- CARD --}}

    </div>
  </section>
</body>
{{-- BODY --}}

</html>
<script type="text/javascript">
  window.print()
</script>