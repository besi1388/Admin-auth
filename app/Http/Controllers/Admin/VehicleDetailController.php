<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use App\Models\VehicleDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vehicleDetails = VehicleDetail::all();
        return view('admin.vehicleDetails.index', compact('vehicleDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicleDetails.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , VehicleDetail $VehicleDetails)
    {
        VehicleDetail::create([
            'dors' => $request->dors,
            'seats' => $request->seats,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return to_route('admin.vehicleDetails.index')->with('success','Booking has been created successfully.');

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
        $vehicleDetails = VehicleDetail::find($id);

        return view('admin.vehicleDetails.edit', compact('vehicleDetails'));
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
        $vehicleDetails = VehicleDetail::all();
        $vehicleDetails->update([
            'dors' => $request->dors,
            'seats' => $request->seats,
            'vehicle_id' => $request->vehicle_id,
        ]);

        return to_route('admin.vehicleDetails.index', compact('vehicleDetails'))->with('success','Booking has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicleDetails = VehicleDetail::find($id);
        $vehicleDetails->delete();

        return to_route('admin.vehicleDetails.index');
    }
   
    
}
