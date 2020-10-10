<?php

namespace App\Http\Controllers;

use App\Http\Requests\booksRequest;
use App\Models\books;
use Illuminate\Http\Request;

class booksController extends Controller
{
    public function index()
    {
        return books::all();

    }
    public function store(books $books, booksRequest $request)
    {
        $books = books::create(
            [
                'author_id' => $request->author_id,
                'book_name' => $request->book_name,
                'pages' => $request->pages,

            ]);
        return $books;
    }


//    public function show(books $books)
//    {
//        return $books;
//    }
    public function show(books $books)
    {
        $books = books::with('users')->get();
        return $books;
    }

    public function update(books $books, booksRequest $request )
    {
        $books->update($request->all());

        return $books;
    }

    public function destroy(books $books)
    {
        $books ->delete();

        return response()->json([
            'message' =>'Success delete'
        ])->setStatusCode(201,'delete');
    }

}
