<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response|\Illuminate\View\View
     */
    public function index()
    {
        $brands=Brand::all();
        return view('admin_panel.brand.index', ['brands'=>$brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin_panel.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {   $brand=new Brand();
        $brand->name=$request->input('name');
        $brand->save();
        return redirect()->route('brand.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return Response
     */
    public function show(Brand $brand)
    {
        return view('admin_panel.brand.details',['brand'=>$brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return Response
     */
    public function edit(Brand $brand)
    {
        return view('admin_panel.brand.edit',['brand'=>$brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Brand  $brand
     * @return Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->name=$request->input('name');
        $brand->save();
        return redirect()->route('brand.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()-route('brand.index');
    }
}
