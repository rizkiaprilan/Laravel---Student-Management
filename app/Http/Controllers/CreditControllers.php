<?php

namespace App\Http\Controllers;

use App\Card;
use App\Credit;
use Illuminate\Http\Request;

class CreditControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Data Credit";
        $credit = Credit::all();
        return view('credit/home', [
            'credit' => $credit,
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
        $title = "All Data Credit";
        $card = Card::all();
//        dd($card);
        return view('credit/create', [
            "judul" => $title,
            'card' => $card,
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
        Credit::create([
            'student_card_id' => $request->card_id,
            'balance' => $request->balance,
        ]);
        return redirect('/credit');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Credit::where('id', '=', $id)->first();
        $card = Card::all();

        return view('credit/edit', [
            'data' => $data,
            'card' => $card,
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
        Credit::where('id', '=', $request->id)
            ->update([
                'student_card_id' => $request->card_id,
                'balance' => $request->balance,
            ]);

        return redirect('/credit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Credit::find($id);
        $data->forceDelete();

        return redirect('/credit');
    }
}
