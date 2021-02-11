<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class AppController extends Controller
{
    public function index()
    {
        return response(['text' => 'Hello world!', 'today' => Carbon::now()]);
    }
}
