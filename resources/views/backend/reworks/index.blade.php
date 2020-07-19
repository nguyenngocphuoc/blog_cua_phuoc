@extends('backend.layout.master')

@section('title', 'ReWork')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        QUẢN LÝ CÔNG VIỆC
        <small><a href="{{ route('admin.reworks.create') }}" class="btn btn-block btn-xs btn-success btn-flat"><i
                    class="fa fa-plus"></i> Thêm Mới</a></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#" style="margin-right: 30px; font-size: 15px;"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh bài viết</th>
                                <th>Tiêu đề</th>
                                <th>Slug</th>
                                <th>Nội dung chi tiết</th>
                                <th>Thể loại</th>
                                <th>Status</th>
                                <th>Lượt xem</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($listReWorks as $reworks)
                            <tr>
                                <td>{{ $reworks->id }}</td>
                                <td>
                                    <img src="{{ asset('images/'.$reworks->image) }}" alt="{{ $reworks->title }}"
                                        width="120px">
                                </td>
                                <td>{{ $reworks->title }}</td>
                                <td>{{ $reworks->slug }}</td>
                                <td>{{ str_limit(strip_tags($reworks->details),300) }}</td>
                                <td>{{ @$reworks->category->name }}</td>
                                <td>{{ $reworks->status ? 'Published' : 'Unpublished' }}</td>
                                <td>{{ $reworks->view_count }}</td>
                                <td>
                                    <div class="btn-group-vertical">
                                        <div class="form-inline">
                                            <a href="" class="btn btn-primary btn-flat"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('admin.reworks.edit',$reworks->id) }}"
                                                class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-flat" onclick="if (confirm('Bạn có muốn xóa {{$reworks->title}} không?')) {
                                                  event.preventDefault();
                                                        document.getElementById('reworks-delete-form-{{$reworks->id}}').submit();
                                                }">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form id="reworks-delete-form-{{$reworks->id}}"
                                                action="{{ route('admin.reworks.destroy',$reworks->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('backend/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
$(function() {
    $('#category-table').DataTable();
})
</script>
@endpush