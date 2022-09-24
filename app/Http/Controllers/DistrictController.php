<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{

    public function index()
    {
        $districts = District::with('division')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('districts.index',compact('districts'));
    }


    public function create()
    {

        $divisions = Division::orderBy('name', 'asc')->get();
            return view('districts.form', compact('divisions'));
    }


    public function store(Request $request)
    {

        $valid = $request->validate([
            'name' =>['required','string','max:255','min:3'],
            'division_id' =>['required']
        ]);

        if(District::create($valid))
            return redirect()->route('districts.index');
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
        if($district->delete())
            return redirect()->route('districts.index');
    }
}
