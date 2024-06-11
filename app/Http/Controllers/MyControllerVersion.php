<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllerVersion extends Controller
{
    public function verse(): string
    {
        return "123123123";
    }
}
