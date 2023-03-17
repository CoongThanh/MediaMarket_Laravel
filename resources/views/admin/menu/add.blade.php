@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="POST">
            <div class="card-body">

                <div class="form-group">
                    <label for="text">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
                </div>

                <div class="form-group">
                    <label>Danh Mục</label>
                    <select name="parent_id" class="form-control">
                        <option value=0>Danh Mục 1</option>
                        @foreach ($menus as $menu)
                            <option value={{ $menu->id }}>{{ $menu->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tiêu Đề</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Kích Hoạt</label>
                    <div class="form-group">

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="customRadio1"
                                name="active" checked="">
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active" 
                                name="active">
                            <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
                </div>

                @csrf
        </form>
    </div>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection