<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function all()
    {
        $response = Http::get('http://localhost:8000/api/all');

        dd($response);
    }

    public function getTable()
    {
        $response = Http::get('http://localhost:8000/api/flux-total-nat/');

        dd($response);
    }
}
