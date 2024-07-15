<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprenant;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function detail($id)
    {
        //
        $apprenants= Apprenant::findOrFail($id);
        return view("apprenant.detail",compact("apprenants"));
    }
    public function index()
    {
        $apprenants= Apprenant::All();
        return view("apprenant.lister",compact("apprenants"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("apprenant.ajouter");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "nom"=> "required",
            "prenom"=> "required",
            "filiere"=> "required",
            "email"=> "required",
            "age"=> "required",
        ]);

        $apprenant= new Apprenant();
        $apprenant->nom=$request->nom;
        $apprenant->prenom=$request->prenom;
        $apprenant->filiere=$request->filiere;
        $apprenant->email=$request->email;
        $apprenant->age=$request->age;
        $apprenant->save();


        return redirect("/ajouter")->with("success","Bien sauvegarder");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $apprenant= Apprenant::find($id);
        $apprenant->delete();
        return redirect("/dashboard")->with("success","Bien suprimer");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $apprenant= Apprenant::find($id);
        return view("apprenant.modifier", compact("apprenant"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            "nom"=> "required",
            "prenom"=> "required",
            "filiere"=> "required",
            "email"=> "required",
            "age"=> "required",
        ]);

        $apprenant = Apprenant::find($request->id);
        $apprenant->nom=$request->nom;
        $apprenant->prenom=$request->prenom;
        $apprenant->filiere=$request->filiere;
        $apprenant->email=$request->email;
        $apprenant->age=$request->age;
        $apprenant->update();

        return redirect("/dashboard")->with("success","Bien Modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
