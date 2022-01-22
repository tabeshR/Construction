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
            <a class="btn btn-sm btn-primary float-left" href="{{ route('admin.articles.create') }}">افزودن مقاله جدید</a>
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
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->subject }}</td>
                                <td>{{ \Str::limit($article->text,10) }}</td>
                                <td>{{ $article->en_subject }}</td>
                                <td>{{ \Str::limit($article->en_text,10) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.articles.edit',$article->id) }}" class="btn btn-primary btn-sm">ویرایش</a>

                                            <a onclick="event.preventDefault();askForDelete('{{ $article->id }}')" href="#" class="btn btn-danger btn-sm">حذف</a>

                                    </div>

                                        <form action="{{ route('admin.articles.destroy',$article->id) }}" method="post" id="delete-{{
                                        $article->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
                {{ $articles->render() }}
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
