<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{

    public function index()
    {
        $districts = District::with('division')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('districts/index',compact('districts'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(District $district)
    {
        //
    }


    public function edit(District $district)
    {
        //
    }


    public function update(Request $request, District $district)
    {
        //
    }


    public function destroy(District $district)
    {
        //
    }
}
