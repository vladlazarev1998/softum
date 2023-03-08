@extends('app')

@section('content')
    <div class="w-50 pt-4 pb-4 m-auto">
        <div class="row mb-4">
            <div class="col-sm-3">
                {{ __('From:') }}
            </div>
            <div class="col-sm-9">
                {{ $mailer->from }}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-3">
                {{ __('To:') }}
            </div>
            <div class="col-sm-9">
                {{ $mailer->to }}
            </div>
        </div>
        @if($mailer->cc)
            <div class="row mb-4">
                <div class="col-sm-3">
                    {{ __('CC:') }}
                </div>
                <div class="col-sm-9">
                    {{ $mailer->cc }}
                </div>
            </div>
        @endif
        <div class="row mb-4">
            <div class="col-sm-3">
                {{ __('Type:') }}
            </div>
            <div class="col-sm-9">
                {{ $mailer->type }}
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-3">
                {{ __('Body:') }}
            </div>
            <div class="col-sm-9">
                <iframe srcdoc="{{ $mailer->body }}"></iframe>
            </div>
        </div>
    </div>
@endsection
