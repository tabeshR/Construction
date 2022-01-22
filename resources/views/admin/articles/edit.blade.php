@extends('admin.layouts.app')
@section('title')
    ویرایش مقاله
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
        {{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item">
            <a href="{{ route('admin.sliders.index') }}">مدیریت مقالات </a>
        </li>
        <li class="breadcrumb-item active"> ویرایش مقاله </li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">ویرایش مقاله </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal"  method="post" action="{{ route('admin.articles.update',$article->id) }}">
                    @csrf
                    @method('patch')
                    <div class="card-body">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

                            <div class="col-sm-10">
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('subject',$article->subject) }}">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان لاتین</label>

                            <div class="col-sm-10">
                                <input type="text" name="en_subject" class="form-control @error('en_subject') is-invalid @enderror" id="inputEmail3" placeholder="Enter the subject" value="{{ old('en_subject',$article->en_subject) }}">
                                @error('en_subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">متن مقاله</label>

                            <div class="col-sm-10">
                                <textarea rows="10"  name="text" class="form-control @error('text') is-invalid @enderror" id="inputEmail3" placeholder="متن مقاله را وارد کنید">{{ old('text',$article->text) }}</textarea>
                                @error('text')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">متن لاتین مقاله</label>

                            <div class="col-sm-10">
                                <textarea rows="10"  name="text" class="form-control @error('en_text') is-invalid @enderror" id="inputEmail3" placeholder="Article Latin Body" dir="ltr">{{ old('en_text',$article->en_text) }}</textarea>
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
                        <a href="{{ route('admin.articles.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection

