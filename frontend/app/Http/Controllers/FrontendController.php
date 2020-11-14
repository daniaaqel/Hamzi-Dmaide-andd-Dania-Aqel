<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}
   
   
    public function Bookbuy($id){ // go to order server
		$url = 'http://192.168.1.6:8000/buy/' . $id;
		$page = file_get_contents($url);
		return response()->json(json_decode($page));
    }
    
    public function BooksLS($id){ // go to catalogue server
		$url = 'http://192.168.1.5:8000/query/bookid/' . $id;
		$page = file_get_contents($url);
		return response()->json(json_decode($page));
	}

	public function BooksLS($topic){ // go to catalouge server 
		$url = 'http://192.168.1.5:8000/query/booktopic/' . $topic;
		$page = file_get_contents($url);
		return response()->json(json_decode($page));
	}

	
	
		
    //
}
