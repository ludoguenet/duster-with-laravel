<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DusterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'Hello '.$request->name;
    }
}
