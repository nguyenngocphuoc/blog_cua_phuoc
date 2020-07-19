@extends('backend.layout.master')

@section('title', 'Edit ReWorks')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
<link rel="stylesheet" href="{{ asset('backend/components/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        CẬP NHẬT CÔNG VIỆC
        <small><a href="{{ route('admin.reworks.index') }}" class="btn btn-block btn-xs btn-warning btn-flat">Quay
                lại</a></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#" style="margin-right: 30px; font-size: 15px;"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <form action="{{ route('admin.reworks.update',$reworks->id) }}" method="POST" enctype="multipart/form-data"
            role="form">
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="reworkstitle">Tiêu đề</label>
                            <input type="text" name="title" value="{{ $reworks->title }}" class="form-control"
                                id="reworkstitle">
                        </div>
                        <div class="form-group">
                            <label>Yêu cầu công việc</label>
                            <textarea class="textarea" name="details" placeholder="Nhập yêu cầu công việc..."
                                style="width: 100%; height: 285px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{ $reworks->details }}
                                </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Phân loại công việc</label>
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reworksimage">Hình ảnh bài viết</label>
                            <input type="file" name="image" id="reworksimage">
                            <p class="help-block">(Hình ảnh được đăng dưới 2 loại .png hoặc .jpg)</p>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="form-group">
                            <label>CHI TIẾT CÔNG VIỆC</label>
                            <div class="form-inline col-sm-12">
                                <span class="col-sm-4">Địa điểm làm việc:</span>
                                <input name="work_address" type="text" style="height: 30px;" value="{{ $reworks->work_address }}"
                                    class="form-control col-sm-8" placeholder="Nhập địa chỉ làm việc" id="address">
                            </div>
                            <div class="form-inline col-sm-12" style="margin-top: 10px;">
                                <span class="col-sm-4">Hạn nộp hồ sơ:</span>
                                <input name="deadline_for_sub" type="text" style="height: 30px;" value="{{ $reworks->deadline_for_sub }}"
                                    class="form-control col-sm-8" placeholder="Nhập hạn nộp hồ sơ" id="deadForSub">
                            </div>
                            <div class="form-inline col-sm-12" style="margin-top: 10px;">
                                <span class="col-sm-4">Mức lương cơ bản:</span>
                                <input name="salary" type="text" style="height: 30px;" class="form-control col-sm-8"
                                    placeholder="Nhập mức lương cơ bản" id="salary" value="{{ $reworks->salary }}">
                            </div>
                            <div class="form-inline col-sm-12" style="margin-top: 10px;">
                                <span class="col-sm-4">Số lượng tuyển dụng:</span>
                                <input name="emp_total" type="text" style="height: 30px;" class="form-control col-sm-8"
                                    placeholder="Nhập số lượng tuyển dụng" id="empTotal" value="{{ $reworks->emp_total }}">
                            </div>
                        </div>
                        <div class="box-footer form-inline col-sm-12" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-primary btn-flat">CẬP NHẬP</button>
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
<script src="{{ asset('backend/components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
$(function() {

    $('.select2').select2();

    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue'
    });

    $('.textarea').wysihtml5();
});
</script>
@endpush