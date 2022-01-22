@extends('admin.layouts.app')
@section('title')
    درباره ما
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
{{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item active">درباره ما</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">درباره ما
                        <a href="{{ route('admin.abouts.edit',$about->id) }}" class="btn btn-primary btn-sm float-left">ویرایش</a>
                    </h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body p-5" style="text-align: justify">
                <div class="row">
                    <div class="col">
                        {{ $about->text }}
                    </div>
                </div>
                    <hr>
                    <div class="row">
                        <div class="col my-3">
                            {{ $about->en_text }}
                        </div>
                    </div>
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
                text: "آیا از حذف این مقاله اطمینان دارید ؟",
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
                        title: 'مقاله با موفقیت حذف شد'
                    })
                }
            })
        }
    </script>

    @endsection
