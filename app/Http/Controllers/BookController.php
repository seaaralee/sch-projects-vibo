<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menampilkan list data buku
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('board', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     * Menampilkan form untuk menambah data
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-add');
    }

    /**
     * Store a newly created resource in storage.
     * Menambahkan data dengan parameter request
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        if($request->hasFile('cover')){
            $request->file('cover')->move('coverbook/', $request->file('cover')->getClientOriginalName());
            $book->cover = $request->file('cover')->getClientOriginalName();
            $book->save();
        }
        
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     * Menampilkan data secara spesifik berdasarkan id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     * Menampilkan form untuk mengedit data secara spesifik
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('form-update', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     * Mengupdate data yang ada di dalam buku berdasarkan id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book-> judul = $request->input('judul');
        $book-> penulis = $request->input('penulis');
        $book-> pengarang = $request->input('pengarang');
        $book-> penerbit = $request->input('penerbit');
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $nameCover = time() . '_' . $cover->getClientOriginalName();
            $fileCover = public_path('coverbook');
            $cover->move($fileCover, $nameCover);
            $book->cover = $nameCover;
        }
        $book->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus data berdasarkan id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        
        $lastId = DB::table('books')->orderBy('id', 'desc')->first()->id;
        DB::statement("ALTER TABLE books AUTO_INCREMENT = $lastId");

        return redirect('/home');
    }
}
