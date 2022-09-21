<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{

    public function index()
    {
        $divisions = Division:: latest()->paginate();
        return view('divisions.index', compact('divisions'));
    }


    public function create()
    {
        return view('divisions.form');
    }


    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required','string','max:255','min:3'],
        ]);
        if (division::create($valid))
        return redirect()->route('divisions.index');
    }


    public function show(Division $division)
    {
        //
    }


    public function edit(Division $division)
    {
        //
    }


    public function update(Request $request, Division $division)
    {
        //
    }


    public function destroy(Division $division)
    {
        //
    }
}
