<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class ClubControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Clubs";
        $club = Club::all();
        return view('club/home', [
            'club' => $club,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "All Data clubs";
        return view('club/create',[
            "judul" => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Club::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/club');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Club::where('id', '=', $id)->first();
        return view('club/edit', [
            "data" => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Club::where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,

            ]);


        return redirect('/club');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Club::find($id);
        $data->forceDelete();

        return redirect('/club');
    }
}
