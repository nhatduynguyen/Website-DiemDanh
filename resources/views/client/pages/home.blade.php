@extends('layouts.desktop')
@section('content')
@include('client.blocks.navbar')

@if (Auth::user()->level==0)
<div class="container mt-1 mb-2">
    <!-- MAIN -->
    <div class="col">
        <div class="content_home">
            <div class="text_home">
                <h1> hệ thống quản lý điểm danh sinh viên </h1>
            </div>
            <div class="button_home">
                <a class="transparent" href="{{route('client.demoSchedule')}}">
                    <p>
                        <span class="base"></span>
                        <span class="text">quản lý Điểm danh</span>
                    </p>
                </a>
                <a class="transparent" href="{{ route('client.adDsClass') }} ">
                    <p>
                        <span class="base"></span>
                        <span class="text">Quản lý lớp học</span>
                    </p>
                </a>
                <a class="transparent" href="{{ route('client.adDsUser') }}">
                    <p>
                        <span class="base"></span>
                        <span class="text">Quản lý sinh viên</span>
                    </p>
                </a>
                <a class="transparent" href="{{ route('client.adDsDevice') }}">
                    <p>
                        <span class="base"></span>
                        <span class="text">Quản lý Device</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endif

@if (Auth::user()->level==1)
<div class="container mt-1 mb-2">
    <!-- MAIN -->

    <div class="col">
        <div class="content_home">
            <div class="text_home">
                <h1> hệ thống quản lý điểm danh sinh viên </h1>
            </div>
            <div class="button_home">
                <a class="transparent" href="{{ route('client.demoSchedule') }} ">
                    <p>
                        <span class="base"></span>
                        <span class="text">quản lý Điểm danh</span>
                    </p>
                </a>
                <a class="transparent" href="{{ route('client.adDsClass') }} ">
                    <p>
                        <span class="base"></span>
                        <span class="text">Quản lý lớp học</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endif

@if (Auth::user()->level==2)
<div class="container mt-1 mb-2">
    <!-- MAIN -->

    <div class="col">
        <div class="content_home">

            <div class="text_home">
                <h1> hệ thống quản lý điểm danh sinh viên </h1>
            </div>
            <div class="button_home">
                <a class="transparent" href="{{ route('client.adDsDevice') }}">
                    <p>
                        <span class="base"></span>
                        <span class="text">Quản lý Device</span>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endif
@endsection

@section('js')
<script>
</script>
@endsection