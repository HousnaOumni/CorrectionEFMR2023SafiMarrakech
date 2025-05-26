<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use App\Models\Club;
class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves=Eleve::all(); //sans with idclub
       // $eleves = Eleve::with('club')->get(); // affichage nom club
        return view('eleves.index',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all(); //select texte nom club
        //return view('eleves.create',['clubs'=>$clubs]);
        return view('eleves.create',compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eleve = Eleve::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'club_id' => $request->club_id
        ]);
        return redirect()->route('eleves.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eleve = Eleve::with('activites')->findOrFail($id);
        return view('eleves.show',compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $eleve = Eleve::findOrFail($id);
        $clubs = Club::all();
        return view('eleves.edit',['eleve'=>$eleve,'clubs'=>$clubs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eleve=Eleve::findOrFail($id);
        $eleve->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'club_id' => $request->club_id
        ]);
        return redirect()->route('eleves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès.');
    }
}
