<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function store(Request $request){
        $request->validate([
            "title" => ["required", "unique:books"],
            "description"=> "required",
        ]);
        $book = Book::create([
            "title" => $request->title,
            "description"=> $request->description,
        ]);
        return redirect()->route("add");  
    }




    public function show()
    {
        $books = Book::all();
        return view('book', compact('books'));
    } 
    public function home()
    {
        $books = Book::all();
        return view('home', compact('home'));
    }



    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('afficher');
    }


    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $book->update([
            "title" => $request->title,
            "description"=> $request->description,
        ]);

        return redirect()->route('afficher');
    }

}
