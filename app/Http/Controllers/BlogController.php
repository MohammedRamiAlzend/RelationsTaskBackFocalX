<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $allAuthorsWithBook = Author::with('book')->get();
        return response($allAuthorsWithBook,200);
    }
}
