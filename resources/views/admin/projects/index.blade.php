@extends('admin.layouts.app')
@section('title')
    مدیریت پروژه ها
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
{{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item active">مدیریت پروژه ها</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col mb-2">
            <a class="btn btn-sm btn-primary float-left" href="{{ route('admin.projects.create') }}">افزودن پروژه جدید</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول پروژه ها</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>آیدی</th>
                            <th>عکس</th>
                            <th>دسته بندی</th>
                            <th>عنوان</th>
                            <th>عنوان لاتین</th>
                            <th>توضیحات</th>
                            <th>توضیحات لاتین</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>
                                    <img src="{{ asset('img/projects/'.$project->img) }}" alt="" style="width: 200px;height: 100px;">
                                </td>
                                <td>{{ $project->category->name }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->en_name}}</td>
                                <td>{{ \Str::limit($project->description,20) }}</td>
                                <td>{{ \Str::limit($project->en_description,20) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.projects.edit',$project->id) }}" class="btn btn-primary btn-sm">ویرایش</a>

                                            <a onclick="event.preventDefault();askForDelete('{{ $project->id }}')" href="#" class="btn btn-danger btn-sm">حذف</a>

                                    </div>

                                        <form action="{{ route('admin.projects.destroy',$project->id) }}" method="post" id="delete-{{ $project->id }}">
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
                text: "آیا از حذف این پروژه اطمینان دارید ؟",
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
                        title: 'پروژه با موفقیت حذف شد'
                    })
                }
            })
        }
    </script>

    @endsection
