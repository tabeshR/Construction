@extends('en.layouts.app')
@section('content')
    <div class="row">

        <div class="col-12 my-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('send.message') }}" method="post">
                                @csrf
                                <div class="form-group">
                                   <div class="row">
                                       <div class="col mb-3">
                                           <label for="">Name</label>
                                           <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                           @error('name')
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                           @enderror
                                       </div>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <div class="row">
                                       <div class="col mb-3">
                                           <label for="">EmailOrPhone</label>
                                           <input value="{{ old('phoneOrEmail') }}" type="text" class="form-control @error('phoneOrEmail') is-invalid @enderror" name="phoneOrEmail">
                                           @error('phoneOrEmail')
                                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                           @enderror
                                       </div>
                                   </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="">Subject</label>
                                            <input type="text" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" name="subject">
                                            @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="">Text</label>
                                            <textarea name="text" id="" cols="30" rows="6" class="form-control @error('text') is-invalid @enderror">{{ old('text') }}</textarea>
                                            @error('text')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <button type="submit" class="btn btn-sm btn-primary">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-5 mb-3 text-center">
                            <h5>Contact with us in social network : </h5>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="https://{{ $contact->instagram }}">
                                <img src="{{ asset('img/instagram.png') }}" alt="" style="width: 50px;">
                            </a>
                        </div>
                        <div class="col text-center mb-3">
                            <a href="https://{{ $contact->telegram }}">
                                <img src="{{ asset('img/telegram.png') }}" alt="" style="width: 50px;">
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="https://{{ $contact->facebook }}">
                                <img src="{{ asset('img/facebook.png') }}" alt="" style="width: 50px;">
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="https://{{ $contact->whatsapp }}">
                                <img src="{{ asset('img/whatsapp.png') }}" alt="" style="width: 50px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
