<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
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



    public function showDetails($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return redirect()->route('show')->with('error', 'Book not found.');
        }

        return view('details', compact('book'));
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


public function reserveBook($bookId)
{

    $book = new Reservation();

    $book->id_book = $bookId;
    $book->id_user = 1;
    $book->save();

    return redirect()->route('reservations')->with('success', 'Book reserved successfully.');
}

public function reservedBooks()
{
    $userId = 1;

    $user = User::find($userId);

    $reservedBooks = $user->reservations()->with('book')->get()->pluck('book');

    return view('reservations', compact('reservedBooks'));
}

public function details($id)
{
    $book = Book::find($id);
    return view('details', compact('book'));
}

public function unreserveBook($bookId)
{
    $userId = 1;

    $user = User::find($userId);

    $reservation = $user->reservations()->where('id_book', $bookId)->first();


    if ($reservation) {

        $reservation->delete();


        return redirect()->route('reservations');
    } else {
        return redirect()->route('reservations');
    }
}
}
