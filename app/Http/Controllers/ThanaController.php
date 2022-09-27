<?php

namespace App\Http\Controllers;

use App\Models\Thana;
use App\Models\Division;
use App\Models\District;
use Illuminate\Http\Request;

class ThanaController extends Controller
{

    public function index()
    {
        $thanas = Thana::with('division','district')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('thanas.index',compact('thanas'));
    }


    public function create()
    {
        $divisions = Division::orderBy('name', 'asc')->get();
        $districts =District::orderBy('name', 'desc')->get();
            return view('thanas.create', compact('districts','divisions'));
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' =>['required','string','max:255','min:3'],
            'division_id' =>['required'],
            'district_id' =>['required'],
        ]);

        if(Thana::create($valid))
            return redirect()->route('thanas.index');
    }


    public function show(Thana $thana)
    {
        //
    }


    public function edit(Thana $thana)
    {
        $divisions = Division::orderBy('name', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();
        return view('thanas.edit', compact('thana','districts','divisions' ));
    }


    public function update(Request $request, Thana $thana)
    {
        $valid = $request->validate([
            'name' =>['required','string','max:255','min:3'],
            'division_id' =>['required'],
            'district_id' =>['required'],
        ]);

        if($thana->update($valid))
            return redirect()->route('thanas.index');
    }


    public function destroy(Thana $thana)
    {
        if ($thana->delete())
            return redirect()->route('thanas.index');
    }
}
