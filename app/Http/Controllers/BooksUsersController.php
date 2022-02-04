<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;

class BooksUsersController extends Controller
{
    public function index()
    {
        $buku = buku::all();
        return view('booksuser\index', compact('buku'));
    }
}
