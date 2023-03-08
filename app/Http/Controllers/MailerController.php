<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {

    }
}
