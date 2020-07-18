@extends('backend.layout.master')

@section('title', 'Create User')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        Tạo mới người dùng
        <small><a href="{{ route('admin.users.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i
                    class="fa fa-plus"></i> Quay lại</a></small>
    </h1>
    {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol> --}}
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf

            <div class="col-md-6">
                <div class="box box-primary">

                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo mới người dùng</h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label for="username">Tên</label>
                            <input type="text" name="name" class="form-control" id="username" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" name="email" class="form-control" id="useremail"
                                value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" name="password" class="form-control" id="userpassword"
                                value="{{ old('password') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Quyền</label>
                            <select name="role_id" class="form-control" style="width: 100%;">
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userimage">Ảnh</label>
                            <input type="file" name="photo" id="userimage">
                            <p class="help-block">(Hình ảnh phải ở định dạng .png hoặc .jpg)</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="status" checked> Hoạt động
                            </label>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">Xác nhận</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</section>

@endsection

@push('scripts')
<!-- iCheck -->
<script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
        });
</script>
@endpush
