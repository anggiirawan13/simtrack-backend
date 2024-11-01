<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipperRequest;
use App\Models\Shipper;
use App\Http\Responses\BaseResponse; // Pastikan BaseResponse ada di namespace ini

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shippers = Shipper::all();
        $resp = new BaseResponse(true, 'Success', $shippers);
        return $resp->getResponse();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShipperRequest $request)
    {
        $shipper = new Shipper();
        $shipper->user_id = $request->user_id;
        $shipper->device_mapping = $request->device_mapping;
        $shipper->save();

        $resp = new BaseResponse(true, 'Shipper created successfully', $shipper);
        return $resp->getResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Shipper $shipper)
    {
        $resp = new BaseResponse(true, 'Success', $shipper);
        return $resp->getResponse();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShipperRequest $request, Shipper $shipper)
    {
        $shipper->user_id = $request->user_id;
        $shipper->device_mapping = $request->device_mapping;
        $shipper->save();

        $resp = new BaseResponse(true, 'Shipper updated successfully', $shipper);
        return $resp->getResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shipper $shipper)
    {
        $shipper->delete();
        $resp = new BaseResponse(true, 'Shipper deleted successfully', null);
        return $resp->getResponse();
    }
}
