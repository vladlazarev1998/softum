@extends('app')

@section('content')
    <div class="w-50 pt-4 pb-4 m-auto">
        <form method="POST" action="{{ route('mailer.store') }}">
            @csrf
            <div class="form-group mb-4">
                <label for="from">From</label>
                <input type="email" class="form-control" name="from" id="from" value="{{ old('from') }}">
                @error('from')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="to">To</label>
                <input type="email" class="form-control" name="to" id="to" value="{{ old('to') }}">
                @error('to')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="cc">CC</label>
                <input type="email" class="form-control" name="cc" id="cc" value="{{ old('cc') }}">
            </div>
            <div class="form-group mb-4">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}">
                @error('subject')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="text">Text</option>
                    <option value="html">HTML</option>
                </select>
                @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3">{{ old('body') }}</textarea>
                @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
@endsection
