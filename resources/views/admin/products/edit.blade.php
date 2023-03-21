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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="text">Tên Sản Phẩm</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                placeholder="Nhập tên sản phẩm">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Danh Mục</label>
                            <select name="parent_id" class="form-control">
                                @foreach ($menus as $menu)
                                    <option value="{{ $menu->id }}" {{ $product->menu_id == $menu->id ? 'selected' : '' }}>{{ $menu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Giá Gốc</label>
                            <input type="number" name="price" min="1" value="{{ $product->price }}"
                                class="form-control">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Giá Giảm</label>
                            <input type="number" name="price_sale" min="1" value="{{ $product->price_sale }}"
                                class="form-control">
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="form-group">
                    <label>Tiêu Đề</label>
                    <textarea name="description" value="{{ $product->description }}"class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label>Mô Tả Chi Tiết</label>
                    <textarea name="content" value="{{ $product->content }} id="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="menu">Ảnh Sản Phẩm</label>
                    <input type="file" class="form-control" id="upload">
                    <div id="image_show">
                        <a href="{{ $product->thumb }}" target="_blank">
                            <img src="{{ $product->thumb }}" alt="" width="100px">
                        </a>
                    </div>
                    <input type="hidden" name="thumb" value="{{ $product->thumb }} id="thumb">
                </div>
                <div class="form-group">
                    <label for="">Kích Hoạt</label>
                    <div class="form-group">

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="active"
                                name="active"{{ $product->active == 1 ? 'checked' : '' }}>
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active"
                                name="active"{{ $product->active == 0 ? 'checked' : '' }}>
                            <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật</button></button>
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
