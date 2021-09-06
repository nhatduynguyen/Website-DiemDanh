@if (Auth::user()->level==0)
<header class="header-index">
 <div class="row">
  <div class="col-lg-2 col-xs-2 ">
  <a class="navbar-brand " href="{{ route('client.home') }}"style="margin-top: 0px;margin-bottom: 0px;margin-left: 160px;margin-right: 0px;"><img src="{{ asset('public/images/UIT_logo.png') }}" class="logo " alt=""style="width: 50px;"></a>
  </div>
  <div class="col-lg-8 col-xs-6 " style="margin-top: 15px;">
    <marquee direction="right">
          <a class="navbar-toggle" style="font-size: 30px; color: #0077ff ; font-weight: bold;">
            TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
          </a>
    </marquee>
  </div>
 
   <div class="container">
      <nav class="navbar navbar-index1 navbar-expand-lg navbar-dark ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>
        </button>
        @if(isset(Auth::user()->email))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.home') }}">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.demoSchedule') }}">Lịch học <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.adDsUser') }}">Quản lý<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item active">
              <a class="nav-linknav ">Xin chào, {{Auth::user()->name}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ url('/login/logout') }}">Đăng xuất <span class="sr-only">(current)</span></a>
            </li>
  
          </ul>
      </nav>
    </div>
    @endif
</div>
  </div>
</header>
@endif
@if (Auth::user()->level==1)
<header class="header-index">
 <div class="row">
  <div class="col-lg-2 col-xs-2 ">
  <a class="navbar-brand " href="{{ route('client.home') }}"style="margin-top: 0px;margin-bottom: 0px;margin-left: 160px;margin-right: 0px;"><img src="{{ asset('public/images/UIT_logo.png') }}" class="logo " alt=""style="width: 50px;"></a>
  </div>
  <div class="col-lg-8 col-xs-6 " style="margin-top: 15px;">
    <marquee direction="right">
          <a class="navbar-toggle" style="font-size: 30px; color: #0077ff ; font-weight: bold;">
            TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
          </a>
    </marquee>
  </div>
 
   <div class="container">
      <nav class="navbar navbar-index1 navbar-expand-lg navbar-dark ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>
        </button>
        @if(isset(Auth::user()->email))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.home') }}">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.demoSchedule') }}">Lịch học <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav ">Xin chào, {{Auth::user()->name}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ url('/login/logout') }}">Đăng xuất <span class="sr-only">(current)</span></a>
            </li>
  
          </ul>
      </nav>
    </div>
    @endif
</div>
  </div>
</header>
@endif
@if (Auth::user()->level==2)
<header class="header-index">
 <div class="row">
  <div class="col-lg-2 col-xs-2 ">
  <a class="navbar-brand " href="{{ route('client.home') }}"style="margin-top: 0px;margin-bottom: 0px;margin-left: 160px;margin-right: 0px;"><img src="{{ asset('public/images/UIT_logo.png') }}" class="logo " alt=""style="width: 50px;"></a>
  </div>
  <div class="col-lg-8 col-xs-6 " style="margin-top: 15 px;">
    <marquee direction="right">
          <a class="navbar-toggle" style="font-size: 30px; color: #0077ff ; font-weight: bold;">
            TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
          </a>
    </marquee>
  </div>
 
   <div class="container">
      <nav class="navbar navbar-index1 navbar-expand-lg navbar-dark ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>
        </button>
        @if(isset(Auth::user()->email))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ route('client.home') }}">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav ">Xin chào, {{Auth::user()->name}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-linknav " href="{{ url('/login/logout') }}">Đăng xuất <span class="sr-only">(current)</span></a>
            </li>
  
          </ul>
      </nav>
    </div>
    @endif
</div>
  </div>
</header>
@endif