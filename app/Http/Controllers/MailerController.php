<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailerStoreRequest;

class MailerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(MailerStoreRequest $request)
    {

    }
}
