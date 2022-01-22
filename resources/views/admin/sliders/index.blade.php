@extends('admin.layouts.app')
@section('title')
    مدیریت اسلاید ها
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
{{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item active">مدیریت اسلاید ها</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col mb-2">
            <a class="btn btn-sm btn-primary float-left" href="{{ route('admin.sliders.create') }}">افزودن اسلاید جدید</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول اسلاید ها</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>آیدی</th>
                            <th>عکس</th>
                            <th>عنوان</th>
                            <th>توضیحات</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>
                                    <img src="{{ asset('img/sliders/'.$slider->img) }}" alt="" style="width: 200px;height: 100px;">
                                </td>
                                <td>{{ $slider->subject }}</td>
                                <td>{{ $slider->description }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.sliders.edit',$slider->id) }}" class="btn btn-primary btn-sm">ویرایش</a>

                                            <a onclick="event.preventDefault();askForDelete('{{ $slider->id }}')" href="#" class="btn btn-danger btn-sm">حذف</a>

                                    </div>

                                        <form action="{{ route('admin.sliders.destroy',$slider->id) }}" method="post" id="delete-{{ $slider->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
        </div>

    </div>
@endsection
@section('script')
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-left',
            iconColor: 'white',
            customClass: {
                popup: 'colored-toast'
            },
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        function askForDelete(id) {
            Swal.fire({
                title: '',
                text: "آیا از حذف این اسلاید اطمینان دارید ؟",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'حذف کن',
                cancelButtonText:"لغو عملیات"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-'+id).submit();
                    Toast.fire({
                        icon: 'success',
                        title: 'اسلاید با موفقیت حذف شد'
                    })
                }
            })
        }
    </script>

    @endsection
