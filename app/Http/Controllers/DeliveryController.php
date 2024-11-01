<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryRequest;
use App\Models\Delivery;
use App\Http\Responses\BaseResponse; // Pastikan BaseResponse ada di namespace ini

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Delivery::all();
        $resp = new BaseResponse(true, 'Success', $deliveries);
        return $resp->getResponse();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DeliveryRequest $request)
    {
        $delivery = new Delivery();
        $delivery->delivery_number = $request->delivery_number;
        $delivery->company_name = $request->company_name;
        $delivery->shipper_id = $request->shipper_id;
        $delivery->status_id = $request->status_id;
        $delivery->delivery_date = $request->delivery_date;
        $delivery->receive_date = $request->receive_date;
        $delivery->confirmation_code = $request->confirmation_code;
        $delivery->created_by = 'admin'; // Atur sesuai dengan ID pengguna yang membuat
        $delivery->save();

        $resp = new BaseResponse(true, 'Delivery created successfully', $delivery);
        return $resp->getResponse();
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        $resp = new BaseResponse(true, 'Success', $delivery);
        return $resp->getResponse();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DeliveryRequest $request, Delivery $delivery)
    {
        $delivery->delivery_number = $request->delivery_number;
        $delivery->company_name = $request->company_name;
        $delivery->shipper_id = $request->shipper_id;
        $delivery->status_id = $request->status_id;
        $delivery->delivery_date = $request->delivery_date;
        $delivery->receive_date = $request->receive_date;
        $delivery->confirmation_code = $request->confirmation_code;
        $delivery->updated_by = 'admin'; // Atur sesuai dengan ID pengguna yang memperbarui
        $delivery->save();

        $resp = new BaseResponse(true, 'Delivery updated successfully', $delivery);
        return $resp->getResponse();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        $resp = new BaseResponse(true, 'Delivery deleted successfully', null);
        return $resp->getResponse();
    }
}
