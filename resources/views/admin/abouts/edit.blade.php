@extends('admin.layouts.app')
@section('title')
  ویرایش درباره ما
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
        {{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item">
            <a href="{{ route('admin.abouts.index') }}">درباره ما </a>
        </li>
        <li class="breadcrumb-item active"> ویرایش درباره ما</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ویرایش درباره ما </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal"  method="post" action="{{ route('admin.abouts.update',$about->id) }}">
                    @csrf
                    @method('patch')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">درباره ما</label>

                            <div class="col-sm-10">
                                <textarea name="text" id="" cols="30" rows="20" class="form-control @error('text') is-invalid @enderror" >{{ old('text',$about->text) }}</textarea>
                                @error('text')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">about us</label>

                            <div class="col-sm-10">
                                <textarea name="en_text" id="" cols="30" rows="20" class="form-control @error('en_text') is-invalid @enderror" dir="ltr">{{ old('en_text',$about->en_text) }}</textarea>
                                @error('en_text')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش</button>
                        <a href="{{ route('admin.abouts.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection

