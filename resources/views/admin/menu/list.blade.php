@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th style="width:20px">ID</th>
                <th>Name</th>
                <th>Active</th>
                <th>Update</th>
                <th style="width:100px">&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            {!! \App\Helpers\Helper::menu($menus) !!} {{--  Biên dịch html --}}
        </tbody>

        <tfoot>

        </tfoot>
    </table>
@endsection
