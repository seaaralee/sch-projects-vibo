@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	  <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Data Vibo</title>
</head>
<body>
    <div class="container">
        <nav aria-label="">
            <ol class="breadcrumb" id="breadcrumb">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Add Data</li>
            </ol>
          </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrap">
                    <table class="table">
          {{-- TABLE HEAD --}}
                      <thead class="thead-primary">
                        <tr>
                            <th>Add Data</th>
                        </tr>
                      </thead>
          {{-- TABLE BODY --}}
                      <tbody>
                        <tr class="alert" role="alert">
                            <td>
                                <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
                                  {{csrf_field()}}
                                    <div class="form-group">
                                      <label id="judul">Judul Buku</label>
                                      <input type="text" id="input-field" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label id="judul">Penulis</label>
                                        <input type="text" id="input-field" name="penulis">
                                      </div>
                                    <div class="form-group">
                                      <label id="judul">Pengarang</label>
                                      <input type="text" id="input-field" name="pengarang">
                                    </div>
                                    <div class="form-group">
                                      <label id="judul">Penerbit</label>
                                      <input type="text" id="input-field" name="penerbit">
                                    </div>
                                    <div class="form-group">
                                      <label id="judul">Cover</label>
                                      <input type="file" id="btn-add-image" name="cover">
                                    </div>
                                    <div class="d-flex justify-content-end">
                                    <button type="submit" id="btn-add-data">Submit Data</button>
                                    </div>
                                  </form>
                              </div>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
    </div>
    
</body>
</html>
@endsection