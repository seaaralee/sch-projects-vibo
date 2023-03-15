@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Vibo</title>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div id="inner-form">
                <form action="{{ route('search') }}" method="GET">
                    <div id="input-field">
                        <input id="form-search" name="query" type="search" placeholder="Type to search..." />
                        <button id="btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('book.create')}}"><button type="button" id="btn-add-data"><i
                                class="fa fa-download" aria-hidden="true"></i> Add Data</button></a>
                    <a href="{{ route('export')}}" target="_blank"><button type="button" id="btn-add-data"><i
                                class="fa fa-database" aria-hidden="true"></i>
                            Export</button></a>
                </div>
            </div>
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
                                    <th>Action</th>
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
                                        <img class="img" src="{{asset('coverbook/'. $book-> cover)}}" alt="">
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
                                    <td>

                                        <a href="{{ route('book.edit',  $book->id)}}">
                                            <button type="button" class="btn-action"><i class="fa fa-pencil-square-o"
                                                    aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('book.destroy', $book->id) }}">
                                            <button type="submit" class="btn-action">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                    Delete
                                            </button>
                                        </a>
                                        </form>
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
@endsection