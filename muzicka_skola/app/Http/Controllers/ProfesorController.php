<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Profesor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:40',
            'prezime' => 'required|string|max:40',
            'predmet' => 'required|string|max:40',
            'datum_rodjenja' => 'required|string|max:15',
            'email' => 'required|string|max:40|unique:profesors',
            'radni_staz' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }


        $profesor = Profesor::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'predmet' => $request->predmet,
            'datum_rodjenja' => $request->datum_rodjenja,
            'email' => $request->email,
            'radni_staz' => $request->radni_staz
        ]);

        $profesor->save();
        return response()->json(['Objekat je sacuvan', $profesor]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Profesor::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:40',
            'prezime' => 'required|string|max:40',
            'predmet' => 'required|string|max:40',
            'datum_rodjenja' => 'required|string|max:15',
            'email' => 'required|string|max:40|unique:profesors',
            'radni_staz' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $p = Profesor::find($id);
        // return response()->json($p);
        if ($p) {
            $p->ime = $request->ime;
            $p->prezime = $request->prezime;
            $p->predmet = $request->predmet;
            $p->datum_rodjenja = $request->datum_rodjenja;
            $p->email = $request->email;
            $p->radni_staz = $request->radni_staz;
            $p->save();
            return response()->json(["Uspesno azuriran profesor", $p]);
        } else {
            return response()->json("Ne postoji takav profesor u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::find($id);

        if ($profesor) {
            $profesor->delete();
            return response()->json(["Obrisan je profesor", $profesor]);
        } else {
            return response()->json(["Greska!!!"]);
        }
    }
}
