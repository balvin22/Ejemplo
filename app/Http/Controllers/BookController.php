<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function inicio(){
        return view('libros.formulario');
    }


    public function store(Request $request){
        $libro = new Book();
        $libro->titulo = $request->titulo;
        $libro->ISBN = $request->ISBN;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();
        return redirect()->route('libros.index');
    }


    public function index(){
        $libros = Book::all();
        return view('libros.index', compact('libros'));
    }


    public function show($id){
        $libro = Book::find($id);
        
        return view('libros.show', compact('libro'));
    }


    public function update(Request $request, $id){
        $libro = Book::find($id);
        $libro->titulo = $request->titulo ?? $libro->titulo;
        $libro->ISBN = $request->ISBN ?? $libro->ISBN;
        $libro->editorial = $request->editorial ?? $libro->editorial;
        $libro->paginas = $request->paginas ?? $libro->paginas;
        $libro->save();

        return redirect()->route('libros.index');
    }

    public function destroy($id){
        $libro = Book::find($id);

        $libro->delete();
        return redirect()->route('libros.index');
    }


    public function edit($id) {
        $libro = Book::find($id);

        return view('libros.edit', compact('libro'));
    }
}
