<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function all()
    {
        $response = Http::get('http://app-back/api/all');

        dd($response->json());
    }

    public function getTable()
    {
        $response = Http::get('http://localhost:8000/api/flux-total-nat/');

        dd($response);
    }
}
