<header class="header-index">
  <div class="row">
  <div class="col-lg-2 col-xs-2 ">
  <a class="navbar-brand " href="{{ route('client.home') }}"style="margin-top: 5px;margin-bottom: 0px;margin-left: 160px;margin-right: 0px;"><img src="{{ asset('public/images/UIT_logo.png') }}" class="logo " alt=""style="width: 50px;"></a>
  </div>
  <div class="col-lg-6 col-xs-6 " style="margin-top: 15px;">
    <marquee direction="right">
          <a class="navbar-toggle" data-target="#bs-example-navbar-collapse-1"  aria-expanded="false" style="font-size: 30px; color: #0077ff ; font-weight: bold;">
            TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
          </a>
    </marquee>
  </div>
  <div class="col-lg-3 col-xs-3 " style="margin-top: 15px;">
  <nav class="navbar navbar-index1 navbar-expand-lg navbar-dark ">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
    <span class="navbar-toggler-icon"></span>
        </button>
        @if(isset(Auth::user()->email))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">            
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
</nav>
</header>