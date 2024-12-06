<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\dojo;
use Illuminate\Http\Request;

class ninjaController extends Controller
{

    public function index()
    {
        $ninja = Ninja::with('dojo')->orderBy('created_at', 'DESC')->paginate(10);

        return view('ninja.index', [
            'ninja' => $ninja,
        ]);
    }

    public function show(Ninja $ninja)
    {
        $ninja->load(relations: 'dojo');

        return view('ninja.show', [
            'ninja' => $ninja,
        ]);
    }

    public function create()
    {
        $dojo = dojo::all();
        return view('ninja.create', [
            'dojo' => $dojo,
        ]);

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);
        Ninja::create($validated);
        return redirect()->route('ninja.index')->with('success', 'Ninja has been created');
    }

    public function destroy(Ninja $ninja)
    {
        // $ninja = Ninja::findOrFail($id);
        $ninja->delete();
        return redirect()->route('ninja.index')->with('success', 'Ninja has been deleted');
    }




}
