<?php

namespace App\Http\Controllers\Admin;
use App\Models\Make;
use App\Models\Vehicle;
use App\Models\Mod;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ModController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        
        
        $mods = Mod::all();
        

      
       // $brands = Brand::where('brand_id', $carModels)->get();
        
        

        

        return view('admin.models.index', compact('mods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $makes = Make::all();

     /*  $mods = Mod::where('make_id', $request->make_id)->get();
            */

        return view('admin.models.create', compact('makes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Make  $makes)
    {
       /* $carModels = CarModel::create([
            'name' => $request->name,
            'make_id' => $request->brand,
            
        ]);
*/
        
        $mods = new Mod;
        $mods->name = $request->name;
        $mods->make_id = $request->make;
        $mods->save();
        
        return to_route('admin.models.index', compact('makes'));
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
        $mods = Mod::find($id);
        return view('admin.models.edit', compact('mods'));
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
        $mods = Mod::where('name','=', $id);
        $mods->update([
            'name' => $request->name,
            'make_id' => $request->make_id,
        ]);

        

        return to_route('admin.models.index', compact('mods'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = Mod::find($id);
        $mod->delete();

        return to_route('admin.models.index');
    }
}