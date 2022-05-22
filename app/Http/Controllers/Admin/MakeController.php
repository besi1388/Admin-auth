<?php

namespace App\Http\Controllers\Admin;

use App\Models\Make;
use App\Models\Mod;
use App\Models\Vehicle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::get();
        return view('admin.makes.index', compact('makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.makes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $makes = Make::create([
            'name' => $request->name
            
        ]);

     /*     $makes = new Make;
        $makes->name = $request->name;
        $makes->save();*/

        
        return to_route('admin.makes.index');
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
        $makes = Make::find($id);
        return view('admin.makes.edit', ['makes'=>$makes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $makes = Make::where('name','=',$id);
        $makes->update([
            'name' => $request->name,
        ]);

        return to_route('admin.makes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makes = Make::find($id);
        $makes->delete();

        return to_route('admin.makes.index');
    }
}
