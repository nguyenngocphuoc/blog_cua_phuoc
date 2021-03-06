@extends('backend.layout.master')

@section('title', 'Settings')

@push('styles')

@endpush

@section('content')

<section class="content-header">
    <h1>
        Settings
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Thiết lập chung</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Liên kết</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Giới thiệu</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Địa chỉ</a></li>
                </ul>
                <form action="{{ route('admin.settings.store') }}" method="post" class="form-horizontal"
                    enctype="multipart/form-data" role="form">
                    @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="sitename" class="col-sm-2 control-label">Tên Trang Web:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="site_name" class="form-control" id="sitename"
                                            value="{{ @$setting->site_name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="metadescription" class="col-sm-2 control-label">Mô Tả Trang Web:</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" name="meta_description" class="form-control"
                                            id="metadescription">{{ @$setting->meta_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sitelogo" class="col-sm-2 control-label">Logo Trang Web:</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="file" name="site_logo" class="form-control" id="sitelogo"
                                            value="{{ @$setting->site_logo }}"
                                            accept="image/gif, image/jpeg, image/png">
                                    </div>
                                    <div class="col-sm-10 col-md-4">
                                        @if(@$setting->site_logo)
                                        <div class="bgimage"
                                            style="background-image:url({{ asset('images/'.@$setting->site_logo) }})">
                                        </div>
                                        @else
                                        <div class="bgimage"
                                            style="background-image:url({{ asset('images/logo.png') }}"></div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sitefavicon" class="col-sm-2 control-label">Favicon Trang web:</label>
                                    <div class="col-sm-10 col-md-6">
                                        <input type="file" name="site_favicon" class="form-control" id="sitefavicon"
                                            accept="image/gif, image/jpeg, image/png">
                                    </div>
                                    <div class="col-sm-10 col-md-4">
                                        @if(@$setting->site_favicon)
                                        <img src="{{ asset('images/'.@$setting->site_favicon) }}" alt="Site Favicon"
                                            class="img-responsive">
                                        @else
                                        <img src="{{ asset('images/favicon.ico') }}" alt="Site Logo"
                                            class="img-responsive" width="36">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="siteemail" class="col-sm-2 control-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="siteemail"
                                            value="{{ @$setting->email }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sitephone" class="col-sm-2 control-label">Số Điện Thoại:</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="phone" class="form-control" id="sitephone"
                                            value="{{ @$setting->phone }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_2">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="sfacebook" class="col-sm-2 control-label">Facebook:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="facebook" class="form-control" id="sfacebook"
                                            value="{{ @$setting->facebook }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stwitter" class="col-sm-2 control-label">Twitter:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" class="form-control" id="stwitter"
                                            value="{{ @$setting->twitter }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slinkedin" class="col-sm-2 control-label">LinkedIn:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" class="form-control" id="slinkedin"
                                            value="{{ @$setting->linkedin }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="syoutube" class="col-sm-2 control-label">Youtube:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="youtube" class="form-control" id="syoutube"
                                            value="{{ @$setting->youtube }}">
                                    </div>
                                </div>
                                <small class="pull-right"><em>Nếu bạn không muốn hiển thị phương tiện truyền thông xã
                                        hội, chỉ cần để trống trường nhập.</em></small>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_3">
                            <div class="box-body">
                                <div class="aboutus">
                                    <label>About Us</label>
                                    <textarea class="textarea" id="editor1" name="about_us"
                                        paceholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$setting->about_us }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_4">
                            <div class="box-body">
                                <div class="address">
                                    <label>Address</label>
                                    <textarea class="textarea" id="editor2" name="address" value="Place some text here"
                                        style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ @$setting->address }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" name="genarel" class="btn btn-info btn-flat">Thay đổi</button>
                    </div>

            </div>
            </form>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
    $(function () {
		CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    });
</script>
@endpush
