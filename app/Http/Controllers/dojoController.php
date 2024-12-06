<?php

namespace App\Http\Controllers;
use App\Models\dojo;
use App\Models\ninja;

use Illuminate\Http\Request;

class dojoController extends Controller
{
    public function index()
    {
        $dojo = Dojo::with('ninja')->orderBy('created_at', 'DESC')->paginate(10);

        return view('dojo.index', ['dojo' => $dojo]);
    }

    public function show(dojo $dojo)
    {
        $dojo->load(relations: 'ninja');

        return view('dojo.show', [
            'dojo' => $dojo
        ]);
    }

    // detroy controller
    public function destroy(Dojo $dojo)
    {
        $dojo->delete();

        return redirect()->route('dojo.index')->with('success', 'Dojo deleted successfully');
    }






}
