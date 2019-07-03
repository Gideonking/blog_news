@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm slide
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/slide/them" method="POST">
                        @if (session('thongbao'))
                            <div class="alert alert-success">{{session('thongbao')}}</div>
                        @endif
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}
                                @endforeach
                            </div>
                        @endif
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Tên Slide</label>
                            <input class="form-control" name="Ten" placeholder="Nhập tên slide" />
                        </div>
                        <div class="form-group">
                            <label>Nôi dung</label>
                            <textarea id="noidung" name="NoiDung" class="form-control ckeditor" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nhập link</label>
                            <input class="form-control" name="link" placeholder="Nhập link cho slide" />
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" name="Hinh" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection