<?php

namespace App\Http\Controllers;

use App\Models\todu;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class ToduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index()
    {
        return view('dashboard');
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_record');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $res=new todu;
        $res->name=$request->input('name');
        $res->course=$request->input('course');
        $res->fee=$request->input("fee");
        $res->save();
        $request->session()->flash('msg','Data Save You Done');
        return redirect('todu');
    }


/**
     * Display the specified resource.
     *
     * @param  \App\Models\todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function show(todu $todu)
    {
        return view('todu')->with('todu_arr',todu::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function edit(todu $todu,$id)
    {
        return view('todu_edit')->with('todu_arr',todu::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todu $todu)
    {
        $res=todu::find($request->id);
        $res->name=$request->input("name");
        $res->course=$request->input("course");
        $res->fee=$request->input("fee");
        $res->save();
        $request->session()->flash('msg','Data Update You ');
        return redirect('todu');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todu  $todu
     * @return \Illuminate\Http\Response
     */
    public function destroy(todu $todu,$id)
    {
        todu::destroy(array('id',$id));
        return redirect('todu');
    }
}
