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
                    <li class="breadcrumb-item active" aria-current="page">Export Data</li>
                </ol>
            </nav>
            {{-- BREADCRUMB --}}

            {{-- CONTENT --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">

                        {{-- TABLE --}}
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
                            {{-- TABLE HEAD --}}

                            {{-- TABLE BODY --}}
                            <tbody>
                                @foreach ($books as $index => $book)
                                <tr class="alert" role="alert">

                                    {{-- INDEX --}}
                                    <td>
                                        <div class="judul">
                                            <span>{{$index + 1}}</span>
                                        </div>
                                    </td>

                                    {{-- COVER --}}
                                    <td>
                                        <img class="img" src="{{asset('coverbook/'. $book-> cover)}}" alt="">
                                    </td>

                                    {{-- JUDUL --}}
                                    <td>
                                        <div class="judul">
                                            <span>{{$book-> judul}}</span>
                                        </div>
                                    </td>

                                    {{-- PENULIS --}}
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> penulis}}</span>
                                        </div>
                                    </td>

                                    {{-- PENGARANG --}}
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> pengarang}}</span>
                                        </div>
                                    </td>

                                    {{-- PENERBIT --}}
                                    <td>
                                        <div class="subjudul">
                                            <span>{{$book-> penerbit}}</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{-- TABLE BODY --}}

                        </table>
                        {{-- TABLE --}}
                    </div>
                </div>
            </div>
            {{-- CONTENT --}}

        </div>
    </section>
</body>
{{-- BODY --}}

</html>
<script type="text/javascript">
    window.print()
</script>