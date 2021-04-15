<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    
  public function index(){
    return Book::all(); //R
  }
  
  public function show($id){
    return Book::find($id); //R, individual book
  }
  
  public function create(Request $request){
    //book create, save
//     $book = new Book();
//     $book-> = "Clean Code";
//     $book->isbn = "";
//     $book->pages = 200;
//     $book->cost = 20.0;
//     $book->value = 20.0;
//     $book->current_condition = 0;
    
//     $book->save(); //C
    
  }
  
  public function update($id, Request $request){
    $book = Book::find($id);
    $book->cost = $request->cost;
    
    $book->save(); //U
    return $book;
    
  }
  
  public function delete($id){
    Book::find($id)->delete(); // D, hard delete
  }
}

