<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Http\Requests\StoreInformationRequest;
use App\Http\Requests\UpdateInformationRequest;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = new Information();

        $informations = $model->getAll();
        
        return response()->json($informations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInformationRequest $request)
    {
        $inforamtion = new Information();

        $inforamtion->first_name = $request->input('first_name');
        $inforamtion->last_name = $request->input('last_name');
        $inforamtion->age = $request->input('age');
        $inforamtion->gender = $request->input('gender');
        $inforamtion->address = $request->input('address');

        $inforamtion->save();

        return response()->json(["message" => 'Information Successfully Added!', "data" => $inforamtion]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInformationRequest $request, $id)
    {
        $inforamtion = Information::find($id);
        $inforamtion->first_name = $request->input('first_name');
        $inforamtion->last_name = $request->input('last_name');
        $inforamtion->age = $request->input('age');
        $inforamtion->gender = $request->input('gender');
        $inforamtion->address = $request->input('address');

        $inforamtion->save();

        return response()->json(["message" => 'Information Successfully Updated!', "data" => $inforamtion, "status" => 200]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inforamtion = Information::find($id);
        $inforamtion->delete();

        return response()->json(['message' => "Information Deleted Successfully", 'status' => 200]);
    }
}
