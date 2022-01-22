@extends('en.layouts.app')
@section('content')
    <div class="row">
        @forelse($categories as $category)
<div class="col-lg-3 col-md-4 col-sm-12 my-3">
            <div class="cat-box" style="background: {{ $loop->index %2 == 0 ? "#2980b9" : "#34495e" }}">
                <a href="{{ route('categories.single',[$category->id,'lang=en']) }}">{{ $category->en_name }}
                    <p class="mt-3">Projects :
                        <span>{{ $category->projects->count() }}</span>
                        <span>items</span>
                    </p>
                </a>
    </div>
</div>
        @empty
            <div class="alert alert-danger">Category not found</div>
        @endforelse
    </div>


@endsection
