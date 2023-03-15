<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        return view('home', ['books' => $books]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $books = Book::where('judul', 'LIKE', "%$query%")
                    ->orWhere('pengarang', 'LIKE', "%$query%")
                    ->orWhere('penerbit', 'LIKE', "%$query%")
                    ->get();

        return view('home', ['books' => $books]);
    }
}
