<?php

namespace App\Http\Controllers;

class Statuses extends Controller
{
    public function healthcheck()
    {
        return response()->json([
            'status' => 'ok',
        ]);
    }
}