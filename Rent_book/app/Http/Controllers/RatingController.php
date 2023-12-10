<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\Rating;
use App\Models\Autors;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function showing_rating_form() {
        $see_rating = Rating::all();
        $see_author = Autors::all();
        $see_book = Books::all();

        return view('ratingform', compact('see_rating', 'see_author', 'see_book'));
    }

    public function storing_rating(Request $request){
        $request->validate([
            'author_id' => 'required|exists:authors,id',
            'book_id' => 'required|exists:books,id',
            'rating' => 'required|numeric|min:1|max:10',
        ]);

        Rating::create([
            'author_id' => $request->input('author_id'),
            'book_id' => $request->input('book_id'),
            'rating' => $request->input('rating'),
        ]);

        return redirect()->route('booklist')->with('successfully', 'Rating added');
    }
}
