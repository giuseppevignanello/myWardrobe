<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Http\Requests\StoreDressRequest;
use App\Http\Requests\UpdateDressRequest;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dresses = Dress::all();
        return view('dress.index', compact('dresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dress.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDressRequest $request)
    {

        $val_data = $request->validated();
        Dress::create($val_data);

        return to_route('dress.index')->with('message', 'Dress created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDressRequest  $request
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDressRequest $request, Dress $dress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dress  $dress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
        $dress->delete();
        return to_route('home')->with('message', 'Dress deleted');
    }
}
