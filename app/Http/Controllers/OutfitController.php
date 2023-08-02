<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use App\Http\Requests\StoreOutfitRequest;
use App\Http\Requests\UpdateOutfitRequest;
use App\Models\Dress;
use Illuminate\Support\Facades\Auth;

class OutfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // user authentication

        $user = Auth::user();

        // take user's outfit
        $outfits = Outfit::where('user_id', $user->id)->get();

        return view('outifit.index', compact('user', 'outfits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        //take dresses for the outfit
        $dresses = Dress::orderByDesc('id')->get();


        return view('outifit.create', compact('user', 'dresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOutfitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutfitRequest $request)
    {
        $user = Auth::user();
        $val_data = $request->validated();

        // creare the outfit with validated data
        $new_outfit = Outfit::create($val_data);

        //adding dresses to the outfit
        if ($request->has('dresses')) {
            $new_outfit->dresses()->attach($request->dresses);
        }

        return view('outifit.index')->with('message', 'Outfit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function show(Outfit $outfit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function edit(Outfit $outfit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutfitRequest  $request
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutfitRequest $request, Outfit $outfit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outfit  $outfit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outfit $outfit)
    {
        //
    }
}
