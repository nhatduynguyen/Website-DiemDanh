@if (Auth::user()->level==0)
<div class="container mt-1 mb-2" style="color: #0077ff ;">
    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block" >
            <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-white d-flex align-items-center menu-collapsed">
                    <small>TÙY CHỌN</small>
                </li>
                <a href="{{ route('client.adDsUser') }}" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Danh sách sinh viên</span>
                    </div>
                </a>
                <a href="{{ route('client.adDsRoom') }}" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Danh sách phòng</span>
                    </div>
                </a>
                <a href="{{ route('client.adDsClass') }}" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start
                  align-items-center">
                        <span class="fa fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Danh sách lớp </span>
                    </div>
                </a>
                <a href="{{ route('client.adDsDevice') }}" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start
                  align-items-center">
                        <span class="fa fa-calendar fa-fw mr-3"></span>
                        <span class="menu-collapsed">Danh sách Device </span>
                    </div>
                </a>
                <!-- Separator without title -->
                <li class="list-group-item sidebar-separator menu-collapsed"></li>
                <!-- /END Separator -->
                <a href="https://forum.uit.edu.vn/" target="_blank" class="bg-dark list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-question fa-fw mr-3"></span>
                        <span class="menu-collapsed">Trợ giúp</span>
                    </div>
                </a>
            </ul><!-- List Group END-->
        </div>
        @endif
        @if (Auth::user()->level==1)
        <div class="container mt-1 mb-2">
            <!-- Bootstrap row -->
            <div class="row" id="body-row">
                <!-- Sidebar -->
                <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                    <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                    <!-- Bootstrap List Group -->
                    <ul class="list-group">
                        <!-- Separator with title -->
                        <li class="list-group-item sidebar-separator-title text-white d-flex align-items-center menu-collapsed">
                            <small>TÙY CHỌN</small>
                        </li>
                        <a href="{{ route('client.adDsClass') }}" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start
                  align-items-center">
                                <span class="fa fa-calendar fa-fw mr-3"></span>
                                <span class="menu-collapsed">Danh sách lớp </span>
                            </div>
                        </a>
                        <a href="https://forum.uit.edu.vn/" target="_blank" class="bg-dark list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="fa fa-question fa-fw mr-3"></span>
                                <span class="menu-collapsed">Trợ giúp</span>
                            </div>
                        </a>
                    </ul><!-- List Group END-->
                </div>
                @endif
                @if (Auth::user()->level==2)
                <div class="container mt-1 mb-2">
                    <!-- Bootstrap row -->
                    <div class="row" id="body-row">
                        <!-- Sidebar -->
                        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                            <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
                            <!-- Bootstrap List Group -->
                            <ul class="list-group">
                                <!-- Separator with title -->
                                <li class="list-group-item sidebar-separator-title text-white d-flex align-items-center menu-collapsed">
                                    <small>TÙY CHỌN</small>
                                </li>
                                <a href="{{ route('client.adDsRoom') }}" class="bg-dark list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-start align-items-center">
                                        <span class="fa fa-calendar fa-fw mr-3"></span>
                                        <span class="menu-collapsed">Danh sách phòng</span>
                                    </div>
                                </a>
                                <a href="{{ route('client.adDsDevice') }}" class="bg-dark list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-start
                    align-items-center">
                                        <span class="fa fa-calendar fa-fw mr-3"></span>
                                        <span class="menu-collapsed">Danh sách Device </span>
                                    </div>
                                </a>
                                <a href="https://forum.uit.edu.vn/" target="_blank" class="bg-dark list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-start align-items-center">
                                        <span class="fa fa-question fa-fw mr-3"></span>
                                        <span class="menu-collapsed">Trợ giúp</span>
                                    </div>
                                </a>
                            </ul><!-- List Group END-->
                        </div>
                        @endif