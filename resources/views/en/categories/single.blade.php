@extends('en.layouts.app')
@section('content')
    <div class="row">
        @forelse($projects as $project)
<div class="col-lg-6 col-sm-12 my-3">
    <div class="card">
        <div class="card-body text-center">
          <div class="row">
              <div class="col">
                  <img src="https://via.placeholder.com/150" alt="" style="width: 150px;height: 150px;margin: 10px auto;border-radius: 50%">
              </div>
          </div>
            <div class="row my-3">
                <div class="col text-center">
                    <h5>{{ $project->en_name }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: justify">
                    {{ $project->en_description }}
                </div>
            </div>
        </div>
    </div>
</div>
        @empty
            <div class="alert alert-danger my-3">This category doesn't have any projects</div>
        @endforelse
    </div>

    <div class="row">
        <div class="col my-3 text-center">
            <a href="{{ route('categories','lang=en') }}" class="btn-link">All Categories</a>
        </div>
    </div>


@endsection
