<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenreRequest;
use App\Models\Genres;
use Illuminate\Http\Request;

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

        return response()->json(['genres'=>$genres], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreRequest $request)
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
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function show(Genres $genres)
    {
        return $genres;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function edit(Genres $genres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $genres = Genres::find($id);
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
     * @param  \App\Models\Genres  $genres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Genres $genres, $id)
    {
        $genres = Genres::find($id);
        if($genres)
        {
            $genres->delete();

            return response()->json([
                'message'=>'Genres deleted succesfuly!',
                'genres' => $genres
            ], 200);
        }
        else
        {
            return response()->json(['message'=>'No Genre found!'], 404);
        }

        // $genres->delete();

        // return response()->json([
        //     'message'=>'Genres deleted succesfuly!',
        //     'genres' => $genres
        // ], 200);
    }
}
