@extends('fa.layouts.app')
@section('slider')

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 0!important;">
        {{--        <div class="carousel-indicators">--}}
        {{--            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
        {{--            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
        {{--            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
        {{--        </div>--}}
        <div class="carousel-inner">
            @forelse(\App\Models\Slider::all() as $key => $slider)
                <div class="carousel-item {{ $loop->index == 0 ? "active"  :"" }}">

                    <img class="img-fluid" src="{{ asset('img/sliders/'.$slider->img) }}" alt="">




                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>{{ $slider->subject }}</h1>
                            <p>{{ $slider->description }}</p>
                        </div>
                    </div>
                </div>

                @empty

                @endforelse
        </div>
        {{--        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">--}}
        {{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--            <span class="visually-hidden">Previous</span>--}}
        {{--        </button>--}}
        {{--        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">--}}
        {{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--            <span class="visually-hidden">Next</span>--}}
        {{--        </button>--}}
    </div>
    @endsection
@section('content')
    <div class="row">
        <div class="col">
{{--            <div class="arzyabi">--}}
{{--                <div class="row">--}}
{{--                    <div class="col">--}}
{{--                        <h1 class="mt-5 mb-3 text-center">--}}
{{--                            ارزیابی رایگان پروژه‌های شما--}}
{{--                        </h1>--}}
{{--                        <p class="text-center">--}}
{{--                            شماره تلفن خود را در کادر مقابل وارد نمایید.با شما تماس خواهیم گرفت--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div class="col" style="padding-top: 52px">--}}
{{--                        <p>--}}
{{--                            شماره تلفن همراه</p>--}}
{{--                        <form class="form-inline">--}}
{{--                            <div class="form-group mb-2">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <input type="text" class="form-control" id="inputPassword2" placeholder="09131234567">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-sm mb-2" style="padding: 8px">ارسال درخواست</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    @endsection

