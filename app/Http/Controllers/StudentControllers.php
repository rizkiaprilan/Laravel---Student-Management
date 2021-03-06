<?php

namespace App\Http\Controllers;

use App\Majority;
use App\Student;
use Illuminate\Http\Request;

class StudentControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Students";
        $student = Student::all();
        return view('student/home', [
            'student' => $student,
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
        $majority = Majority::all();
        return view('student/create',[
            'majority' => $majority,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasil = (int)$request->majority_id;
        Student::create([
            'name' => $request->name,
            'majority_id' => $hasil,
            'address' => $request->address
        ]);

        return  redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Majority ID > id";

        $data = Student::where('id', '=', $id)->first();
        return view('student/show', [
            "title" => $title,
            "data" => $data,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::where('id', '=', $id)->first();
        $Majority = Majority::all();

        return view('student/edit', [
            'data' => $data,
            'majority' => $Majority,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Student::where('id', '=', $request->id)
            ->update([
                'address' => $request->address,
                'name' => $request->name,
                'majority_id' => $request->majority_id,
            ]);

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $card = Card::find();
        $data->forceDelete();

        return redirect('/student');
    }
}
