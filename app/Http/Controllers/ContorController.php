<?php

namespace App\Http\Controllers;

use App\Models\Contor;
use Illuminate\Http\Request;

class ContorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contors = auth()->user()->trei->sortBy('apart.nrap');
        return view('contor.index', compact('contors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartaments = auth()->user()->apartament;
        return view('contor.create', compact('apartaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ap_id'=>'required',
            'luna'=>'required',
            'an'=>'required',
            'contoare'=>'required'
        ]);
        Contor::create([
           'ap_id'=>$request->ap_id,
           'luna'=>$request->luna,
            'an'=>$request->an,
            'contoare'=>$request->contoare
        ]);

        return redirect()->back()->with('message', "Inregistrate efectutaata cu succes");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contor = Contor::find($id);
        return view('contor.edit', compact('contor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $contor = Contor::find($id);
        $contor->update($data);
        return redirect()->back()->with('message', 'Actualizarea cu succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contor = Contor::find($id);
        $contor->delete();
        return redirect()->back();
    }
}
