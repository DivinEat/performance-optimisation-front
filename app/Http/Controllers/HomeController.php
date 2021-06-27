<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    use Illuminate\Support\Facades\Http;

    $response = Http::get('http://example.com');
}
