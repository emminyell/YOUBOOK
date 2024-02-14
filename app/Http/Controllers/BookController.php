<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;




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
        $books = Book::paginate(3);
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

    public function reserveBook(Request $request, $bookId)
    {
        $user = $request->session()->get('user');

        if (!$user) {
            return redirect()->route('login');
        }

        $userId = $user->id;
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Validate start and end dates
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if the book is available for reservation during the specified period
        $existingReservation = Reservation::where('id_book', $bookId)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                      ->orWhereBetween('end_date', [$startDate, $endDate])
                      ->orWhere(function ($query) use ($startDate, $endDate) {
                          $query->where('start_date', '<=', $startDate)
                                ->where('end_date', '>=', $endDate);
                      });
            })
            ->exists();

        if ($existingReservation) {
            return redirect()->back()->withErrors(['error' => 'The book is not available during the specified period.'])->withInput();
        }

        // Create a new reservation
        $reservation = new Reservation();
        $reservation->id_book = $bookId;
        $reservation->id_user = $userId;
        $reservation->start_date = $startDate;
        $reservation->end_date = $endDate;
        $reservation->save();

        return redirect()->route('reservations');
    }


public function reservedBooks()
{
    $user = session('user');

    if (!$user) {
        return redirect()->route('login');
    }

    $userId = $user->id;

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
    $user = session('user');

    if (!$user) {
        return redirect()->route('login');
    }

    $userId = $user->id;

    $user = User::find($userId);

    $reservation = $user->reservations()->where('id_book', $bookId)->first();

    if ($reservation) {
        $reservation->delete();
    }

    return redirect()->route('reservations');
}

// Controller method to display books in the library page
public function library()
{
    // Query available books (books that haven't been reserved)
    $disponibleBooks = Book::whereDoesntHave('reservations')->get();

    // Query reserved books and order them by return date
    $reservedBooks = Reservation::with('book')
    ->where('end_date', '>', date('Y-m-d H:i:s'))
    ->orderBy('end_date')
    ->get();


    return view('library', compact('disponibleBooks', 'reservedBooks'));
}

}

