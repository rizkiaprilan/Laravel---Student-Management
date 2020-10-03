<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Majority;
use Illuminate\Http\Request;

class MajorityControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Majorities";
        $major = Majority::all();
        return view('major/home', [
            'major' => $major,
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
        $faculty = Faculty::all();
        return view('major/create',[
            'faculty' => $faculty,

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
        Majority::create([
            'name' => $request->name,
            'description' => $request->description,
            'faculty_id' => $request->faculty_id
        ]);

        return  redirect('/majority');
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
        return view('major/show', [
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

        $data = Majority::where('id','=',$id)->first();
        $faculty = Faculty::all();

        return view('major/edit',[
            "data" => $data,
            'faculty' =>$faculty,
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
        Majority::where('id','=',$request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,
                'faculty_id' => $request->faculty_id
            ]);

        return redirect('/majority');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Majority::find($id);
        $data->forceDelete();

        return redirect('/majority');
    }
}
