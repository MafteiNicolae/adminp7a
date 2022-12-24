<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\apartament;
use Illuminate\Http\Request;

class ApartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartaments = apartament::all();
        return view('admin.apartament.index', compact('apartaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartament.create');
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
           'user_id'=>'required',
           'nrap'=>'required',
           'nrcam'=>'required',
           'nrbai'=>'required'
        ]);
        apartament::create([
           'user_id'=>$request->user_id,
           'nrap'=>$request->nrap,
           'nrcam'=>$request->nrcam,
           'nrbai'=>$request->nrbai
        ]);
        return redirect()->back()->with('message', 'Apartament creat cu succes');
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
        $apartament = apartament::find($id);
        return view('admin.apartament.edit', compact('apartament'));
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
        $this->validate($request, [
            'user_id'=>'required',
            'nrap'=>'required',
            'nrcam'=>'required',
            'nrbai'=>'required'
        ]);
        $data=$request->all();
        $apartamente=apartament::find($id);
        $apartamente->update($data);
        return redirect()->back()->with('message', 'Apartament modificat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
