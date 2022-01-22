@extends('admin.layouts.app')
@section('title')
شبکه های اجتماعی ما
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
        {{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item">
            <a href="{{ route('admin.projects.index') }}">مدیریت پروژه ها</a>
        </li>
        <li class="breadcrumb-item active">
            شبکه های اجتماعی ما</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        ویرایش و افزودن شبکه های اجتماعی
                    </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ route('admin.contacts.socials') }}">
                    @csrf
                    <div class="card-body">


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">اینستاگرام</label>

                            <div class="col-sm-10">
                                <input dir="ltr" type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" id="inputEmail3"  value="{{ old('instagram',$contact->instagram) }}">
                                @error('instagram')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">تلگرام</label>

                            <div class="col-sm-10">
                                <input dir="ltr" type="text" name="telegram" class="form-control @error('telegram') is-invalid @enderror" id="inputEmail3"  value="{{ old('telegram',$contact->telegram) }}">
                                @error('telegram')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">فیسبوک</label>

                            <div class="col-sm-10">
                                <input dir="ltr" type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="inputEmail3"  value="{{ old('facebook',$contact->facebook) }}">
                                @error('facebook')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">واتساپ</label>

                            <div class="col-sm-10">
                                <input dir="ltr" type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" id="inputEmail3"  value="{{ old('whatsapp',$contact->whatsapp) }}">
                                @error('whatsapp')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت</button>
                        <a href="{{ route('admin.contacts.socials') }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
@endsection

