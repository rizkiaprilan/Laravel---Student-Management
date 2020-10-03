<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Faculties";
        $faculty = Faculty::all();
        return view('faculty/home', [
            'faculty' => $faculty,
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
        $title = "All Data Faculties";
        return view('faculty/create',[
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
        Faculty::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect('/faculty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Show Majority";

        $data = Faculty::where('id', '=', $id)->first();
//        dd($data);
        return view('faculty/show', [
            "judul" => $title,
            "data" => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "All Data Faculties";

        $data = Faculty::where('id', '=', $id)->first();
        return view('faculty/edit', [
            "judul" => $title,
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
        Faculty::where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,

            ]);


        return redirect('/faculty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Faculty::find($id);
        $data->forceDelete();

        return redirect('/faculty');
    }
}
