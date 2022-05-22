<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use App\Models\VehicleDetail;
use App\Models\Category;
use App\Models\Make;
use App\Models\Mod;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        

        

        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $makes = Make::all();
        $mods = Mod::all();
        $vehicleDetails = VehicleDetail::all();
        $vehicles = Vehicle::all();

        
        

        
       

       
        return view('admin.vehicles.create', compact('categories','makes', 'mods','vehicleDetails','vehicles'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request,Vehicle $vehicles)
    {
        
      //  dd($request->all());
       /* $car = Car::create([
           
            'model' => $request->model,
            'engine' => $request->engine,
            'image' => $request->image,
            'status' => $request->status,
            'color' => $request->color,
            'price' => $request->price,
            'brand_id' => $request->brand,
        ]);*/

        $vehicles = new Vehicle;
        
        $vehicles->name = $request->name;
        $vehicles->mod_id = $request->mod_id;
        $vehicles->engine = $request->engine;
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('imgs/', $filename);
            $vehicles->image = $filename;
        }
        $vehicles->status = $request->status;
        $vehicles->color = $request->color;
        $vehicles->price = $request->price;

 
        $vehicles->save();


        $vehicles->categories()->sync($request->get('categories')); 
       
       
        
        
         
        return to_route('admin.vehicles.index');

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
        $vehicles = Vehicle::all();

        return view('admin.vehicles.edit', compact('vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicles)
    {   
        
        $vehicles = new Vehicle;
        
        $vehicles->name = $request->name;
        $vehicles->mod_id = $request->mod_id;
        $vehicles->engine = $request->engine;
        if($request->hasFile('image')){
            
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('imgs/', $filename);
            $vehicles->image = $filename;
        }
        $vehicles->status = $request->status;
        $vehicles->color = $request->color;
        $vehicles->price = $request->price;

        $vehicles->update();


        return to_route('admin.vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicles)
    {
        $vehicles->delete();

        return to_route('admin.vehicles.index');
    }




  
}
