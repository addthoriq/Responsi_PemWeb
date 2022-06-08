<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbuController extends Controller
{
    public function __construct() {
        $this->middleware('auth:maba');
    }

    public function index()
    {
        //
    }
}
