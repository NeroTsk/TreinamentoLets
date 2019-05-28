<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Book $book)
    {
        $book = new Book();
        $book->name = $request->input('name');
        $book->from = $request->input('from');
        $book->author = $request->input('author');
        $book->published = $request->input('published');
        $book->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $book = Book::all();
        return view('books', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Book $book)
    {

        $book = $book->find($id);

        return view('bookEdit', compact('book', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book, $id)
    {
        $date = $book->find($id);
        $date->update($request->all());

        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Book $book)
    {
        $dados = $book->find($id);
        $dados->destroy($id);

        return redirect()
                ->action("BooksController@show")
                ->with('danger', "Estado Excluido");
    }

}
