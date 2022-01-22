@extends('fa.layouts.app')
@section('content')
    <div class="row">
        @forelse($articles as $article)
<div class="col-12 my-3">
    <div class="card">
        <div class="card-body text-center">
           <div class="row">
               <div class="col">
                   <h5 class="text-center">{{ $article->subject }}</h5>
               </div>
           </div>
            <div class="row">
                <div class="col" style="text-align: justify">
                    {{ $article->text }}
                </div>
            </div>
        </div>
    </div>
</div>
        @empty
            <div class="alert alert-danger">مقاله ای وجود ندارد</div>
        @endforelse
    </div>

<div class="row">
    <div class="col my-3">
        {{ $articles->appends(['lang'=>'fa'])->render() }}
    </div>
</div>
@endsection
