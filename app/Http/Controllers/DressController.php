<?php

namespace App\Http\Controllers;

use App\Models\Dress;
use App\Http\Requests\StoreDressRequest;
use App\Http\Requests\UpdateDressRequest;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        $dresses = $user->dresses;

        return view('dress.index', compact('dresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $brands = Brand::all();


        return view('dress.create', compact('user', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDressRequest $request)
    {
        $user = Auth::user();
        $val_data = $request->validated();

        // add user id
        $val_data['user_id'] = $user->id;

        // add dress image
        if ($request->hasFile('image')) {
            $img_path = Storage::put('uploads/', $request->image);

            $val_data['image'] = $img_path;
        }

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
        $user = Auth::user();


        return view('dress.edit', compact('user', 'dress'));
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
        $user = Auth::user();
        $val_data = $request->validated();

        // add user id
        $val_data['user_id'] = $user->id;

        // add dress image
        if ($request->hasFile('image')) {
            $img_path = Storage::put('uploads/', $request->image);

            $val_data['image'] = $img_path;
        }

        $dress->update($val_data);

        return to_route('dress.index')->with('message', 'Dress updated successfully');
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
        return to_route('dress.index')->with('message', 'Dress deleted');
    }
}
