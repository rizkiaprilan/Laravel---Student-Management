<?php

namespace App\Http\Controllers;

use App\Card;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Cards";
        $card = Card::all();
        return view('card/home', [
            'card' => $card,
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
        $student = Student::all();
        return view('card/create',[
            'student' => $student,

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
//        $data = Card::where('name', '=', $request->name)->first();
//        $cek = Student::where('name', '=', $request->name)->get();
//        $id = $data->id;
//        dd($cek);
        Card::create([
            'name' => $request->name,
            'student_id' =>  $request->student_id ,
        ]);

        return  redirect('/card');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Show Card";

        $data = Card::where('id', '=', $id)->first();
//        dd($data);
        return view('card/show', [
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

        $data = Card::where('id', '=', $id)->first();
//        dd($data);
        return view('card/edit', [
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
        Card::where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'student_id' => $request->id,

            ]);


        return redirect('/card');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Card::find($id);
        $data->forceDelete();

        return redirect('/card');
    }
}
