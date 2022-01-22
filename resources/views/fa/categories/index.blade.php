@extends('fa.layouts.app')
@section('content')
    <div class="row mt-3">
        @forelse($categories as $category)
<div class="col-lg-3 col-md-4 col-sm-12 my-3">

           <div class="cat-box" style="background: {{ $loop->index %2 == 0 ? "#2980b9" : "#34495e" }}">
               <a href="{{ route('categories.single',$category->id) }}">{{ $category->name }}
               <p class="mt-3">تعداد پروژه ها :
                   <span>{{ $category->projects->count() }}</span>
                   <span>عدد</span>
               </p>
               </a>
           </div>
        </div>

        @empty
           <div class="col-12">
               <div class="alert alert-danger">دسته بندی وجود ندارد</div>
           </div>
        @endforelse
    </div>


@endsection
