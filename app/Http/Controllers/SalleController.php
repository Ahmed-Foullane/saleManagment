<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        return view('salles.index', ['salles' => Salle::all()]);
    }

    public function store(Request $request)
    {
        Salle::create($request->all());
        return redirect()->route('salles.index');
    }

    public function update(Request $request, Salle $salle)
    {
        $salle->update($request->all());
        return redirect()->route('salles.index');
    }
    public function destroy(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('salles.index');
    }
}
