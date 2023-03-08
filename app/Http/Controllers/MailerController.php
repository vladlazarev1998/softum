<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailerStoreRequest;
use App\Services\MailerService;

class MailerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(MailerStoreRequest $request, MailerService $mailerService)
    {
        $mailerService->save($request->getDTO());
    }
}
