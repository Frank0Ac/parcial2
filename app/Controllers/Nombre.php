<?php

namespace App\Controllers;

class Nombre extends BaseController
{
    public function index()
    {
        return view('nombre/registrar');
    }
}