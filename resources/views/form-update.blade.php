{{-- NAVBAR FROM APP --}}
@extends('layouts.app')

@section('content')
{{-- NAVBAR FROM APP --}}

<!DOCTYPE html>
<html lang="en">

{{-- HEAD --}}
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Vibo</title>
</head>
{{-- HEAD --}}

{{-- BODY --}}
<body>
    <div class="container">

        {{-- BREADCRUMB --}}
        <nav aria-label="">
            <ol class="breadcrumb" id="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Data</li>
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
                                <th>Update Data</th>
                            </tr>
                        </thead>
                        {{-- TABLE HEAD --}}

                        {{-- TABLE BODY --}}
                        <tbody>
                            {{-- TABLE ROW --}}
                            <tr class="alert" role="alert">
                                <td>

                                    {{-- FORM --}}
                                    <form method="POST" action="{{ route('book.update', $book->id) }}"
                                        enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        @method('PUT')

                                        {{-- JUDUL --}}
                                        <div class="form-group">
                                            <label id="judul">Judul Buku</label>
                                            <input type="text" id="input-field" required name="judul"
                                                value="{{ $book-> judul}}">
                                        </div>

                                        {{-- PENULIS --}}
                                        <div class="form-group">
                                            <label id="judul">Penulis</label>
                                            <input type="text" id="input-field" required name="penulis"
                                                value="{{ $book-> penulis}}">
                                        </div>

                                        {{-- PENGARANG --}}
                                        <div class="form-group">
                                            <label id="judul">Pengarang</label>
                                            <input type="text" id="input-field" required name="pengarang"
                                                value="{{ $book-> pengarang}}">
                                        </div>

                                        {{-- PENERBIT --}}
                                        <div class="form-group">
                                            <label id="judul">Penerbit</label>
                                            <input type="text" id="input-field" required name="penerbit"
                                                value="{{ $book-> penerbit}}">
                                        </div>

                                        {{-- COVER --}}
                                        <div class="form-group">
                                            <label id="judul">Cover</label>
                                            <input type="file" id="btn-add-image" required name="cover">
                                        </div>

                                        {{-- BUTTON --}}
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" id="btn-add-data">Update Data</button>
                                        </div>
                                    </form>
                                    {{-- FORM --}}

                                </td>
                            </tr>
                        </tbody>
                        {{-- TABLE BODY --}}

                    </table>
                </div>
            </div>
        </div>
        {{-- CONTENT --}}

    </div>
</body>
{{-- BODY --}}

</html>
@endsection