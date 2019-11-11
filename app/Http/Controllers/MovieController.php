<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\MovieRequest;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function index() {
        $data = Movie::ordered()->get();
        return view('public.movie.index', compact('data'));
   }

    public function show( $id ) {
        $data = Movie::find($id)->first();
        return view('public.movie.show', compact('data'));
    }

    public function edit(MovieRequest $request, $id = null ) {
        $data = ($id > 0) ? Movie::find($id)->first() : null;
        $authors = Author::ordered()->get();
        return view('public.movie.show', compact('data','authors'));
    }

    public function store(MovieRequest $request, $id = null) {
        $validated = $request->validated();
    }

    public function delete( $id ) {

    }
}
