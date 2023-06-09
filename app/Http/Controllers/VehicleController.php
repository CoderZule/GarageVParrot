<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
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
        return view('employee.vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStore($request);
        $data = $request->all();

        $data['equipment'] = implode(',', $request->equipment);
        $images = [];
        $equipment = [];

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                if ($image) {
                    $name = $image->getClientOriginalName(); // Get the original name of the file
                    $destination = public_path('/vehicles_images');
                    $image->move($destination, $name);
                    $images[] = $name;
                }
            }

            if (!empty($images)) {
                $data['image'] = implode(',', $images);
            }
        }


        if (count($images) === 0) {
            return redirect()->back()->with(['error' => 'Veuillez sélectionner au moins une image.']);
        } else {
            Vehicle::create($data);
            return redirect()->back()->with('message', "Véhicule d'occasion créé");
        }
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

    public function validateStore($request)
    {
        return $this->validate($request, [
            'brand' => 'required',
            'model' => 'required',
            'fiscalPower' => 'required',
            'price' => 'required',
            'releaseYear' => 'required',
            'energy' => 'required',
            'mileage' => 'required',
            'gearbox' => 'required',
            'description' => 'required',
            'image.*' => 'required|file|mimes:jpeg,jpg,png',
        ]);
    }
}
