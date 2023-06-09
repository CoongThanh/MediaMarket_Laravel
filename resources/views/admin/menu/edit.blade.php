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
                    <input type="text" name="name" value="{{ $menu->name }}" class="form-control" placeholder="Nhập tên danh mục">
                </div>

                <div class="form-group">
                    <label>Danh Mục</label>
                    <select name="parent_id" class="form-control">
                        <option value="0"  {{ $menu->parent_id == 0 ? 'selected' : ''}}>Danh Mục Cha</option>
                        @foreach ($menus as $menuParent)
                            <option value="{{ $menuParent->id }}"
                                {{ $menu->parent_id == $menuParent-> id ? 'selected' : ''}}>
                                {{ $menuParent->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tiêu Đề</label>
                    <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                </div>

                <div class="form-group">
                    <label>Mô Tả Chi Tiết</label>
                    <textarea name="content" id="content"  class="form-control">{{ $menu->content }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Kích Hoạt</label>
                    <div class="form-group">

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="1" type="radio" id="customRadio1"
                                name="active" {{ $menu->active == 1 ? 'checked=""' : ''}}>
                            <label for="active" class="custom-control-label">Có</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" value="0" type="radio" id="no_active" 
                                name="active" {{ $menu->active == 0 ? 'checked=""' : ''}}>
                            <label for="no_active" class="custom-control-label">Không</label>
                        </div>
                    </div>
                </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
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
