<?php

namespace App\Http\Controllers;

use App\Declaration;
use Illuminate\Http\Request;

class DeclarationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declarations = Declaration::all();
        // dd($declarations);
        return view('declaration.index', compact('declarations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('declaration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $declaration = new Declaration();

        $declaration->last_name = request('last_name');
        $declaration->first_name = request('first_name');
        $declaration->date_naissance = request('date_naissance');
        $declaration->sexeEnfant = request('sexeEnfant');
        $declaration->scolariseEnfant = request('scolariseEnfant');
        $declaration->employe_adulte = request('employe_adulte');
        $declaration->medecin_traitant = request('medecin_traitant');
        $declaration->commentaire = request('commentaire');

        $declaration->save();

        return redirect()->back()->with('message', 'Votre déclaration a bien été prise en compte!');

        // return redirect('/declarations');
        // return request()->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $declaration = Declaration::findOrFail($id);
        
        return view('declaration.show', compact('declaration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $declarations = Declaration::findOrFail($id);
        return view('declaration.edit', compact('declarations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $declaration = Declaration::findOrFail($id);

        
        $declaration->last_name = request('last_name');
        $declaration->first_name = request('first_name');
        $declaration->date_naissance = request('date_naissance');
        $declaration->sexeEnfant = request('sexeEnfant');
        $declaration->scolariseEnfant = request('scolariseEnfant');
        $declaration->employe_adulte = request('employe_adulte');
        $declaration->medecin_traitant = request('medecin_traitant');
        $declaration->commentaire = request('commentaire');

        $declaration->save();

        return redirect('/declarations');

        // dd('Hello it is me');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Declaration  $declaration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Declaration::findOrFail($id)->delete();
        // dd('You deleted me');
        return redirect('/declarations');
    }
}
