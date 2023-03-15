<!DOCTYPE html>
<html lang="en">

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

<body>
    <section class="ftco-section">
        <div class="container">
            <nav aria-label="">
                <ol class="breadcrumb" id="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Export Data</li>
                </ol>
              </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            {{-- TABLE HEAD --}}
                            <thead class="thead-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Cover</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                </tr>
                            </thead>
                            {{-- TABLE BODY --}}
                            <tbody>
                                @foreach ($books as $index => $book)
                                <tr class="alert" role="alert">
                                    <td>
                                        <div class="judul">
                                            <span>{{$index + 1}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <img class="img"
                                            src="{{asset('coverbook/'. $book-> cover)}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <div class="judul">
                                            <span>{{$book-> judul}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> penulis}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> pengarang}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> penerbit}}</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<script type="text/javascript">
    window.print()
</script>