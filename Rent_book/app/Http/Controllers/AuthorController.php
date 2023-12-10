<?php

namespace App\Http\Controllers;
use App\Models\Autors;
use App\Models\Rating;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function Showing_the_author(){
        $see_author = Autors::all();

        
        foreach ($see_author as $author){
            $voter = Rating::where('author_id',$author->id)->count();

          
            
            $info_author[]=[
                'author' =>$author,
                'voter'=>$voter,
            ];

        }
        usort($info_author, function($a,$b){
            return $b['voter']<=>$a['voter'];

        });

        return view('authorlist', compact('info_author'));
    }
}
