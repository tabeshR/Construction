@extends('admin.layouts.app')
@section('title')
    مدیریت پیام ها
@endsection
@section('breadcrumb')
    <ol class="breadcrumb float-sm-left">
{{--        <li class="breadcrumb-item"><a href="{{ route('admin.') }}">خانه</a></li>--}}
        <li class="breadcrumb-item active">مدیریت پیام ها</li>
    </ol>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">جدول پیام ها</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>آیدی</th>
                            <th>نام پیام دهنده</th>
                            <th>ایمیل یا موبایل</th>
                            <th>عنوان</th>
                            <th>پیام</th>
                            <th>عملیات</th>
                        </tr>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phoneOrEmail }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ $contact->text }}</td>
                                <td>
                                    <div class="btn-group">
                                            <a onclick="event.preventDefault();askForDelete('{{ $contact->id }}')" href="#" class="btn btn-danger btn-sm">حذف</a>

                                    </div>

                                        <form action="{{ route('admin.contacts.destroy',$contact->id) }}" method="post" id="delete-{{
                                        $contact->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
                {{ $contacts->render() }}
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
                text: "آیا از حذف این پیام اطمینان دارید ؟",
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
                        title: 'پیام با موفقیت حذف شد'
                    })
                }
            })
        }
    </script>

    @endsection
