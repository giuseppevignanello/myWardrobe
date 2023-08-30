<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();

        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // countries list

        $countries = [
            'United States',
            'Italy',
            'France',
            'Germany',
            'United Kingdom',
            'Canada',
            'Spain',
            'Australia',
            'China',
            'Japan',
            'Brazil',
            'India',
            'Mexico',
            'Switzerland',
            'Netherlands',
            'Sweden',
            'Portugal',
            'Greece',
            'Argentina',
            'Belgium',
            'Norway',
            'Denmark',
            'Austria',
            'Egypt',
        ];

        // take categories
        $categories = Category::all();

        return view('brand.create', compact('countries', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $val_data = $request->validated();

        // add logo image
        if ($request->hasFile('logo')) {
            $img_path = Storage::put('uploads/', $request->logo);

            $val_data['logo'] = $img_path;
        }


        $new_brand = Brand::create($val_data);

        // add categories

        if ($request->has('categories')) {
            $new_brand->categories()->attach($request->categories);
        }


        return to_route('dress.create')->with('message', 'Dress created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $user = Auth::user();
        // countries list

        $countries = [
            'United States',
            'Italy',
            'France',
            'Germany',
            'United Kingdom',
            'Canada',
            'Spain',
            'Australia',
            'China',
            'Japan',
            'Brazil',
            'India',
            'Mexico',
            'Switzerland',
            'Netherlands',
            'Sweden',
            'Portugal',
            'Greece',
            'Argentina',
            'Belgium',
            'Norway',
            'Denmark',
            'Austria',
            'Egypt',
        ];

        $categories = Category::all();

        return view('brand.edit', compact('user', 'brand', 'countries', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
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

        $brand->update($val_data);

        return to_route('brand.index')->with('message', 'Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route('brand.index')->with('message', 'Brand deleted');
    }
}
