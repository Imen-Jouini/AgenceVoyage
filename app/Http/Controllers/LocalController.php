<?php

namespace App\Http\Controllers;

use App\Local;
use Illuminate\Http\Request;
use App\Category;
use App\Place;
use App\Photo;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local=Local::orderBy('id')->get();

       return view('Local.indexLocal',compact('local')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie=Category::all();
        $place = Place::all();
        return view('Local.createLocal',compact('categorie','place'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $local = Local::create([
            'nbretoile'=>$request->nombreetoile,
            'nom'=>$request->nom,
            'capacite'=>$request->capacite,
            'adresse'=>$request->adresse,
            'description'=>$request->Description,
            'category_id'=>$request->categorie,
            'place_id'=>$request->place, 
            'prix'=>$request->prix,
            
        ]);

    if($request->hasfile('photo'))
        {
            foreach($request->photo as $photo)
            {
            $url = time().'-'.$photo->getClientOriginalName();
            $destination = 'images';
            $photo->move($destination,$url);
            $image=Photo::create(['photo'=>$url,'local_id'=>$local->id
            ]);
            }
        }
        
       

      
    
     return redirect()->route('local.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        $categorie=Category::all();

        $place=Place::all();
        return view('Local/editLocal',compact('categorie','place','local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
       
        $local->update([
            'nbretoile'=>$request->nbretoile,
            'nom'=>$request->nom,
            'capacite'=>$request->capacite,
            'adresse'=>$request->adresse,
            'description'=>$request->description,
            'category_id'=>$request->categorie,
            'place_id'=>$request->place, 
            'prix'=>$request->prix]);

           return redirect()->route('local.index')->with('successNewClient', 'client modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        //
    }
}
