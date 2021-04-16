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
    $book = new Book();
        if($request->title != null){$book->title = $request->title;}
        if($request->isbn != null){$book->isbn= $request->isbn;}
        if($request->excerpt != null){$book->excerpt = $request->excerpt;}
        if($request->pages != null){$book->pages = $request->pages;}
        if($request->cost != null){$book->cost = $request->cost;}
        if($request->value != null){$book->value = $request->value;}
        if($request->released != null){$book->released = $request->released;}
        if($request->status != null){$book->status = $request->status;}
        if($request->current_condition != null){$book->current_condition = $request->current_condition;}
    
    $book->save(); //C
    return $book;
    
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
// protected $fillable = [
//       'columns', 'that', 'are', 'fillable'
// ];
