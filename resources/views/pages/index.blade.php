@extends('layouts.desktop')

@section('content')
<div class="row">
    
    <div class="col-md-3">
        <h2><a href="{{ route('index') }}">Danh sách</a></h2>
    </div>
    
    <div class="col-md-8">
        <form method="POST" action="{{ route('store.ifind') }}">
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger">Tìm trên IFIND</button>
        </form>
    </div>

    <div class="col-md-12">
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Địa chỉ</th>
                <th>Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

                <tr @if ($item->action == 0) class="success" @endif>
                    <td>
                        <a href="{{ route('show', $item->code) }}">{{ $item->title }}</a> <br>
                        <small><strong>{{ $item->discount }} | {{ date('d/m/Y', $item->date_end) }}</strong></small>
                    </td>
                    <td>
                        {{ $item->store_address }} <br>
                        <small>[{{ $item->store_location_lat }} , {{ $item->store_location_lng }}]</small>

                    </td>
                    <td><img src="{{ asset($item->image_path) }}" style="width: 100px;" alt=""></td>
                </tr>

            @endforeach
        </tbody>
    </table>
    </div>

</div>
@endsection