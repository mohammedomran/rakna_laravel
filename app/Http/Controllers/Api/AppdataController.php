<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appdata;
use App\Models\Servo;
use App\Models\Sensor;
use App\Models\Otp;


use App\Http\Traits\GeneralTrait;


class AppdataController extends Controller
{

    
    use GeneralTrait;
    /*
DB_CONNECTION=mysql
DB_HOST=aa1sn1rqldkit1v.cn9hga52ou34.eu-west-1.rds.amazonaws.com
DB_PORT=3306
DB_DATABASE=rakna_db
DB_USERNAME=raknra
DB_PASSWORD=rakna2021*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function servosData()
    {
        //
        $servos = Servo::all();
        return $this->returnData("servos data has been gotten successfully", "servos", $servos);

    }
    public function sensorsData()
    {
        //
        $sensors = Sensor::all();
        return $this->returnData("sensors data has been gotten successfully", "sensors", $sensors);

    }

    public function editServosData($id, $status)
    {
        //
        $servo = Servo::find($id);
        $servo->update([
            'status'=>$status,
        ]);
        return $this->returnData("servo data has been updated successfully", "servo", $servo);

    }

    public function editSensorsData($id, $status)
    {
        //
        $sensor = Sensor::find($id);
        $sensor->update([
            'status'=>$status,
        ]);
        return $this->returnData("sensor data has been updated successfully", "sensor", $sensor);

    }

    public function checkOtp(Request $request)
    {
        //
        $otps = Otp::where("otp", $request->get("otp"))->get();
        $status=0;
        if(count($otps)) {
            $status=1;
        }
        return $this->returnData("otp status has been gotten successfully", "otp", $status);

    }


    public function index()
    {
        //
        $app_data = Appdata::all();
        return $this->returnData("app data has been gotten successfully", "app_data", $app_data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

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
    public function destroy(Request $request)
    {

    }
}
