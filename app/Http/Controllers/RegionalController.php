<?php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;

class RegionalController extends Controller
{
    public function index()
    {
        return Regional::all();
    }
 
    public function show($id)
    {
        return Regional::find($id);
    }

    public function store(Request $request)
    {
        return Regional::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Regional = Regional::findOrFail($id);
        $Regional->update($request->all());

        return $Regional;
    }

    public function delete(Request $request, $id)
    {
        $Regional = Regional::findOrFail($id);
        $Regional->delete();

        return 204;
    }
}
