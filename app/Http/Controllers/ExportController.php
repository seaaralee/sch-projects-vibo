<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ExportController extends Controller
{
    
    public function index()
    {
        $books = Book::all();
        return view('export', ['books' => $books]);
    }
}
