<?php

namespace App\Http\Controllers;


use App\Models\Device;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use DB;

class DeviceController extends Controller
{
    public function updateStatus(Request $request)
    {
        // Get the device ID and current timestamp from the request
        $deviceId = $request->input('device_id');
        $timestamp = Carbon::now();

        // Update the device status in the database
        Device::where('device_id', $deviceId)->update([
            'last_seen' => $timestamp,
            'active' => true // Set the device as active
        ]);

        // return response()->json(['message' => 'Status updated successfully']);
        return response()->json(['success' => true], 200);
    }
    public function inputstatus(Request $request)
    {
        $deviceId = array();
        $deviceId['device_id'] = $request->device_id;
        $timestamp = Carbon::now();

        // Update the device status in the database
        Device::where('device_id', $deviceId)->update([
            'last_seen' => $timestamp,
            'active' => true // Set the device as active
        ]);

        // return response()->json(['message' => 'Status updated successfully']);
        return response($deviceId, 200);
    }


    public function showStatus()
    {
        $devices = Device::all();
        return view('status', ['devices' => $devices]);
    }

}
