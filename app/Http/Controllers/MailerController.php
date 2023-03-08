<?php

namespace App\Http\Controllers;

use App\Events\StoreMailer;
use App\Http\Requests\MailerStoreRequest;
use App\Models\Mailer;
use App\Services\MailerService;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(MailerStoreRequest $request, MailerService $mailerService)
    {
        $mailer = $mailerService->save($request->getDTO());
        event(new StoreMailer($request->getDTO()));
        return redirect(route('mailer.show', ['uuid' => $mailer->uuid]));
    }

    public function show(Request $request)
    {
        $mailer = Mailer::where('uuid', $request->uuid)->firstOrFail();
        return view('show', compact('mailer'));
    }
}
