<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Http\Request;

class EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $evs = Party::all();

        return view("bpart.eve.index",compact('evs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("bpart.eve.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/images');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }

        $request->user()->ps()->create($inputs);

        return redirect('admin/event');
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
        //
        $ev =Party::findOrFail($id);
        return view("bpart.eve.edit",compact('ev'));
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
        //
        $ev = Party::findOrFail($id);
        $inputs = $request->all();
        if ( $request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $file = $request->file('image');
                $name = $file->getClientOriginalName();
                $destinationPath = public_path('/frontend/images');
                $file->move($destinationPath , $name);
                //$inputs = $request->all();
                $inputs['image'] = $name;
            }
        }

        $ev->update($inputs);

        return redirect('admin/event');
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
        $ev = Party::findOrFail($id);
        unlink(public_path('frontend/images/').$ev->image);
        $ev->delete();

        return redirect('admin/event');
    }
}
