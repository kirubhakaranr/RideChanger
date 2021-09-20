<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FastParity;

class FastParityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fast_parity = FastParity::first();
        return view('admin.fast-parity.setting',compact('fast_parity'));
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
    public function store(Request $request)
    {
        $request->validate([
            'green_ratio' => ['required'],
            'violet_ratio' => ['required'],
            'red_ratio' => ['required'],
            'number_ratio' => ['required'],
            'duration' => ['required'],
        ]);

        FastParity::firstOrCreate([
            'green_ratio' => $request->green_ratio,
            'violet_ratio' => $request->violet_ratio,
            'red_ratio' => $request->red_ratio,
            'red_ratio' => $request->red_ratio,
            'number_ratio' => $request->number_ratio,
            'duration' => $request->duration,
        ]);

        return redirect()->route('admin.fast-parity.index')->with('success','Fast Parity Setting Updated');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
