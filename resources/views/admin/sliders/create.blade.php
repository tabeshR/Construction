@extends('admin.layouts.app')
@section('title')
    افزودن اسلاید جدید
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
{{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item">
            <a href="{{ route('admin.sliders.index') }}">مدیریت اسلاید ها</a>
        </li>
        <li class="breadcrumb-item active"> افزودن اسلاید جدید</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">افزودن اسلاید جدید</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('admin.sliders.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <img id="previewImg" src="" style="width: 100%;height: 300px;">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عکس</label>

                            <div class="col-sm-10">
                                <input onchange="previewFile(this);" type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان</label>

                            <div class="col-sm-10">
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="inputEmail3" placeholder="عنوان را وارد کنید" value="{{ old('subject') }}">
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
                                <input type="text" name="en_subject" class="form-control @error('en_subject') is-invalid @enderror" id="inputEmail3" placeholder="Enter the subject" value="{{ old('en_subject') }}" dir="ltr">
                                @error('en_subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>

                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="inputEmail3" placeholder="توضیحات را وارد کنید" value="{{ old('description') }}">
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات لاتین</label>

                            <div class="col-sm-10">
                                <input type="text" name="en_description" class="form-control @error('en_description') is-invalid @enderror" id="inputEmail3" placeholder="Enter the description" value="{{ old('en_description') }}" dir="ltr">
                                @error('en_description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">افزودن</button>
                        <a href="{{ route('admin.sliders.index') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function previewFile(input){
            var file = $("input[type=file]").get(0).files[0];

            if(file){
                var reader = new FileReader();

                reader.onload = function(){
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
    @endsection
