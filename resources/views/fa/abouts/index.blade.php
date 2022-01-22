@extends('fa.layouts.app')
@section('content')
    <div class="row">

<div class="col-12 my-3">
    <div class="card">
        <div class="card-body text-center">
           <div class="row">
               <div class="col">
                   <img src="{{ asset('img/logo.jpg') }}" alt="" style="width: 150px;height: 150px;margin: 10px auto">
               </div>
           </div>
            <div class="row">
                <div class="col my-3" style="text-align: justify">
                    {{ $about->text }}
                </div>
            </div>
        </div>
    </div>
</div>
    </div>

@endsection
