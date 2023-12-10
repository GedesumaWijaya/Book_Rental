<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Rating;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function Showing_the_books(){
        $see_book = Books::with('authors')->get();

        $average_Ratings = [];
        foreach ($see_book as $book){
            $average_Rating = Rating::where('book_id',$book->id)->avg('rating');
            $voter = Rating::where('book_id',$book->id)->count();

            $format_rating = number_format($average_Rating,2);

          
            
            $info_book[]=[
                'book' =>$book,
                'average_Rating'=>$format_rating,
                'voter'=>$voter,
                'author_name' => $book->authors->author_name,
                
            ];

        }
        usort($info_book, function($a,$b){
            return $b['average_Rating']<=>$a['average_Rating'];

        });

        return view('booklist', compact('info_book'));
    }
}
