<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreGenreRequest;
use App\Models\Genres;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Genres $genres)
    {
        $genres = Genres::all();

        return response()->json($genres, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genres = Genres::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Genre created successfuly",
            'genres' => $genres
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genres = Genres::findorFail($id);
        if($genres)
        {
            $genres->genre_name = $request->genre_name;
            $genres->update();

            return response()->json([
                'message'=>'Genres updated succesfuly!',
                'genres' => $genres
            ], 200);
        }
        else
        {
            return response()->json(['message'=>'No Genre found!'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genres = Genres::findOrFail($id);
       
        $genres->delete();

        return response()->json([
                'message'=>'Genre deleted succesfuly!',
                'genres' => $genres
        ], 200);
    }
}