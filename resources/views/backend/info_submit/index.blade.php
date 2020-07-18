@extends('backend.layout.master')

@section('title', 'Info Submit')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        Danh sách các ứng viên
        {{-- <small>
            <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-xs btn-success btn-flat"><i
            class="fa fa-plus"></i> Tạo mới</a>
        </small> --}}
    </h1>
    <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol> -->
</section>

<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Dữ liệu</h3>
                </div>

                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Thể loại tư vấn</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($listInfoSubmit as $info)
                            <tr>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->phone }}</td>
                                <td>{{ $info->email }}</td>
                                <td>{{ $info->address }}</td>
                                <td>{{ $info->date_of_birth }}</td>
                                <td>{{ $info->groupCategory->name }}</td>
                                <td>{{ $info->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        {{-- <a href="{{ route('admin.category.edit',$info->id) }}"
                                        class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a> --}}
                                        <a href="javascript:void(0)" class="btn btn-danger btn-flat" id="btn_delete"
                                            onclick="if (confirm('Bạn có muốn xóa thông tin của {{$info->name}} không?')) {
                                                           event.preventDefault();
                                                            document.getElementById('info-delete-form-{{$info->id}}').submit();
                                                        }">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="info-delete-form-{{$info->id}}"
                                            action="{{ route('admin.info-submit.destroy',$info->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Tên</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Thể loại tư vấn</th>
                                <th>Ngày tạo</th>
                                <th>Hành động</th>
                            </tr>
                        </tfoot>
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
