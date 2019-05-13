<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Http\Resources\MovieResource;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
      $movies = Movie::paginate(10);

      return MovieResource::collection($movies);
    }

    public function store(Request $request)
    {
        
        $movie = $request->isMethod('put') ? Movie::findOrFail
        ($request->movie_id) : new Movie;

        $movie->id = $request->input('movie_id');
        $movie->judul = $request->input('judul');
        $movie->genre = $request->input('genre');
        $movie->sinopsis = $request->input('sinopsis');
        $movie->pemain = $request->input('pemain');
        $movie->produser = $request->input('produser');
        $movie->sutradara = $request->input('sutradara');
        $movie->penulis = $request->input('penulis');
        $movie->produksi = $request->input('produksi');
        $movie->poster = $request->input('poster');
        $movie->trailer = $request->input('trailer');
        $movie->umur = $request->input('umur');
        $movie->rating = $request->input('rating');
        $movie->durasi = $request->input('durasi');
        $movie->jadwal = $request->input('jadwal');

        if($movie->save()){
            return new MovieResource($movie);

        }

    }

    public function show($id)
    {
        //Get single movie
        $movie = Movie::findOrFail($id);

        //Return single movie as resource
        return new MovieResource($movie);
    }

    public function destroy($id)
    {
        //Get single movie
        $movie = Movie::findOrFail($id);

        if($movie->delete()){
            return new MovieResource($movie);
        }
    }
}
