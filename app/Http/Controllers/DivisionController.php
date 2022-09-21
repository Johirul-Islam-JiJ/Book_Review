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
        //
    }


    public function store(Request $request)
    {
        //
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
