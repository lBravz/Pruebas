<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNosotrosController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Nosotros/index')
        ];

        return view('Shared/_Layout', $data);
    }
}
