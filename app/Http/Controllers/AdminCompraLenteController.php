<?php

namespace App\Http\Controllers;

use App\venta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $venta = new Venta;

        $venta->name = $request->name;

        $venta->save();
    }
}